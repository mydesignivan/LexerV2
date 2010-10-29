<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_ma_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
        $this->load->helper('text');
        $this->_users_id = $this->session->userdata('users_id');
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_users_id;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function save(){
    }

    public function get_info(){
        $tables=$this->db->list_tables();
        $info=array();
        foreach($tables as $tb){
            // busca las tablas para medidas antropometricas ("users_ma")
            if(strpos($tb,'users_ma')!==false){
                list($t1,$t2)=explode("users_ma_",$tb);
                //guarda el contenido de cada consulta en array info con key correspondiente al
                //nombre de la tabla sin el prefijo users_ma_
                $info[$t2]=$this->db->get_where($tb,array("users_id"=>$this->_users_id))->result_array();

                //si no hay filas agrega una vacia al array
                if (count($info[$t2])==0){
                   $fields=$this->db->list_fields($tb);

                   foreach($fields as $field) $info[$t2][0][$field]="";
                   $info[$t2][0]['fecha']=time();
                   $info[$t2][0]['users_id']=$this->_users_id;
                   $info[$t2][0][$fields[0]]=0;
                }
            }
        }

       $obs=$this->db->get_where(TBL_USERS_MA_OBSERVACIONES,array("users_id"=>$this->_users_id))->row_array();

       $rtn['info']=$info;
       $rtn['obs']=$obs;
        return $rtn;
    }





    public function getval($val, $def){
        return empty($val) ? $def : '';
    }


   /* PRIVATE FUNCTIONS
     **************************************************************************/

}