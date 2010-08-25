<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Content_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function get($where=array()){
        $query = $this->db->get_where(TBL_CONTENT, $where);
        if( $query->num_rows==0 ) return false;
        else{
            return $query->row_array();
        }
    }

    
}
?>