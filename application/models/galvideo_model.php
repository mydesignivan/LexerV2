<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class galvideo_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function save(){
        $json = json_decode($_POST['json']);

        $gallery = $json->gallery;

        $this->db->trans_start(); // INICIO TRANSACCION

        if( isset($gallery->images_new) ){
            //Copia las imagenes nuevas de la galeria
            $this->db->select_max('`order`');
            $row = $this->db->get(TBL_USERS_DEP_PIC)->row_array();
            $n = is_null($row['order']) ? 1 : $row['order'];

            foreach( $gallery->images_new as $row ){
                $n++;

                $cp1 = @copy(UPLOAD_PATH_GALLERY.".tmp/".urldecode($row->image_full), UPLOAD_PATH_GALLERY . urldecode($row->image_full));
                $cp2 = @copy(UPLOAD_PATH_GALLERY.".tmp/".urldecode($row->image_thumb), UPLOAD_PATH_GALLERY . urldecode($row->image_thumb));

                if( $cp1 && $cp2 ){
                    $data = array(
                        'users_id'      => $this->session->userdata('users_id'),
                        'image'         => urldecode($row->image_full),
                        'thumb'         => urldecode($row->image_thumb),
                        'width'         => $row->width,
                        'height'        => $row->height,
                        'order'         => $n
                    );

                    if( !$this->db->insert(TBL_USERS_DEP_PIC, $data) ) return false;
                }else return false;
            }
        }

        // Elimina las imagenes quitadas
         if( isset($gallery->images_del) ){
            foreach( $gallery->images_del as $row ){

                if( $this->db->delete(TBL_USERS_DEP_PIC, array('image' => urldecode($row->image_full))) ){
                    @unlink(UPLOAD_PATH_GALLERY . urldecode($row->image_full));
                    @unlink(UPLOAD_PATH_GALLERY . urldecode($row->image_thumb));
                }else return false;
            }
         }

        // Reordena los thumbs
         if( isset($gallery->images_order) ){
            foreach( $gallery->images_order as $row ){
                $this->db->where('image', urldecode($row->image_full));
                $this->db->update(TBL_USERS_DEP_PIC, array('order' => $row->order));
            }
         }

        // Elimina archivos temporales de la galeria
        $dir = UPLOAD_PATH_GALLERY.".tmp/";
        $d = opendir($dir);
        while( $file = readdir($d) ){
            if( $file!="." AND $file!=".."  ){
                if( preg_replace('/_.*$/', '', $file)==$this->session->userdata('users_id') )
                    @unlink($dir.$file);
            }
        }

        $this->db->trans_complete(); // COMPLETO LA TRANSACCION

        return true;
    }

    public function get_list(){
        $this->db->order_by('order', 'asc');
        $this->db->where("users_id",$this->session->userdata('users_id'));
        return $this->db->get_where(TBL_USERS_DEP_PIC)->result_array();
    }
    
}
?>