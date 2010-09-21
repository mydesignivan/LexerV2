<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galeria_video extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        if( !$this->session->userdata('logged_in') ) redirect($this->config->item('base_url'));
        
        $this->load->model("galvideo_model");

        $this->load->library('dataview', array(
            'tlp_title'  =>  TITLE_INDEX
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
            'tlp_title_section'  => "Galer&iacute;a de Videos",
            'tlp_script'         => array('plugins_jqui_sortable', 'plugins_fancybox', 'helpers_json', 'class_video'),
            'tlp_section'        => 'paneluser/galeria_video_view.php',
            'info'               => array('gallery' => $this->galvideo_model->get_list())
        ));

        $this->load->view('template_paneluser_view', $this->_data);
    }

    public function save(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $res = $this->galvideo_model->save();
            $this->session->set_flashdata('status', $res ? "success" : "error");
            redirect('/paneluser/galeria/');
        }
    }


    /* AJAX FUNCTIONS
     **************************************************************************/
    public function ajax_save_path(){
        $youtube_code=$this->input->post("ytcode");
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
         //   $youtube_code=$this->input->post("ytcode");
            
        }
        echo $youtube_code;
    }
    public function ajax_upload_delete(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            @unlink($_POST['au_filename_image']);
            @unlink($_POST['au_filename_thumb']);
            die("ok");
        }
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/
}