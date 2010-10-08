<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Cv extends Controller {

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

                $info = $this->users_dep_model->get_info_personaldata();
            
                $data = array(
                    'tlp_section'       => 'frontpage/ajax/cv_personaldata.php',
                    'tlp_title_section' => 'Datos Personales',
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



    /* AJAX FUNCTIONS
     **************************************************************************/


    /* PRIVATE FUNCTIONS
     **************************************************************************/

}