<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personaldata extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        //if( !$this->session->userdata('logged_in') || $this->session->userdata('level')==1 ) redirect('/index/');
        $this->load->model('users_model');

        $this->load->library('dataview', array(
            'tlp_title'            =>  TITLE_INDEX,
            'tlp_meta_description' => META_DESCRIPTION_INDEX,
            'tlp_meta_keywords'    => META_KEYWORDS_INDEX
        ));
        $this->_data = $this->dataview->get_data();

        $this->session->set_userdata(array(
            'users_id'   => 1,
            'users_type' => TBL_USERS_DEP
        ));
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
            case TBL_USERS_DEP: //DEPORTISTA
                $data = array(
                    'tlp_section'       => 'paneluser/personaldata/dep_view.php',
                    'tlp_title_section' => 'Datos Personales',
                    'tlp_script'        => array('plugins_validator', 'plugins_datepicker', 'class_personaldata'),
                    'comboTipoDoc'      => $this->lists_model->get_tipodoc(array(""=>"Seleccione un Documento")),
                    'comboCountry'      => $this->lists_model->get_country(array(""=>"Seleccione un Pa&iacute;s")),
                    'comboPassport'     => $this->lists_model->get_passport(array(""=>"Seleccione un Pasaporte")),
                    'comboLang'         => $this->lists_model->get_lang(array(""=>"Seleccione un Idioma")),
                    'comboTipoDisc'     => $this->lists_model->get_tipodisc(array(""=>"Seleccione Discapacidad"))
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
                'filetype'      => UPLOAD_FILETYPE
            ));

            if( $this->superupload->upload() ){
                $res = $this->users_model->save();

            }

        }
    }



    /* AJAX FUNCTIONS
     **************************************************************************/



    /* PRIVATE FUNCTIONS
     **************************************************************************/

}