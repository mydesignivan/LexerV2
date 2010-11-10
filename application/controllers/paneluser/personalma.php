<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// MEDIDAS ANTROPOMETRICAS
class Personalma extends Controller {

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
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        $this->load->model('lists_model');
        $this->load->helper('form');


        $this->load->model('users_ma_model');
        $info = $this->users_ma_model->get_info();

        $data = array(
            'tlp_section'       => 'paneluser/personaldata/dep_ma_view.php',
            'tlp_title_section' => 'Datos Personales',
            'tlp_script'        => array('plugins_validator', 'helpers_json', 'plugins_datepicker', 'class_personalma'),
            'comboLongitud'     => array('1'=>'cm','0.01'=>'m','0.3937'=>'pulg') ,
            'comboPeso'         => array('1'=>'lb','0.4536'=>'kg' ),
            'data'              => $info['info'],
            'info_obs'          => $info['obs']
        );


        $this->_data = $this->dataview->set_data($data);
        $this->load->view('template_paneluser_view', $this->_data);
    }

    public function save(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            switch ($this->session->userdata('users_type')){
                case TBL_USERS_DEP:
                    $this->load->model('users_dep_model');
                    $res = $this->users_dep_model->save();
                break;
            }

            if( $res ){
                $status = "success";
                $message = "Los datos fueron guardados con &eacute;xito.";
            }else{
                $status = "error";
                $message = "Los datos no pudieron ser guardados.";
            }

            $this->session->set_flashdata('status', $status);
            $this->session->set_flashdata('message', $message);
            redirect('/paneluser/personaldata/');
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