<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class lists_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
    }

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function get_country($elementDefault=false){
        $this->db->select('name, country_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_COUNTRY)->result_array();

        if ($elementDefault) $data=array_merge($elementDefault, $data);

        return $data;
    }

    public function get_states($country_id, $elementDefault=null, $state_id=false){
        $this->db->select('name, state_id');
        if ($state_id)  $this->db->where('state_id', $state_id);
        else $this->db->where('country_id', $country_id);
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_STATES)->result_array();
        if( $elementDefault!=null ){
            return array_merge($elementDefault, $data);
        }else{
            return $data;
        }
    }

    public function get_tipodoc($elementDefault){
        $this->db->select('name, tipodoc_id');
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
        $this->db->select('name, passport_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_PASSPORT)->result_array();
        if( $elementDefault!=null ){
            return array_merge($elementDefault, $data);
        }else{
            return $data;
        }
    }

    public function get_tipodisc($elementDefault){
        $this->db->select('name, name');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_TIPODISC)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_sports($elementDefault=false){
        $this->db->select('name, sports_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_SPORTS)->result_array();
        
        if ($elementDefault)
            $data =  array_merge($elementDefault, $data);

        return $data;
    }
    public function get_lesiones($elementDefault){
        $this->db->select('name, lesion_id');
        $this->db->order_by('name', 'asc');
        $data = $this->db->get(TBL_LIST_LESION)->result_array();
        return array_merge($elementDefault, $data);
    }

    public function get_representantes($elementDefault){
        $data=$this->db->query("SELECT concat(firstname,' ',lastname) as name, `users`.`users_id` as users_id FROM (`users_repr`) JOIN `users` ON `users`.`users_id` = `users_repr`.`users_id` WHERE `active` = 1 ORDER BY `name` asc ")->result_array();

        $data = array_merge($elementDefault, $data);
        $data[] = array('name'=>'Otro', 'users_id'=>'-1');

        return $data;
    }

    public function get_sponsors($elementDefault){
        $this->db->select('username, users_id');
        $this->db->order_by('username', 'asc');
        $data = $this->db->get_where(TBL_USERS,array('users_type'=>'users_sponsors'))->result_array();
        return array_merge($elementDefault, $data);
    }

    

}