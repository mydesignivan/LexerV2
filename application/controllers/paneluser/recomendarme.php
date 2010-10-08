<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Recomendarme extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        if( !$this->session->userdata('logged_in') || $this->session->userdata('level')==1 ) redirect('/index/');

        $this->load->library('dataview', array(
            'tlp_title'            =>  TITLE_INDEX,
            'tlp_meta_description' => META_DESCRIPTION_INDEX,
            'tlp_meta_keywords'    => META_KEYWORDS_INDEX
        ));
        $this->_data = $this->dataview->get_data();
        $this->load->model('users_dep_model');
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        $this->load->helper('form');


        switch ($this->session->userdata('users_type')){
            //=============== DEPORTISTA ==============//
            case TBL_USERS_DEP: 
                

             //   $info = $this->users_model->get_info();
            
                $data = array(
                    'tlp_section'       => 'paneluser/personaldata/recomendarme_view.php',
                    'tlp_title_section' => 'Recomendarme',
                    'tlp_script'        => array('plugins_validator', 'helpers_json',  'class_recomendacion'),
                   
                );
            break;

        }

        $this->_data = $this->dataview->set_data($data);
        $this->load->view('template_paneluser_view', $this->_data);
    }


    public function send(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
           
            $info=$this->users_dep_model->get_info_recomendacion();
              print_array($info);
              print_array($_POST);
            $this->load->library('email');

            $message=$_POST['txtMensaje']."<br/>";

            $message.= EMAIL_RECOMENDACION_MESSAGE;
            $message = str_replace('{firstname}', $info['firstname'], $message);
            $message = str_replace('{lastname}', $info['lastname'], $message);
            $message = str_replace('{phone_area}',$info['phone_area'], $message);
            $message = str_replace('{phone_city}',$info['phone_city'], $message);
            $message = str_replace('{phone_num}', $info['phone_num'], $message);
            $message = str_replace('{celu_area}', $info['celu_area'], $message);
            $message = str_replace('{celu_city}', $info['celu_city'], $message);
            $message = str_replace('{celu_num}', $info['celu_num'], $message);
            $message = str_replace('{email}', $info['email'], $message);
            $message = str_replace('{enlace}', "enlace cv", $message);

            die($message);

            $this->email->from($info['email'], "lexer");
            $this->email->to($_POST['txtEmail']);
            $this->email->subject($_POST['txtAsunto']);
            $this->email->message(nl2br($message));
            $status = $this->email->send();
            $this->session->set_flashdata('status_sendmail', $status ? "ok" : "error");

            redirect('/paneluser/');
        }
    }






    /* AJAX FUNCTIONS
     **************************************************************************/
    public function ajax_upload_image(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            $this->load->library('superupload', array(
                'path'          => UPLOAD_PATH_CV.'.tmp/',
                'thumb_width'   => IMAGE_CV_THUMB_WIDTH,
                'thumb_height'  => IMAGE_CV_THUMB_HEIGHT,
                'maxsize'       => UPLOAD_MAXSIZE,
                'filetype'      => UPLOAD_FILETYPE,
                'resize_image_original' => false,
                'filename_prefix'       => $this->session->userdata('users_id')."_"
            ));



             echo json_encode($this->superupload->upload('txtImage'));
        }
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/

}