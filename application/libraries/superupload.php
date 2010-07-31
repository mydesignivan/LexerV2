<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SuperUpload{

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct($params=array()) {
        $this->CI =& get_instance();
        $this->_params = array(
            'path' => $params['path'], //Obligatorio
            'watermark' => isset($params['watermark']) ? $params['watermark'] : false,
            'watermark_options' => array(
                'type'          => isset($params['watermark_options']['type']) ? $params['watermark_options']['type'] : 'overlay',
                'vrt_alignment' => isset($params['watermark_options']['vrt_alignment']) ? $params['watermark_options']['vrt_alignment'] : 'bottom',
                'hor_alignment' => isset($params['watermark_options']['hor_alignment']) ? $params['watermark_options']['hor_alignment'] : 'right',
                'opacity'       => isset($params['watermark_options']['opacity']) ? $params['watermark_options']['opacity'] : '30',
                'overlay_path'  => isset($params['watermark_options']['overlay_path']) ? $params['watermark_options']['overlay_path'] : '',
             ),
            'thumb_width'    => $params['thumb_width'], //Obligatorio
            'thumb_height'   => $params['thumb_height'], //Obligatorio
            'image_width'    => $params['image_width'], //Obligatorio
            'image_height'   => $params['image_height'], //Obligatorio
            'maxsize'        => isset($params['maxsize']) ? $params['maxsize'] : 2048,
            'filetype'       => isset($params['filetype']) ? $params['filetype'] : 'gif|jpg|png',
            'error_uploaded' => isset($params['error_uploaded']) ? $params['error_uploaded'] : 'El archivo no ha podido llegar al servidor',
            'error_maxsize'  => isset($params['error_maxsize']) ? $params['error_maxsize'] : 'El tamaño del archivo debe ser menor a %s MB.',
            'error_filetype' => isset($params['error_filetype']) ? $params['error_filetype'] : 'El tipo de archivo es incompatible.'
        );

        $this->_output = array();

        $this->CI->load->helper('form');
        $this->CI->load->library('image_lib');
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $CI;
    private $_params;
    private $_output;


    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function upload(){
        if( $_SERVER['REQUEST_METHOD']!="POST" ) return false;

        $files = $_FILES[key($_FILES)];

        $output = array();
        $output['status'] = 'success';

        $resultValid = $this->_validate($files);

        if( $resultValid===true ){
            $filename = $this->_get_filename($files['name']);

            $ext = substr($filename, (strripos($filename, ".")-strlen($filename))+1);
            $basename = substr($filename, 0, strripos($filename, "."));
            $filename_thumb = $basename . "_thumb." . $ext;

            $output['href_image_full'] = $this->_params['path'] . $filename;
            $output['href_image_thumb'] = $this->_params['path'] . $filename_thumb;
            $output['path'] = $this->_params['path'];
            $output['filename_image'] = $filename;
            $output['filename_thumb'] = $filename_thumb;

            // Muevo la imagen original
            move_uploaded_file($files['tmp_name'], $this->_params['path'] . $filename);

            // Crea una marca de agua en la imagen
            if( $this->_params['watermark'] ){
                $config = array();
                $config['source_image'] = $this->_params['path'] . $filename;
                $config['wm_type'] = $this->_params['watermark_options']['type'];
                $config['wm_overlay_path'] = $this->_params['watermark_options']['overlay_path'];
                $config['wm_vrt_alignment'] = $this->_params['watermark_options']['vrt_alignment'];
                $config['wm_hor_alignment'] = $this->_params['watermark_options']['hor_alignment'];
                $config['wm_opacity'] = $this->_params['watermark_options']['opacity'];
                $this->CI->image_lib->initialize($config);
                if( !$this->CI->image_lib->watermark() ) $this->_show_error($this->CI->image_lib->display_errors());
            }

            $sizes_image_original = getimagesize($this->_params['path'] . $filename);

            if( $sizes_image_original[0] > $this->_params['thumb_width'] || $sizes_image_original[1] > $this->_params['thumb_height'] ){

                // Crea una copia y dimensiona la imagen  (THUMB)
                $config = array();
                $config['source_image'] = $this->_params['path'] . $filename;
                $config['new_image'] = $this->_params['path'] . $filename_thumb;
                $config['width'] = $this->_params['thumb_width'];
                $config['height'] = $this->_params['thumb_height'];

                $this->CI->image_lib->clear();
                $this->CI->image_lib->initialize($config);

                if( $this->CI->image_lib->resize() ) {
                    $sizes_image_thumb = getimagesize($this->_params['path'] . $filename_thumb);
                    $output['thumb_width'] = $sizes_image_thumb[0];
                    $output['thumb_height'] = $sizes_image_thumb[1];


                    // Dimensiona la imagen original   (ORIGINAL)
                    if( $sizes_image_original[0] > $this->_params['image_width'] || $sizes_image_original[1] > $this->_params['image_height'] ){
                        $config = array();
                        $config['source_image'] = $this->_params['path'] . $filename;
                        if( $sizes_image_original[0] > $this->_params['image_width'] ) $config['width'] = $this->_params['image_width'];
                        if( $sizes_image_original[1] > $this->_params['image_height'] ) $config['height'] = $this->_params['image_height'];

                        $this->CI->image_lib->clear();
                        $this->CI->image_lib->initialize($config);

                        if( !$this->CI->image_lib->resize() ) $this->_save_error($output, $this->CI->image_lib->display_errors());
                    }

                }else $this->_save_error($output, $this->CI->image_lib->display_errors());

            }else{
                $output['thumb_width'] = $sizes_image_original[0];
                $output['thumb_height'] = $sizes_image_original[1];
                copy($this->_params['path'].$filename, $this->_params['path'].$filename_thumb);
            }

        }else $this->_save_error($output, $resultValid);

        $this->_output[] = $output;

        return $this->_output;
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/
    private function _validate($files){
        if( !is_uploaded_file($files['tmp_name']) ) return $this->_params['error_uploaded'];

        $size = (int)$this->_params['maxsize'];
        if( round($files['size']/1024, 2) > $size ) {
            $msg = $this->_params['error_maxsize'];
            if( strpos($this->_params['error_maxsize']. '%s') ){
                $msg = sprintf($this->_params['error_maxsize'], (string)($size/1024));
            }
            return $msg;
        }
        if( !$this->_is_allowed_filetype($files) ) return $this->_params['error_filetype'];

        return true;
    }

    private function _is_allowed_filetype($files){
        require_once(APPPATH.'config/mimes'.EXT);

        $extention = explode("|", $this->_params['filetype']);
        foreach( $extention as $ext ){
            $mime = $mimes[$ext];

            if( is_array($mime) ){
                if( in_array($files['type'], $mime) ) return true;
            }else{
                if( $mime==$files['type'] ) return true;
            }
        }
        return false;
    }

    private function _get_filename($name){
        $name = preg_replace("/\s+/", "_", strtolower($name));
        return uniqid(time()) ."__". $name;
    }

    private function _save_error(&$output, $msg){
        $this->_output['status'] = 'error';
        $this->_output['error_msg'] = $msg;
    }

}
?>
