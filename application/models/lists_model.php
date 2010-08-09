<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class lists_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function get_country($elementDefault){
        $this->db->select('name, country_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_COUNTRY)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_states($country_id, $elementDefault=null){
        $this->db->select('name, state_id');
        $this->db->where('country_id', $country_id);
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_STATES)->result_array();
        if( $elementDefault!=null ){
            return array_merge($elementDefault, $data);
        }else{
            return $data;
        }
    }

    public function get_tipodoc($elementDefault){
        $this->db->select('name, name');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_TIPODOC)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_lang($elementDefault){
        $this->db->select('name, lang_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_LANG)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_passport($elementDefault){
        $this->db->select('name, name');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_PASSPORT)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_tipodisc($elementDefault){
        $this->db->select('name, name');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_TIPODISC)->result_array();
        return array_merge($elementDefault, $data);
    }

}