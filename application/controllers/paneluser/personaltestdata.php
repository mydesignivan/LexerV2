<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Personaltestdata extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->model('users_test_model');
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
              

                $info = $this->users_test_model->get_info();
            
                $data = array(
                    'tlp_section'       => 'paneluser/testdata/test_view.php',
                    'tlp_title_section' => 'Datos Personales',
                    'tlp_script'        => array('plugins_validator', 'helpers_json', 'plugins_datepicker', 'class_personaltestdata'),
                    'info_test'            => $info['tst']
                );
            break;

        }

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
    public function ajax_getCombo(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $selected= $this->input->post("selected");
            $text= $this->input->post("txt");
            $level= ($this->input->post("lvl")+1);
            $this->load->helper('form');
            $array_options=$this->users_test_model->ajax_get_combo($text);
            $event='onchange="PersonalTestData.selectCombo(this,'.$level.')"';
            
            $rtn="";
            if($array_options)
                $rtn=form_dropdown('cboLevel'.$level,$array_options, false, 'class="jq-data" '.$event);
            echo  $rtn;
        }
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/

}