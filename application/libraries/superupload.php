<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SuperUpload{

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct($params=null) {
        $this->CI =& get_instance();
        $this->CI->load->helper('form');
        $this->CI->load->library('image_lib');
        require_once(APPPATH.'config/mimes'.EXT);

        if( is_array($params) ) $this->initialize($params);

        $this->_output = $this->_error = array();
        $this->_mimes = $mimes;
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $CI;
    private $_params;
    private $_output;
    private $_file;
    private $_mimes;
    private $_error;


    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function initialize($params){
        $this->_params = array(
            'path' => $params['path'], //Obligatorio
            'watermark' => isset($params['watermark']) ? $params['watermark'] : false,
            'watermark_options' => array(
                'type'          => !isset($params['watermark_options']['type']) ? 'overlay' : $params['watermark_options']['type'],
                'vrt_alignment' => !isset($params['watermark_options']['vrt_alignment']) ? 'bottom' : $params['watermark_options']['vrt_alignment'],
                'hor_alignment' => !isset($params['watermark_options']['hor_alignment']) ? 'right' : $params['watermark_options']['hor_alignment'],
                'opacity'       => !isset($params['watermark_options']['opacity']) ? '30' : $params['watermark_options']['opacity'],
                'overlay_path'  => !isset($params['watermark_options']['overlay_path']) ? '' : $params['watermark_options']['overlay_path'],
             ),
            'resize_image_original' => isset($params['resize_image_original']) ? $params['resize_image_original'] : true,
            'thumb_width'     => $params['thumb_width'], //Obligatorio
            'thumb_height'    => $params['thumb_height'], //Obligatorio
            'image_width'     => @$params['image_width'], //Obligatorio
            'image_height'    => @$params['image_height'], //Obligatorio
            'master_dim'      => !isset($params['master_dim']) ? 'auto' : $params['master_dim'],  // auto, width, height
            'maxsize'         => !isset($params['maxsize']) ? 2048 : $params['maxsize'],
            'filetype'        => !isset($params['filetype']) ? 'gif|jpg|png' : $params['filetype'],
            'error_uploaded'  => !isset($params['error_uploaded']) ? 'El archivo no ha podido llegar al servidor' : $params['error_uploaded'],
            'error_maxsize'   => !isset($params['error_maxsize']) ? 'El tamaño del archivo debe ser menor a {size} MB.' : $params['error_maxsize'],
            'error_filetype'  => !isset($params['error_filetype']) ? 'El tipo de archivo es incompatible.' : $params['error_filetype'],
            'filename_prefix' => !isset($params['filename_prefix']) ? '' : $params['filename_prefix']
        );
    }

    public function upload($name){
        if( $_SERVER['REQUEST_METHOD']!="POST" || !isset($_FILES[$name]) ) return false;

        $this->_file = $_FILES[$name];
        if( !is_array($this->_file['name']) ){
            $this->_file['name'] = array($this->_file['name']);
            $this->_file['type'] = array($this->_file['type']);
            $this->_file['tmp_name'] = array($this->_file['tmp_name']);
            $this->_file['error'] = array($this->_file['error']);
            $this->_file['size'] = array($this->_file['size']);
        }

        for( $n=0; $n<=count($this->_file['name'])-1; $n++ ){
            if( empty($this->_file['tmp_name'][$n]) ) continue;
            
            $output = array();

            $resultValid = $this->_validate($n);

            if( $resultValid===true ){
                $filename = $this->_get_filename($this->_file['name'][$n]);

                $ext = substr($filename, (strripos($filename, ".")-strlen($filename))+1);
                $basename = substr($filename, 0, strripos($filename, "."));
                $filename_thumb = $basename . "_thumb." . $ext;

                $output['href_image_full'] = $this->_params['path'] . $filename;
                $output['href_image_thumb'] = $this->_params['path'] . $filename_thumb;
                $output['path'] = $this->_params['path'];
                $output['filename_image'] = $filename;
                $output['filename_thumb'] = $filename_thumb;

                // Muevo la imagen original
                move_uploaded_file($this->_file['tmp_name'][$n], $this->_params['path'] . $filename);
                chmod($this->_params['path'] . $filename, 0777);

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
                    if( $this->_params['resize_image_original'] ) $config['new_image'] = $this->_params['path'] . $filename_thumb;
                    $config['width'] = $this->_params['thumb_width'];
                    $config['height'] = $this->_params['thumb_height'];
                    $config['master_dim'] = $this->_params['master_dim'];

                    $this->CI->image_lib->clear();
                    $this->CI->image_lib->initialize($config);

                    if( $this->CI->image_lib->resize() ) {
                        $fn = $this->_params['resize_image_original'] ? $filename_thumb : $filename;
                        $sizes_image_thumb = getimagesize($this->_params['path'] . $fn);

                        $output['thumb_width'] = $sizes_image_thumb[0];
                        $output['thumb_height'] = $sizes_image_thumb[1];

                        // Dimensiona la imagen original   (ORIGINAL)
                        if( $this->_params['resize_image_original'] ){
                            if( $sizes_image_original[0] > $this->_params['image_width'] || $sizes_image_original[1] > $this->_params['image_height'] ){
                                $config = array();
                                $config['source_image'] = $this->_params['path'] . $filename;
                                if( $sizes_image_original[0] > $this->_params['image_width'] ) $config['width'] = $this->_params['image_width'];
                                if( $sizes_image_original[1] > $this->_params['image_height'] ) $config['height'] = $this->_params['image_height'];
                                $config['master_dim'] = $this->_params['master_dim'];

                                $this->CI->image_lib->clear();
                                $this->CI->image_lib->initialize($config);

                                if( !$this->CI->image_lib->resize() ) $this->_save_error($this->CI->image_lib->display_errors(), $n);
                            }
                        }

                    }else $this->_save_error($this->CI->image_lib->display_errors(), $n);

                }else{
                    $output['thumb_width'] = $sizes_image_original[0];
                    $output['thumb_height'] = $sizes_image_original[1];
                    copy($this->_params['path'].$filename, $this->_params['path'].$filename_thumb);
                }

            }else $this->_save_error($resultValid, $n);

            $this->_output[] = $output;

        }//end for

        $ret['status'] = count($this->_error)>0 || count($this->_output)==0 ? "error" : "success";

        if( count($this->_output)==0 ){
            $this->_save_error('El servidor no ha resivido ningun archivo.', 0);
        }

        if( count($this->_error)>0 ) $ret['error'] = $this->_error;
        $ret['output'] = $this->_output;

        return $ret;
    }

    public function clear(){
        $this->_output = $this->_error = array();
    }

    public function get_error($errors){
        if( !isset($errors) || !is_array($errors) ) return false;

        $output = "<ul>";
        foreach( $errors as $error ){
            $txt = "Nombre de Archivo: " . $error['file']['name'] ."<br />";
            $txt.= "Mensaje: " . $error['message'];
            $output.= "<li>". $txt ."</li>";
        }
        $output.="</ul>";
        return $output;
    }


    /* PRIVATE FUNCTIONS
     **************************************************************************/
    private function _validate($n){
        if( !is_uploaded_file($this->_file['tmp_name'][$n]) ) return $this->_params['error_uploaded'];

        $size = (int)$this->_params['maxsize'];
        if( round($this->_file['size'][$n] / 1024, 2) > $size ) {
            return str_replace("{size}", (string)($size/1024), $this->_params['error_maxsize']);
        }
        if( !$this->_is_allowed_filetype($this->_file['type'][$n]) ) return $this->_params['error_filetype'];

        return true;
    }

    private function _is_allowed_filetype($type){
        $extention = explode("|", $this->_params['filetype']);
        foreach( $extention as $ext ){
            $mime = $this->_mimes[$ext];

            if( is_array($mime) ){
                if( in_array($type, $mime) ) return true;
            }else{
                if( $mime==$type ) return true;
            }
        }
        return false;
    }

    private function _get_filename($text){
        $separator = "_";

        $isUTF8 = (mb_detect_encoding($text." ",'UTF-8,ISO-8859-1') == 'UTF-8');

        $text = ($isUTF8) ? utf8_decode($text) : $text;
        $text = trim($text);

        $_a = utf8_decode("ÁÀãâàá");
        $_e = utf8_decode("ÉÈéè");
        $_i = utf8_decode("ÍÌíì");
        $_o = utf8_decode("ÓÒóò");
        $_u = utf8_decode("ÚÙúù");
        $_n = utf8_decode("Ññ");
        $_c = utf8_decode("Çç");
        $_b = utf8_decode("ß");
        $_dash = "\,_ ";

        $text = preg_replace("/[$_a]/", "a", $text );
        $text = preg_replace("/[$_e]/", "e", $text );
        $text = preg_replace("/[$_i]/", "i", $text );
        $text = preg_replace("/[$_o]/", "o", $text );
        $text = preg_replace("/[$_u]/", "u", $text );
        $text = preg_replace("/[$_n]/", "n", $text );
        $text = preg_replace("/[$_c]/", "c", $text );
        $text = preg_replace("/[$_b]/", "ss", $text );

        $text = preg_replace("/[$_dash]/", $separator, $text );
        $text = preg_replace("/[^a-zA-Z0-9\-]!=./", "", $text );

        $text = strtolower($text);

        $text = ($isUTF8) ? utf8_encode($text) : $text;

        return $this->_params['filename_prefix'].uniqid(time()) ."__". $text;
    }

    private function _save_error($msg, $n){
        $this->_error[] = array(
            'message' => $msg,
            'file'    => array(
                'name'     => $this->_file['name'][$n],
                'type'     => $this->_file['type'][$n],
                'tmp_name' => $this->_file['tmp_name'][$n],
                'error'    => $this->_file['error'][$n],
                'size'     => $this->_file['size'][$n]
            )
        );
    }

}
?>
