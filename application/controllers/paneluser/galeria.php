<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Galeria extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        if( !$this->session->userdata('logged_in') ) redirect($this->config->item('base_url'));
        
        $this->load->model("galeria_model");

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
            'tlp_title_section'  => "Galer&iacute;a de Im&aacute;genes",
            'tlp_script'         => array('plugins_jqui_sortable', 'plugins_fancybox', 'plugins_galleriffic', 'helpers_json', 'class_galeria'),
            'tlp_section'        => 'paneluser/galeria_view.php',
            'info'               => array('gallery' => $this->galeria_model->get_list())
        ));
        $this->load->view('template_paneluser_view', $this->_data);
    }

    public function save(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            $res = $this->galeria_model->save();
            $this->session->set_flashdata('status', $res ? "success" : "error");
            redirect('/paneluser/galeria/');
        }
    }


    /* AJAX FUNCTIONS
     **************************************************************************/
    public function ajax_upload_gallery(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            $this->load->library('superupload');

            $config = array(
                'path'            => UPLOAD_PATH_GALLERY.'.tmp/',
                'thumb_width'     => IMAGE_THUMB_GALLERY_WIDTH,
                'thumb_height'    => IMAGE_THUMB_GALLERY_HEIGHT,
                'image_width'     => IMAGE_FULL_GALLERY_WIDTH,
                'image_height'    => IMAGE_FULL_GALLERY_HEIGHT,
                'maxsize'         => UPLOAD_MAXSIZE,
                'filetype'        => UPLOAD_FILETYPE,
                'filename_prefix' => $this->session->userdata('users_id')."_",
                'master_dim'      => 'height'
            );
            $this->superupload->initialize($config);
            echo json_encode($this->superupload->upload('txtUploadFile'));
            die();
        }
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