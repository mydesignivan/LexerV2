<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Myaccount extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        if( !$this->session->userdata('logged_in') || $this->session->userdata('level')==1 ) redirect('/index/');
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
     **************************************************************************/
    public function index(){
        $this->_data = $this->dataview->set_data(array(
            'tlp_section'       =>  'paneluser/account_view.php',
            'tlp_title_section' =>  'Mi Cuenta'/*,
            'tlp_script'        =>  array('validator', 'account')*/
        ));
        $this->load->view('template_frontpage_view', $this->_data);
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