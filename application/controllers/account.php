<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Account extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        $this->load->model('users_model');

        $this->load->library('dataview', array(
            'tlp_title'            =>  TITLE_INDEX,
            'tlp_meta_description' => META_DESCRIPTION_INDEX,
            'tlp_meta_keywords'    => META_KEYWORDS_INDEX
        ));
        $this->_data = $this->dataview->get_data();
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************1************************/
    public function index(){
        $this->_data = $this->dataview->set_data(array(
            'tlp_section'       =>  'frontpage/account_view.php',
            'tlp_title_section' =>  'Formulario de Registro',
            'tlp_script'        =>  array('plugins_validator', 'class_account')
        ));
        $this->load->view('template_frontpage_view', $this->_data);
    }

    public function remember(){
        $this->_data = $this->dataview->set_data(array(
            'tlp_section'       =>  'frontpage/account_remember_view.php',
            'tlp_title_section' =>  '¿Olvidaste tu contrase&ntilde;a?',
            'tlp_script'        =>  array('plugins_validator', 'class_account_remember')
        ));
        $this->load->view('template_frontpage_view', $this->_data);
    }

    public function create(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            $res = $this->users_model->create();

            if( $res ){
                $this->load->library('email');

                $id = $this->encpss->urlsafe_base64_encode($res['id']);
                $link = site_url('/account/confirm_email/'.$id);

                $message = EMAIL_REG_MESSAGE;
                $message = str_replace('{link}', $link, $message);
                $message = str_replace('{email}', $this->input->post('txtEmail'), $message);
                $message = str_replace('{password}', $this->input->post('txtPass'), $message);

                $this->email->from(EMAIL_REG_FROM_MAIL, EMAIL_REG_FROM_NAME);
                $this->email->to($this->input->post('txtEmail'));
                $this->email->subject(EMAIL_REG_SUBJECT);
                $this->email->message($message);

                if( $this->email->send() ){
                    if( $res['result'] ){
                        $this->session->set_flashdata('status', 'success');
                        $this->session->set_flashdata('suffix', 'success');
                        $this->session->set_flashdata('data', array('username' => $this->input->post('txtEmail')));
                        redirect('/account/success/');
                    }else{
                        $this->session->set_flashdata('status', 'error');
                        $this->session->set_flashdata('suffix', 'errorsave');
                        redirect('/account/error/');
                    }

                }else {
                    $this->session->set_flashdata('status', 'error');
                    $this->session->set_flashdata('suffix', 'errormail');
                    $this->session->set_flashdata('message', $this->email->print_debugger());
                    redirect('/account/error/');
                }                
                
            }
        }
    }

    public function rememberpassend(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $pass = $this->users_data->get_pass();
            if( $pass ){
                $this->load->library('email');

                $message = str_replace("{pass}", $pass, EMAIL_RP_MESSAGE);

                $this->email->from(EMAIL_RP_FROM, EMAIL_RP_NAME);
                $this->email->to($this->input->post('txtEmail'));
                $this->email->subject(EMAIL_RP_SUBJECT);
                $this->email->message($message);

                if( $this->email->send() ){
                    $this->session->set_flashdata('status', 'success');
                    $this->session->set_flashdata('email', $_POST['txtEmail']);

                }else {
                    $this->session->set_flashdata('status', 'error');
                    $this->session->set_flashdata('message', $this->email->print_debugger());
                }

            }else{
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('message', 'El email ingresado no existe en nuestra base de dato.');
            }
            redirect('/olvidaste-tu-contrasenia/');
        }
    }

    public function showmsg(){
        $seg = trim($this->uri->segment(3));

        if( $this->session->flashdata('status')==$seg ){
            $suffix = $this->session->flashdata('suffix');
            
            if( is_array($this->session->flashdata('data')) ) $this->_data = $this->dataview->set_data($this->session->flashdata('data'));
            $this->_data = $this->dataview->set_data(array(
                'tlp_section'       => "frontpage/account_msg_".$suffix."_view.php",
                'tlp_title_section' => $seg=="success" ? "¡Felicitaciones!" : "Ha ocurrido un Error",
                'message'           => $this->session->flashdata('message')
            ));
            $this->load->view('template_frontpage_view', $this->_data);
        }
    }

    public function confirm_email(){
        if( $this->uri->segment(3) ){
            $seg = $this->encpss->urlsafe_base64_decode($this->uri->segment(3));
            $res = $this->users_model->activate($seg);
            if( !$res ){
                redirect($this->config->item('base_url'));

            }else{
                $this->_data = $this->dataview->set_data(array(
                    'tlp_section'       => 'frontpage/account_msg_welcome_view.php',
                    'tlp_title_section' => "¡Bienvenido!",
                    'username'          => $this->encpss->encode($res['email']),
                    'pass'              => $res['password']
                ));
                $this->load->view('template_frontpage_view', $this->_data);
            }
        }else redirect('/index/');
    }


    /* AJAX FUNCTIONS
     **************************************************************************/
    public function ajax_check_exists(){
        if( $_SERVER['REQUEST_METHOD']=="POST" && $_POST['txtEmail'] ){
            echo json_encode(!$this->users_model->check_exists($_POST['txtEmail']));
        }
    }

    /* PRIVATE FUNCTIONS
     **************************************************************************/

}
?>