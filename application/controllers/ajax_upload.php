<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Ajax_upload extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        $this->load->library('superupload', array(
            'path'          => @$_POST['au_dir'],
            'thumb_width'   => @$_POST['au_thumb_width'],
            'thumb_height'  => @$_POST['au_thumb_height'],
            'image_width'   => @$_POST['au_image_width'],
            'image_height'  => @$_POST['au_image_height'],
            'maxsize'       => UPLOAD_MAXSIZE_IMG,
            'filetype'      => UPLOAD_FILETYPE_IMG
        ));

        $this->_ajax = array();
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_ajax;


    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        $outUpload = $this->superupload->upload();
        if( is_array($outUpload) ){
            $this->_ajax['error'] = $outUpload[0]['status']=="success" ? false : true;
            $this->_ajax['image']['href_image_full'] = $outUpload[0]['href_image_full'];
            $this->_ajax['image']['href_image_thumb'] = $outUpload[0]['href_image_thumb'];
            $this->_ajax['image']['filename_image'] = $outUpload[0]['filename_image'];
            $this->_ajax['image']['filename_thumb'] = $outUpload[0]['filename_thumb'];
            $this->_ajax['image']['thumb_width'] = $outUpload[0]['thumb_width'];
            $this->_ajax['image']['thumb_height'] = $outUpload[0]['thumb_height'];
            if( isset($outUpload[0]['error_msg']) ) $this->_ajax['message'] = $outUpload[0]['error_msg'];

            echo json_encode($this->_ajax);
        }
    }

    public function delete(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){
            @unlink($_POST['au_filename_image']);
            @unlink($_POST['au_filename_thumb']);
            die("ok");
        }
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/
}