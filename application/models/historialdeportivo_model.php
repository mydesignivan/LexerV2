<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class historialdeportivo_model extends Model {

    /* CONSTRUCTOR
     **************************************************************************/
    function  __construct() {
        parent::Model();
        $this->_users_id = $this->session->userdata('users_id');
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_users_id;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
 

    public function get_info(){
        $info = $this->db->get_where(TBL_HISTORIAL, array('users_id' => $this->_users_id))->row_array();

        return array(
            'historial'  => $info
        );
    }

    public function getval($val, $def){
        return empty($val) ? $def : '';
    }

    public function get_info_dep($sports_id, $historial_id){
      //  $this->db->query("select *, 'fede' as 'table_name' from historial_atletismo_palmares ");
     //   $this->db->select("*, 'fede' as 'table_name'");
        //$this->db->get(TBL_HISTORIAL_ATLETISMO_PALMARES);
//echo $this->db->last_query();echo "aaaa";die();
        $this->db->select(TBL_REL_SPORTS.".*, ".TBL_LIST_SPORTS.".name as name_deporte");
        $this->db->join(TBL_LIST_SPORTS,TBL_LIST_SPORTS.".sports_id = ".TBL_REL_SPORTS.".sports_id");
        $row=$this->db->get_where(TBL_REL_SPORTS,array(TBL_REL_SPORTS.".sports_id"=>$sports_id))->row_array();



        $pref_historial=$row['historial'];
        $tablas = $this->db->list_tables();
        //selecciona todas las tablas con prefijo de tabla historial.
        //ej: historial_marciales, historial_marciales_palmares, historial_marciales_torneos
        $tablas_sport=array();
        for($i=0;$i<count($tablas);$i++){
            if(strpos($tablas[$i], $pref_historial )!==false){
                //agrega a cada resultado un campo llamado table_name con el nombre de la tabla.
                $select = "select *, '".$tablas[$i]."' as '".TABLE_NAME_FIELD."' ";

                $historial_id = $historial_id ? $historial_id : 0;
                $from = "from ".$tablas[$i]." ";
                $where = "where historial_id = ".$historial_id;
                $query = $select.$from.$where;

                // el select de abajo no funciona por eso se arma la sentencia SQL.
                //$this->db->select( "select *, 'fede' as 'table_name' ");

                //cada tabla con sus datos la inserta con la clave correspondiente al nombre de la tabla
                //$tablas_sport[$tablas[$i]]= $this->db->get_where($tablas[$i],array("historial_id"=>$historial_id))->result_array();
                $tablas_sport[$tablas[$i]]= $this->db->query($select.$from.$where)->result_array();
                

                //si la tabla es vacia se inserta un row vacio
               if (count( $tablas_sport[$tablas[$i]])==0){
                    $columns=$this->db->list_fields($tablas[$i]);

                    foreach($columns as $column)
                        $tablas_sport[$tablas[$i]][0][$column]="";
                    //se agrega la columan table_name en el registro vacio
                    $tablas_sport[$tablas[$i]][0][TABLE_NAME_FIELD]=$tablas[$i];

                }
            }
        }


        $tablas_sport['sport_name']=normalize($row['name_deporte'],"_");

        return $tablas_sport;
    }

    public function getCombo($tabla, $msg=false, $bhist=0){
        $fields = $this->db->list_fields($tabla);

        if (count($fields)==3){
            list($field_id,$field_name, $historial)=$this->db->list_fields($tabla);
            $this->db->or_where(array($historial=>0));
            if ($bhist){
                $this->db->or_where(array($historial=>$bhist));
            }

        }
        else{
            list($field_id,$field_name)=$this->db->list_fields($tabla);
        }

        $data=array();
        if($msg)
            $data[] = array($field_name=>$msg, $field_id=>'');

        $this->db->select($field_name.", ". $field_id);

        $data=array_merge($data, $this->db->get($tabla)->result_array());

        return $data;
   }

   function getComboSubCat($tabla, $msg="",$cat){
        list($field_id,$field_level,$field_name)=$this->db->list_fields($tabla);
        $data[] = array($field_name=>$msg, $field_id=>'');

        $this->db->select($field_name.", ". $field_id);
        $data=array_merge($data, $this->db->get_where($tabla,array($field_level=>$cat))->result_array());

        return $data;
   }

/*   function getBoxeoLicencia($perfil_id){
        $rtn=$this->db->get_where(TBL_PERFIL_BEXEO_LICENCIA,array("perfil_id"=>$perfil_id));
        return $rtn;
       
   }
*/
    /*public function getComboSeleccionado($deporte){
        $this->db->select(TBL_LIST_SELECCIONADO.".name, ".TBL_LIST_SELECCIONADO.".seleccionado_id");
        $this->db->join(TBL_REL_SELECCIONADO,TBL_REL_SELECCIONADO.".sport_id = ".TBL_LIST_SPORTS.".sports_id");
        $this->db->join(TBL_LIST_SELECCIONADO,TBL_LIST_SELECCIONADO.".seleccionado_id = ".TBL_REL_SELECCIONADO.".seleccionado_id");
        $result=$this->db->get_where(TBL_LIST_SPORTS,array(TBL_LIST_SPORTS.".sports_id"=>$deporte, TBL_LIST_SELECCIONADO.".seleccionado_id >"=>0))->result_array();

        $this->db->select(TBL_LIST_SELECCIONADO.".name, ".TBL_LIST_SELECCIONADO.".seleccionado_id");
        $this->db->join(TBL_REL_SELECCIONADO,TBL_REL_SELECCIONADO.".sport_id = ".TBL_LIST_SPORTS.".sports_id");
        $this->db->join(TBL_LIST_SELECCIONADO,TBL_LIST_SELECCIONADO.".seleccionado_id = ".TBL_REL_SELECCIONADO.".seleccionado_id");
        $tmp=$this->db->get_where(TBL_LIST_SPORTS,array(TBL_LIST_SPORTS.".sports_id"=>$deporte, TBL_LIST_SELECCIONADO.".seleccionado_id <"=>0))->row_array();

        if ($tmp) $result[]=$tmp;
        return $result;
    }*/




   /* PRIVATE FUNCTIONS
     **************************************************************************/

}