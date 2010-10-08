<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_test_model extends Model {

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
         

        $this->db->join(TBL_LIST_CAPACIDAD,TBL_LIST_CAPACIDAD.".capacidad_id = ".TBL_TEST.".test0");
        $result=$this->db->get_where(TBL_TEST,array("users_id"=>$this->_users_id))->result_array();
       

        $i=0;
        foreach($result as $row){
            $info_tabla[$i]['test']=$row;
            $info_tabla[$i]['tbl_0']=TBL_LIST_CAPACIDAD;
            $info_tabla[$i]['combo_0']=$this->_get_list_combo(TBL_LIST_CAPACIDAD);
            if($row){
                $tbl0="TBL_LIST_".strtoupper(normalize(word_limiter($row['name'],2),"_"));
                eval('$tbl = '.$tbl0.';');
                $field1=$this->db->list_fields($tbl);
                $row2=$this->db->get_where($tbl,array($field1[0]=>$row['test1']))->row_array();
                 $info_tabla[$i]['combo_1']=$this->_get_list_combo($tbl);
                 $info_tabla[$i]['tbl_1']=$tbl;


                if($row['test2']>0){
                    $tbl1="TBL_LIST_".strtoupper(normalize(word_limiter($row2['name'],2),"_"));
                    eval('$tbl = '.$tbl1.';');
                    $field1=$this->db->list_fields($tbl);

                    $row3=$this->db->get_where($tbl,array($field1[0]=>$row['test2']))->row_array();
                    $info_tabla[$i]['tbl_2']=$tbl;;
                    $info_tabla[$i]['combo_2']=$this->_get_list_combo($tbl);

                }
            }
             $i++;
        }
      
        $info['tst']=$info_tabla;
        return $info;
    }

    function ajax_get_combo($text){
        $info=$this->_get_data_combo($text);

        return $info['combo'];
    }

    function _get_data_combo($text, $where=false){
       
       
        $tbl1="TBL_LIST_".strtoupper(normalize(word_limiter($text,2,''),"_"));

        eval('$tbl = defined("'.$tbl1.'")?'.$tbl1.':"notabla";');
         
        if($this->db->table_exists($tbl)){
            $field1=$this->db->list_fields($tbl);
            if($where) $this->db->where($where);
            $row3=$this->db->get($tbl)->row_array();

            $info['tbl']=$tbl;;
            $info['combo']=$this->_get_list_combo($tbl);
        }
        else{
            $info['tbl']="";
            $info['combo']=array();    
        }
        return $info;
    }

    function _get_list_combo($tabla){
        $field1=$this->db->list_fields($tabla);
        $this->db->select($field1[1].", ".$field1[0]);
        return $this->db->get($tabla)->result_array();

    }


    public function getval($val, $def){
        return empty($val) ? $def : '';
    }


   /* PRIVATE FUNCTIONS
     **************************************************************************/

}