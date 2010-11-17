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
    private $_sports_id;
    private $_historial_id;

    /* PUBLIC FUNCTIONS
     **************************************************************************/

    public function save($historial = false, $sports_id, $datos){

        print_array($datos);


        $bnuevo = false;
        $this->_sports_id = $sports_id;

        //se busca la tablas historiales correspondiente al deporte
        $row = $this->db->get_where(TBL_REL_SPORTS, array("sports_id"=>$sports_id))->row_array();


        //se guarda en pref_historial el nombre de la tabla historial principal
        $pref_historial = $row['historial'];

        //se guardan en un array los nombres de las tablas
        $tablas = array_keys($datos);



        //se elimina palmares para un tratamiento diferente
        $palmares = array();
        for($i=0;$i<count($tablas);$i++){
            if(strpos($tablas[$i], "palmares")!==false){
                $palmares[$tablas[$i]] = $datos[$tablas[$i]];
                unset($datos[$tablas[$i]]);
                
            }
        }


  
        //se obtienen los historiales anteriores correspondientes al usuario y se borran
        $historial = $this->db->get_where(TBL_HISTORIAL, array("users_id"=>$this->_users_id))->row_array();

        if ($historial){
            $tablas_full = $this->db->list_tables();
            $sub_tablas_old = $this->searchSubTable($historial['historial'], $tablas_full);

            foreach($sub_tablas_old as $tabla_old){
                $this->db->delete($tabla_old, array("historial_id"=>$historial['historial_id']));
            }
            $this->db->delete(TBL_HISTORIAL, array("historial_id"=>$historial['historial_id']));
        }

        // Se inserta una nueva tabla historial y se genera el id para todas las tablas;
        $this->db->insert(TBL_HISTORIAL,array("sports_id"=>$this->_sports_id,
                                                  "historial"=>$pref_historial,
                                                  "users_id"=>$this->_users_id ));
        $this->_historial_id = $this->db->insert_id();



        //se guardan en un array los nombres de las tablas sin palmares
        $tablas = array_keys($datos);

        //se ordenan las tablas de padres a hijas
        $tablas_sort = $this->order_tables_byDeph($tablas);

        //recorre la lista de tablas
        for($i = 0; $i < count($tablas) ; $i++){
            $x=0;

            //recorre los datos de cada tabla
            foreach($datos[$tablas[$i]] as $sub_datos){

                //inicializa add vacio y guarda los datos de la tabla
                $add = array();
                $add = $this->saveData($sub_datos, $tablas[$i], false, $pref_historial);
               
                //busca tablas hijas de tabla actual en lista de tablas
                $sub_tablas = $this->searchSubTable($tablas[$i]."_", $tablas);

                //si existen
                if($sub_tablas){
                    
                    foreach($sub_tablas as $st){
                        //recorre contenido de la tabla hija
                        if (isset($datos[$st][$x])){

                            foreach($datos[$st][$x] as $key=>$row_sub){
                                //guarda elementos agregando datos de tablas padres
                                 
                                //guarda los datos en la tabla
                                $this->saveData($row_sub, $st, $add);
                            }
                        }
                    }
                }
                $x++;
            }
        }

        /************** PALMARES ****************/

        
        foreach($palmares as $name_table=>$palmar){
            foreach($palmar[0] as $palm_row){
                $this->saveData($palm_row, $name_table, array('historial_id'=>$this->_historial_id));
            }

        }


    }

    function saveData($arr_datos, $tabla, $arr_add=false, $pref=false){

        //si el prefijo de la tabla y la tabla no son iguales, es decir que no es la tabla principal de
        //historiales la que se quiere guardar, deberá si o si tener valor de arr_datos,
        //de esta forma aseguramos de no guardar mas de una vez el mismo dato
        if ($tabla != $pref && !$arr_add ) {
            return;
        }

        //se obtiene el campo id key de la tabla
        $segments = explode("_",$tabla);
        $id_field = $segments[count($segments)-1]."_id";

        //se agrega el mismo id del historial en cada registro que se guarda;
        $arr_add['historial_id'] = $this->_historial_id;
       
        //agrega los datos de referencia de las tablas padres en el array arr_add
        if ($arr_add) {
            foreach($arr_add as $key=>$add){
                $arr_datos[$key] = $add;
            }
        }

        //si es un campo fecha lo cambia a timestamp
        if (isset($arr_datos["fecha"])){
            $fecha = explode("-", $arr_datos["fecha"]);
            if (count($fecha)==3){
                list($dia, $mes, $year) = $fecha;
                $arr_datos["fecha"] = gmmktime(0,0,0,$mes, $dia, $year);
            }
            else{
                 $arr_datos["fecha"] = time();
            }
        }

        //si se encuentra definido el campo id key de la tabla lo elimina
        if (isset($arr_datos[$id_field])){
            unset($arr_datos[$id_field]);
        }

        //guarda los datos de la tabla
        $this->db->insert($tabla, $arr_datos);

        //arr_datos tiene los valores y las keys necesarias para insertar en tablas hijas
        $arr_add[$id_field] = $this->db->insert_id();

        //retorna los campos id key de las tablas padres y el id key de la tabla actual
        return $arr_add;
    }

    
    function searchSubTable($tabla, $tabla_lista){
        $rtn = array();
        foreach($tabla_lista as $tb){
//            echo "sub: ".$tb." - ".$tabla."<br/>";
            if (strpos($tb, $tabla)!==false){
                $rtn[] = $tb;

            }
        }
        return $rtn;

    }

    function order_tables_byDeph($tabla){
        $arr = array();
        $i=0;

        foreach($tabla as $row){
            $arr[$i]['count'] = count(explode("_", $row));
            $arr[$i]['row'] =  $row;
            $i++;
        }

        rsort($arr);
        $tabla = array();
        foreach($arr as $row){
            $tabla[] = $row['row'];
        }
        return $tabla;
    }


    public function array_depth($array) {
        $max_depth = 1;

        foreach ($array as $value) {
            if (is_array($value)) {
                $depth = $this->array_depth($value) + 1;

                if ($depth > $max_depth) {
                    $max_depth = $depth;
                }
            }

        }

        return $max_depth;
    }

    
    public function get_info(){
        $info = $this->db->get_where(TBL_HISTORIAL, array('users_id' => $this->_users_id))->row_array();

        return $info;

    }

    public function getval($val, $def){
        return empty($val) ? $def : '';
    }

    public function get_info_dep($sports_id, $historial){

        $this->db->select(TBL_REL_SPORTS.".*, ".TBL_LIST_SPORTS.".name as name_deporte");
        $this->db->join(TBL_LIST_SPORTS,TBL_LIST_SPORTS.".sports_id = ".TBL_REL_SPORTS.".sports_id");
        $row=$this->db->get_where(TBL_REL_SPORTS,array(TBL_REL_SPORTS.".sports_id"=>$sports_id))->row_array();



        $pref_historial = $row['historial'];

        $tablas = $this->db->list_tables();
        //selecciona todas las tablas con prefijo de tabla historial.
        //ej: historial_marciales, historial_marciales_palmares, historial_marciales_torneos
        $tablas_sport=array();


        for($i=0;$i<count($tablas);$i++){
            
               
                if(strpos($tablas[$i], $pref_historial )!==false){
                    //agrega a cada resultado un campo llamado table_name con el nombre de la tabla.
                    $select = "select *, '".$tablas[$i]."' as '".TABLE_NAME_FIELD."' ";

                    $historial = $historial ? $historial : 0;
                    $from = "from ".$tablas[$i]." ";
                    $where = "where historial_id = ".$historial;
                   

                    $query = $select.$from.$where;

                    // el select de abajo no funciona por eso se arma la sentencia SQL.
                    //$this->db->select( "select *, 'fede' as 'table_name' ");

                    //cada tabla con sus datos la inserta con la clave correspondiente al nombre de la tabla
                    //$tablas_sport[$tablas[$i]]= $this->db->get_where($tablas[$i],array("historial_id"=>$historial_id))->result_array();
                    $tablas_sport[$tablas[$i]]= $this->db->query($query)->result_array();

                    
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

   function get_combo_first_value($tabla, $second_value){
       $fields = $this->db->list_fields($tabla);
       echo $tabla;
       $row = $this->db->get_where($tabla, array($fields[0]=>$second_value))->row_array();
      
       return isset($row[$fields[1]]) ? $row[$fields[1]] : 0;

   }

   function getComboSubCat($tabla, $msg="",$cat){
        list($field_id,$field_level,$field_name)=$this->db->list_fields($tabla);
        $data[] = array($field_name=>$msg, $field_id=>'');

        $this->db->select($field_name.", ". $field_id);
        $data=array_merge($data, $this->db->get_where($tabla,array($field_level=>$cat))->result_array());

        return $data;
   }




   /* PRIVATE FUNCTIONS
     **************************************************************************/

}