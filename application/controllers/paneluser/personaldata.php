<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personaldata extends Controller {

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


        switch ($this->session->userdata('users_type')){
            //=============== DEPORTISTA ==============//
            case TBL_USERS_DEP: 
                $this->load->model('users_dep_model');

                $info = $this->users_dep_model->get_info();
            
                $data = array(
                    'tlp_section'       => 'paneluser/personaldata/dep_view.php',
                    'tlp_title_section' => 'Datos Personales',
                    'tlp_script'        => array('plugins_validator', 'helpers_json', 'plugins_datepicker', 'class_personaldata'),
                    'comboTipoDoc'      => $this->lists_model->get_tipodoc(array(""=>"Seleccione un Documento")),
                    'comboCountry'      => $this->lists_model->get_country(array(""=>"Seleccione un Pa&iacute;s")),
                    'comboPassport'     => $this->lists_model->get_passport(array(""=>"Seleccione un Pasaporte")),
                    'comboLang'         => $this->lists_model->get_lang(array(""=>"Seleccione un Idioma")),
                    'comboTipoDisc'     => $this->lists_model->get_tipodisc(array(""=>"Seleccione Discapacidad")),
                    'info'              => $info['info_dep'],
                    'infoLang'          => $info['info_lang'],
                    'infoDisc'          => $info['info_disc']
                );
            break;

        }

        $this->_data = $this->dataview->set_data($data);
        $this->load->view('template_paneluser_view', $this->_data);
    }

    public function save(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $this->load->library('superupload', array(
                'path'          => UPLOAD_PATH_CV,
                'thumb_width'   => IMAGE_CV_THUMB_WIDTH,
                'thumb_height'  => IMAGE_CV_THUMB_HEIGHT,
                'maxsize'       => UPLOAD_MAXSIZE,
                'filetype'      => UPLOAD_FILETYPE,
                'resize_image_original' => false
            ));

            $res = array('status'=>'success');
            $status="";
            $message="";

            if( !empty($_FILES['txtImage']['name']) ){
                $res = current($this->superupload->upload());
            }

            if( $res['status']=="success" ){
                switch ($this->session->userdata('users_type')){
                    case TBL_USERS_DEP: 
                        $this->load->model('users_dep_model');
                        $res = $this->users_dep_model->save($res);
                    break;
                }

                if( $res ){
                    $status = "success";
                    $message = "Los datos fueron guardados con &eacute;xito.";
                }else{
                    $status = "error";
                    $message = "Los datos no pudieron ser guardados.";
                }

            }else{
                $status = "error";
                $message = $res['error_msg'];
            }

            $this->session->set_flashdata('status', $status);
            $this->session->set_flashdata('message', $message);
            redirect('/paneluser/personaldata/');
        }
    }



    /* AJAX FUNCTIONS
     **************************************************************************/



    /* PRIVATE FUNCTIONS
     **************************************************************************/

}