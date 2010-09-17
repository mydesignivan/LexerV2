<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Contacto extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        $this->load->library('dataview', array(
            'tlp_section'          => 'frontpage/contact_view.php',
            'tlp_title'            => TITLE_CONTACTO,
            'tlp_title_section'    => "Cont&aacute;ctenos",
            'tlp_meta_description' => META_DESCRIPTION_CONTACTO,
            'tlp_meta_keywords'    => META_KEYWORDS_CONTACTO
        ));
        $this->_data = $this->dataview->get_data();
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){        
        $this->_data = $this->dataview->set_data(array(
            'tlp_script'    => array('plugins_validator', 'class_contact')
        ));
        $this->load->view('template_frontpage_view', $this->_data);
    }

    public function send(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $this->load->library('email');

            $message = EMAIL_CONTACT_MESSAGE;
            $message = str_replace('{name}', $_POST['txtName'], $message);
            $message = str_replace('{mail}', $_POST['txtEmail'], $message);
            $message = str_replace('{subject}', $_POST['txtSubject'], $message);
            $message = str_replace('{message}', $_POST['txtMessage'], $message);

            die($message);

            //$to = $_POST['cboArea'];
            $to = "ivan@mydesign.com.ar";

            $this->email->from($_POST['txtEmail'], $_POST['txtName']);
            $this->email->to($to);
            $this->email->subject(EMAIL_CONTACT_SUBJECT);
            $this->email->message(nl2br($message));
            $status = $this->email->send();
            $this->session->set_flashdata('status_sendmail', $status ? "ok" : "error");

            redirect('/contacto/');
        }
    }

    /* AJAX FUNCTIONS
     **************************************************************************/

    /* PRIVATE FUNCTIONS
     **************************************************************************/

}
?>