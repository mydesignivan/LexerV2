<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function print_array($arr, $die=FALSE){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    if( $die ) die();
}

function is_localhost(){
    $hostname = $_SERVER['SERVER_NAME'];
    return $hostname=="localhost" || preg_match("/192.168/", $hostname);
}

function file_search_special($dir, $filename_search){
    if( substr($dir,-1)=="/" ) $dir = substr($dir, 0, strlen($dir)-1);
    if( is_dir($dir) ){
        $d=opendir($dir);
        while( $file = readdir($d) ){
            if( $file!="." AND $file!=".." ){
                if( is_file($dir.'/'.$file) ){
                    // Es Archivo
                    if( strpos($file, $filename_search) ){
                        return ($dir.'/'.$file);
                    }
                }

                if( is_dir($dir.'/'.$file) ){
                     // Es Directorio
                     // Volvemos a llamar
                     $r = file_search($dir.'/'.$file, $filename_search);
                     if( basename($r) == $filename_search ){
                        return $r;
                     }
                }
            }
        }
    }
    return false;
}

 function part_filename($name){
    return array(
        'ext'=>substr($name, (strripos($name, ".")-strlen($name))+1),
        'basename'=>substr($name, 0, strripos($name, "."))
    );
 }

function delete_images_temp(){
    $d = opendir(UPLOAD_DIR_OBRAS.".tmp/");
    $CI =& get_instance();
    while( $file = readdir($d) ){
        if( $file!="." AND $file!=".." ){
            if( preg_match("/^".$CI->session->userdata('user_id')."\_.*$/", $file) ){
                @unlink(UPLOAD_DIR_TMP.$file);
            }
        }
    }
}

function order_dates($str_date, $order='asc', $format='d-m-Y'){
    if( !is_array($str_date) ) (array)$str_date;

    $str_date_new = array();
    foreach( $str_date as $key=>$val ){
        $str_date_new[$key] = strtotime($val);
    }

    if( $order=="asc" || ($order!='asc'&&$order!='desc') ) arsort($str_date_new);
    elseif( $order=="desc" ) asort($str_date_new);

    $str_date = array();
    foreach( $str_date_new as $key=>$val ){
        $d = date($format, $val);
        $str_date[$key] = $d;
    }
    return $str_date;
}

function display_error($file, $function, $err, $param=array()){
    if( count($param)>0 ) {
        $err = vsprintf($err, $param);
    }
    log_message("error", $file." | ".$function." | ".$err);
    show_error($err);
}

function add_date($givendate, $day=0, $mth=0, $yr=0) {
    $cd = strtotime($givendate);
    $newdate = date('d-m-Y h:i:s', mktime(date('h',$cd),
    date('i',$cd), date('s',$cd), date('m',$cd)+$mth,
    date('d',$cd)+$day, date('Y',$cd)+$yr));
    return $newdate;
}

function is_date($strdate){
    $timestamp = strtotime($strdate);
    if( $timestamp === false ) return false;

    $time = strtotime($strdate);
    return checkdate(date('m', $time), date('d', $time), date('Y', $time));
}

/*
 * @example : arr_search($myarray, 'keyname==4)
 */
function arr_search ( $array, $expression ) {
    $result = array();
    $expression = preg_replace ( "/([^\s]+?)(=|<|>|!)/", "\$a['$1']$2", $expression );
    foreach ( $array as $a ) if ( eval ( "return $expression;" ) ) $result[] = $a;
    return $result;
}

function array_implode($parent, $arr){
    $ret="";
    foreach( $arr as $key=>$val ){
        if( !empty($val) ) $ret.= $key . $parent . $val . $parent;
        else $ret.= $key . $parent;
    }
    return $ret;
}

function EmailMessageConstructor($data, $arr){
    $ret = array();
    foreach( $arr as $key=>$val ){
        if( isset($data[$key]) ){
            if( is_array($data[$key]) ){
                foreach( $data[$key] as $v ) $val = sprintf($val, $v);
                $ret[] = $val;
            }else{
                if( !empty($data[$key]) && $data[$key]!='null' )
                    $ret[] = sprintf($val, $data[$key]);
            }
        }
    }
    return implode("", $ret);
}

function normalize($text, $separator = "-"){
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
    $_dash = "\.,_ ";

    $text = preg_replace("/[$_a]/", "a", $text );
    $text = preg_replace("/[$_e]/", "e", $text );
    $text = preg_replace("/[$_i]/", "i", $text );
    $text = preg_replace("/[$_o]/", "o", $text );
    $text = preg_replace("/[$_u]/", "u", $text );
    $text = preg_replace("/[$_n]/", "n", $text );
    $text = preg_replace("/[$_c]/", "c", $text );
    $text = preg_replace("/[$_b]/", "ss", $text );

    $text = preg_replace("/[$_dash]/", $separator, $text );
    $text = preg_replace("/[^a-zA-Z0-9\-]/", "", $text );

    $text = strtolower($text);

    return ($isUTF8) ? utf8_encode($text) : $text;
}
?>
