<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Historial extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->helper('form');
        if( !$this->session->userdata('logged_in') || $this->session->userdata('level')==1 ) redirect('/index/');
        $this->load->model('historialdeportivo_model');
        $this->load->library('dataview', array(
            'tlp_title'            =>  TITLE_INDEX,
            'tlp_meta_description' => META_DESCRIPTION_INDEX,
            'tlp_meta_keywords'    => META_KEYWORDS_INDEX
        ));
        $this->_data = $this->dataview->get_data();
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        $this->load->model('lists_model');
        $this->load->helper('form');


            //=============== DEPORTISTA ==============//
    

        $info = $this->historialdeportivo_model->get_info();

        $data = array(
            'tlp_section'       => 'paneluser/historial/historial_view.php',
            'tlp_title_section' => 'Historial Deportivo',
            'comboDeportes'     => $this->lists_model->get_sports(array(""=>"Seleccione un Deporte")),
            'tlp_script'        => array('plugins_validator', 'plugins_tabs', 'plugins_mask','helpers_json', 'plugins_datepicker', 'class_historial'),
            'info'              => $info
        );

        $this->_data = $this->dataview->set_data($data);
        $this->load->view('template_paneluser_view', $this->_data);
    }

   



    public function ajax_get_sport(){
       
         if( $_SERVER['REQUEST_METHOD']=="POST" ){
           
            $deporte= $this->input->post("deporte");
            $historial_id = $this->input->post("historial_id");
            $perfil_deporte_id= $this->input->post("perfil_deporte_id");
            $data = $this->_data_historial($deporte, $historial_id);

            $path='/paneluser/historial/ajax/'.strtolower($data['sports_name']).'_view';
           
             $this->load->view($path, $data);
         }
    }





    /* PRIVATE FUNCTIONS
     **************************************************************************/
    private function _data_historial($deporte, $historial_id){
         $this->load->model("lists_model");
            $row=$this->historialdeportivo_model->get_info_dep($deporte, $historial_id);

/*Anios temporadas*/
            $cboTemporada = array();
            for($i=1966;$i<date("Y",time());$i++) $cboTemporada[]=array("name"=>$i,"value"=>$i);
/*Combo Pais*/
            $cboCountry=$this->lists_model->get_country(array(""=>"Seleccione un Pa&iacute;s"));
            

            $data['sports_name'] = $row['sport_name'];

            switch ($deporte){
                case 1: //atetismo
                    $disciplinas=$this->historialdeportivo_model->getCombo(TBL_LIST_ATLETISMO_DISCIPLINA,"Seleccione una disciplina");
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_ATLETISMO_CATEGORIA,"Seleccione una categoria");

                    $data['categoria']=$row[TBL_HISTORIAL_ATLETISMO_CATEGORIA];
                    for($i=0;$i<count($row[TBL_HISTORIAL_ATLETISMO_CATEGORIA]);$i++){
                        $data['categoria'][$i]['cboCategoria'] = $categorias;


                        $tmp = "";
                        $data['categoria'][$i]['categorias'][0] = $row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA][0];
                        $tmp = $data['categoria'][$i]['categorias'][0][TABLE_NAME_FIELD];
                        foreach($data['categoria'][$i]['categorias'][0] as $key=>$value){
                            $data['categoria'][$i]['categorias'][0][$key]="";
                            $data['categoria'][$i]['categorias'][0]['cboPrueba'] = $disciplinas;
                            $data['categoria'][$i]['categorias'][0]['cboCountry'] = $cboCountry;
                        }
                        $data['categoria'][$i]['categorias'][0][TABLE_NAME_FIELD] = $tmp;
                        $index=0;
                        for($n=0;$n<count($row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA]);$n++){
                            if ($row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA][$n]["categoria_id"] == $data['categoria'][$i]['categoria_id']){
                                $data['categoria'][$i]['categorias'][$index] = $row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA][$n];
                                $data['categoria'][$i]['categorias'][$index]['cboPrueba'] = $disciplinas;
                                $data['categoria'][$i]['categorias'][$index]['cboCountry'] = $cboCountry;
                                $index++;
                            }
                       }
                    }
                  
                 //guarda en indices diferentes segun campo prueba_num para separar las tablas de las pruebas
                    for($i=0;$i<count($row[TBL_HISTORIAL_ATLETISMO_EVOLUCION]);$i++){
                        $row[TBL_HISTORIAL_ATLETISMO_EVOLUCION][$i]['cboPrueba'] = $disciplinas;
                        $data['pruebas'][$row[TBL_HISTORIAL_ATLETISMO_EVOLUCION][$i]['prueba_num']][] = $row[TBL_HISTORIAL_ATLETISMO_EVOLUCION][$i];
                    }

                    $data['palmares'] = $row[TBL_HISTORIAL_ATLETISMO_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_ATLETISMO_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboPrueba'] = $disciplinas;
                    }
                break;

                case 2: //Artes Marciales
                    $data['historial']=$row[TBL_HISTORIAL_MARCIALES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_MARCIALES]);$i++){
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $arr_data = array("cboCountry"=>$cboCountry);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_MARCIALES_TORNEOS, "historial", "torneos", $arr_data);

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_MARCIALES_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_MARCIALES_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                    }


                    break;
                case 3: // basquet
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_BASQUET_CATEGORIA,"Seleccione una categoria");
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_BASQUET_POSICION,"Seleccione una posicion");

                    $data['historial'] = $row[TBL_HISTORIAL_BASQUET];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_BASQUET]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_BASQUET_DATOS, "historial", "datos", array());


                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_BASQUET_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_BASQUET_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    
                    break;
                case 4: //boxeo
                    $list_cat=TBL_LIST_BOXEO_CATEGORIA;;
                    $cboNivel=array(array("name"=>"Seleccione una categoria","id"=>""),
                                                array("name"=>"profesional","id"=>1),
                                                array("name"=>"Aficionado","id"=>2),
                                                array("name"=>"Amateur","id"=>3));

                    $resultados=$this->historialdeportivo_model->getCombo(TBL_LIST_BOXEO_RESULTADO,"Seleccione resultado");

                    $data['historial'] = $row[TBL_HISTORIAL_BOXEO];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_BOXEO]) ; $i++){
                        $categoria =  $data['historial'][$i]['categoria'];
                        $nivel = $this->historialdeportivo_model->get_combo_first_value($list_cat, $categoria);

                        $cboCategoria = $this->historialdeportivo_model->getComboSubCat($list_cat,"Seleccione categoria",$nivel);

                        $data['historial'][$i]['nivel'] = $nivel;
                        $data['historial'][$i]['cboNivel'] = $cboNivel;
                        $data['historial'][$i]['cboCategoria'] = $cboCategoria;



                        $data['historial'][$i]['list'] = $list_cat;
                       
                        $arr_data = array("cboResultado" => $resultados,
                                           "cboCountry" => $cboCountry);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_BOXEO_PELEAS, "historial", "peleas", $arr_data);

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_BOXEO_PALMARES];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_BOXEO_PALMARES]) ; $i++){
                        $data['palmares'][$i]['cboYear'] = $cboTemporada;
                    }
                    break;
                case 5: //ciclismo
                    $instituciones=array(array("name"=>"Seleccione una categoria","id"=>""),
                                                array("name"=>"Asociación","id"=>1),
                                                array("name"=>"Club","id"=>2),
                                                array("name"=>"Federación","id"=>3),
                                                array("name"=>"Sindicato","id"=>4),
                                                array("name"=>"Otro","id"=>-1));
                   
                    $especialidad = $this->historialdeportivo_model->getCombo(TBL_LIST_CICLISMO_ESPECIALIDAD,"Seleccione una modalidad");
                    $categoria = $this->historialdeportivo_model->getCombo(TBL_LIST_CICLISMO_CATEGORIA,"Seleccione una categoria");
                    $modalidad=$this->historialdeportivo_model->getCombo(TBL_LIST_CICLISMO_MODALIDAD,"Seleccione una posicion");
                    $categorias=$this->historialdeportivo_model->getCombo("list_futbol_categoria","Seleccione una categoria");

                    $categorias=$this->historialdeportivo_model->getCombo("list_futbol_categoria","Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_CICLISMO];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_CICLISMO]) ; $i++){
                        $data['historial'][$i]['cboInstitucion'] = $instituciones;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboModalidad'] = $modalidad;
                        $data['historial'][$i]['cboEspecialidad'] = $especialidad;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_CICLISMO_INTERNACIONALES, "historial", "internacionales", array());
                        
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_CICLISMO_NACIONALES, "historial", "nacionales", array());




                    }
                   $data['palmares'] = $row[TBL_HISTORIAL_CICLISMO_PALMARES];

                   
                    break;
                case 6: //escalada
                    $list_cat=TBL_LIST_ESCALADA_GRADUACION;
                    $cboGrado=array(array("name"=>"Seleccione grado","id"=>""),
                                                array("name"=>"Francesa","id"=>1),
                                                array("name"=>"UIAA","id"=>2),
                                                array("name"=>"USA","id"=>3));

                    
                    $modalidad = $this->historialdeportivo_model->getCombo(TBL_LIST_ESCALADA_MODALIDAD,"Seleccione una modalidad");
                    $categoria = $this->historialdeportivo_model->getCombo(TBL_LIST_ESCALADA_CATEGORIA,"Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_ESCALADA];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_ESCALADA]) ; $i++){
                        $grado =  $data['historial'][$i]['graduacion'];
                        $graduacion = $this->historialdeportivo_model->get_combo_first_value($list_cat, $grado);

                        $cboGraduacion = $this->historialdeportivo_model->getComboSubCat($list_cat,"Seleccione graduacion",$graduacion);

                        $data['historial'][$i]['grado'] = $graduacion;
                        $data['historial'][$i]['cboGrado'] = $cboGrado;
                        $data['historial'][$i]['cboGraduacion'] = $cboGraduacion;


                        $data['historial'][$i]['list'] = $list_cat;
                        $data['historial'][$i]['cboCategoria'] = $categoria;

                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_ESCALADA_PALMARES];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_ESCALADA_PALMARES]) ; $i++){
                        $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                        $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;
                   

                case 7: //futbol
                    $posicion=$this->historialdeportivo_model->getCombo("list_futbol_posicion","Seleccione una posicion");
                    $categorias=$this->historialdeportivo_model->getCombo("list_futbol_categoria","Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_FUTBOL];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_FUTBOL]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                       
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_FUTBOL_DATOS, "historial", "datos", array());

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_FUTBOL_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_FUTBOL_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 8: //futbol sala
                    $posicion=$this->historialdeportivo_model->getCombo("list_futsal_posicion","Seleccione una posicion");
                    $categorias=$this->historialdeportivo_model->getCombo("list_futsal_categoria","Seleccione una categoria");
                    
                   // print_array($row[TBL_HISTORIAL_FUTBOLSALA],true);

                    $data['historial'] = $row[TBL_HISTORIAL_FUTBOLSALA];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_FUTBOLSALA]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_FUTBOLSALA_DATOS, "historial", "datos", array());
                        
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_FUTBOLSALA_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_FUTBOLSALA_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 9: //golf
                    $data['historial'] = $row[TBL_HISTORIAL_GOLF];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_GOLF]) ; $i++){
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;


                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_GOLF_TOUR, "historial", "tour", array());

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_GOLF_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_GOLF_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;

                    }
                    break;
                case 10: //halterofilia
                    $categoria=$this->historialdeportivo_model->getCombo(TBL_LIST_HALTEROFILIA_CATEGORIA,"Seleccione una categoria");
                    $division=$this->historialdeportivo_model->getCombo(TBL_LIST_HALTEROFILIA_DIVISION,"Seleccione una división");

                    $data['historial'] = $row[TBL_HISTORIAL_HALTEROFILIA];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_HALTEROFILIA]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categoria;

                        $arr_datos = array("cboDivision"=>$division,
                                           "cboCountry"=>$cboCountry);

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_HALTEROFILIA_CATEGORIA, "historial", "categorias", $arr_datos);
                    }
                    
                    $data['palmares'] = $row[TBL_HISTORIAL_HALTEROFILIA_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_HALTEROFILIA_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                    }
                    break;
                case 11: //handball
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_HANDBALL_POSICION,"Seleccione una posicion");
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_HANDBALL_CATEGORIA,"Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_HANDBALL];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_HANDBALL]) ; $i++){

                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_HANDBALL_DATOS, "historial", "datos", array());
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_HANDBALL_LANZAMIENTOS, "historial", "lanzamientos_lista", array());

                    }

                    $data['palmares'] = $row[TBL_HISTORIAL_HANDBALL_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_HANDBALL_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;
                case 12: //hockey
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_HOCKEYC_POSICION,"Seleccione una posicion");
                    $superficie=$this->historialdeportivo_model->getCombo(TBL_LIST_HOCKEYC_SUPERFICIE,"Seleccione una superficie");
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_HOCKEYC_CATEGORIAS,"Seleccione una categoria");

                    $defensivo=array(array("name"=>"Seleccione una posicion","id"=>""),
                                               array("name"=>"No participo","id"=>1),
                                               array("name"=>"Picador","id"=>2),
                                               array("name"=>"Primer Salidor","id"=>3),
                                               array("name"=>"Segundo Salidor","id"=>4),
                                               array("name"=>"Arquero","id"=>5));

                    $ofensivo=array(array("name"=>"Seleccione una posicion","id"=>""),
                                               array("name"=>"No participo","id"=>1),
                                               array("name"=>"Parador Horizontal","id"=>2),
                                               array("name"=>"Parador Vertical","id"=>3),
                                               array("name"=>"Desviador","id"=>4),
                                               array("name"=>"Servidor","id"=>5),
                                               array("name"=>"Pegador","id"=>6),
                                               array("name"=>"Rebotero","id"=>7),
                                               array("name"=>"Arrastrador","id"=>8),
                                               array("name"=>"Elevaciones","id"=>9));
                    /*Árbitro, DT, Ayudante Técnico, Otra)
                     */
                    $actividades=array(array("name"=>"Seleccione una actividad","id"=>""),
                                               array("name"=>"Árbitro","id"=>1),
                                               array("name"=>"DT","id"=>'100'),
                                               array("name"=>"Ayudante","id"=>2),
                                               array("name"=>"Técnico","id"=>3),
                                               array("name"=>"Otra","id"=>-1));

                    $data['historial'] = $row[TBL_HISTORIAL_HOCKEY];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_HOCKEY]) ; $i++){
                        $data['historial'][$i]['cboDefensivo']=$defensivo;
                        $data['historial'][$i]['cboOfensivo']=$ofensivo;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                        $data['historial'][$i]['cboSuperficie'] = $superficie;
                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_HOCKEY_DATOS];
                        $data['historial'][$i]['cboActividades'] = $actividades;

                        $arr_data = array("cboTemporada"=>$cboTemporada);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_HOCKEY_TORNEOS, "historial", "torneos", $arr_data);

                    }

                    $data['palmares'] = $row[TBL_HISTORIAL_HOCKEY_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_HOCKEY_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;

                case 13: //Natacion
                    $categorias = $this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_CATEGORIA,"Seleccione una categoria");
                    $modalidad = $this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_MODALIDAD,"Seleccione una modalidad",1);
                    $prueba=$this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_PRUEBA,"Seleccione una prueba");

                    $piscina=array(array("name"=>"Seleccione piscina","id"=>""),
                                                array("name"=>"25 Mts","id"=>'1'),
                                                array("name"=>"50 Mts","id"=>'2'));

                    $arr_datos = array("cboPrueba"=>$prueba,
                                           "cboPiscina"=>$piscina,
                                           "cboCountry"=>$cboCountry);

                    $data['historial'] = $row[TBL_HISTORIAL_NATACION];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_NATACION]) ; $i++){
                        $data['historial'][$i]['cboModalidad'] = $modalidad;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_NATACION_COMPETENCIAS, "historial", "competencias", $arr_datos);
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_NATACION_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_NATACION_PALMARES]);$i++){
                        $data['palmares'][$i]['cboCountry'] = $cboCountry;
                        $data['palmares'][$i]['cboPrueba'] = $prueba;
                        $data['palmares'][$i]['cboPiscina'] = $piscina;

                    }
                    break;
                    
                case 14: //padel
                    $modalidad=array(array("name"=>"Seleccione una modalidad","id"=>""),
                                                array("name"=>"Individuales","id"=>'1'),
                                                array("name"=>"Dobles","id"=>'2'),
                                                array("name"=>"Ambas","id"=>'3'));
                    $data['historial'] = $row[TBL_HISTORIAL_PADEL];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_PADEL]) ; $i++){
                        $data['historial'][$i]['cboModalidad'] = $modalidad;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_PADEL_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_PADEL_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 15: //patin
                    $especialidad=array(array("name"=>"Seleccione una especialidad","id"=>""),
                                                array("name"=>"Artístico","id"=>'1'),
                                                array("name"=>"Velocidad","id"=>'2'));
                    $superficie=array(array("name"=>"Seleccione una especialidad","id"=>""),
                                                array("name"=>"En línea","id"=>'1'),
                                                array("name"=>"Sobre Hielo","id"=>'1'),
                                                array("name"=>"Sobre Ruedas","id"=>'2'));
                    $data['historial'] = $row[TBL_HISTORIAL_PATIN];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_PATIN]) ; $i++){
                        $data['historial'][$i]['cboEspecialidad'] = $especialidad;
                        $data['historial'][$i]['cboSuperficie'] = $superficie;

//modalidad y categoria dependen de la especialidad
                        $modalidad_artistico=$this->historialdeportivo_model->getCombo(TBL_LIST_PATIN_MODALIDAD ,"Seleccione una modalidad", 1);
                        $categoria_artistico=$this->historialdeportivo_model->getCombo(TBL_LIST_PATIN_CATEGORIA ,"Seleccione una categoria", 1);

                        $modalidad_velocidad=$this->historialdeportivo_model->getCombo(TBL_LIST_PATIN_MODALIDAD ,"Seleccione una modalidad", 2);
                        $categoria_velocidad=$this->historialdeportivo_model->getCombo(TBL_LIST_PATIN_CATEGORIA ,"Seleccione una categoria", 2);

                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                       
                        $data['historial'][$i]['cboCategoriaArtistico'] = $categoria_artistico;
                        $data['historial'][$i]['cboModalidadArtistico'] = $modalidad_artistico;

                        $arr_datos = array("cboCountry"=>$cboCountry);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_PATIN_ARTISTICO_COMPETENCIA, "historial", "artistica_competencias", $arr_datos);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_PATIN_VALOCIDAD_COMPETENCIA, "historial", "velocidad_competencias", $arr_datos);

                        $data['historial'][$i]['cboCategoriaVelocidad'] = $categoria_velocidad;
                        $data['historial'][$i]['cboModalidadVelocidad'] = $modalidad_velocidad;

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_PATIN_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_PATIN_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    
                    break;
                case 16: //Rugby
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_RUGBY_CATEGORIA,"Seleccione una categoria");
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_RUGBY_POSICION,"Seleccione una posicion");

                    $data['historial'] = $row[TBL_HISTORIAL_RUGBY];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_RUGBY]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_RUGBY_DATOS, "historial", "datos", array());
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_RUGBY_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_RUGBY_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 17: //Softbol
                    $efecto=array(array("name"=>"Seleccione una efecto","id"=>""),
                                                array("name"=>"Drope","id"=>'1'),
                                                array("name"=>"Curva","id"=>'2'),
                                                array("name"=>"Lenta","id"=>'3'),
                                                array("name"=>"Riser","id"=>'4'),
                                                array("name"=>"Otra","id"=>'-1'));

                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_SOFTBOL_CATEGORIA,"Seleccione una categoria");
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_SOFTBOL_POSICION,"Seleccione una posicion");

                    $data['historial'] = $row[TBL_HISTORIAL_SOFTBOL];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_SOFTBOL]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboEfecto'] = $efecto;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_SOFTBOL_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_SOFTBOL_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;
                case 18: //Tenis
                    $categorias=$this->historialdeportivo_model->getCombo(TBL_LIST_TENIS_CATEGORIA,"Seleccione una categoria");
                    $superficie=array(array("name"=>"Seleccione una superficie","id"=>""),
                                                array("name"=>"Cemento","id"=>'1'),
                                                array("name"=>"Cesped","id"=>'2'),
                                                array("name"=>"Sintetico","id"=>'3'),
                                                array("name"=>"Tierra batida","id"=>'4'));
                    $actividades=array(array("name"=>"Seleccione una actividad","id"=>0),
                                       array("name"=>"Arbitro","id"=>1),
                                       array("name"=>"Entrenador","id"=>2),
                                       array("name"=>"Ayudante Técnico","id"=>3),
                                       array("name"=>"Otra","id"=>-1));

                    $data['historial'] = $row[TBL_HISTORIAL_TENIS];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_TENIS]) ; $i++){

                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                        $data['historial'][$i]['cboActividades'] = $actividades;

                        $arr_datos = array('cboSuperficie'=>$superficie);

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_TENIS_TITULOS_SINGLES, "historial", "titulos_singles", $arr_datos);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_TENIS_TITULOS_DOBLES, "historial", "titulos_dobles", $arr_datos);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_TENIS_FINALES_SINGLES, "historial", "finales_singles", $arr_datos);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_TENIS_FINALES_DOBLES, "historial", "finales_dobles", $arr_datos);
    
                    }
                    $data['palmares_singles'] = $row[TBL_HISTORIAL_TENIS_PALMARES_SINGLES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_TENIS_PALMARES_SINGLES]);$i++)
                        $data['palmares_singles'][$i]['cboSuperficie'] = $superficie;

                    $data['palmares_dobles'] = $row[TBL_HISTORIAL_TENIS_PALMARES_DOBLES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_TENIS_PALMARES_DOBLES]);$i++)
                        $data['palmares_dobles'][$i]['cboSuperficie'] = $superficie;
                    break;
                case 19: //Tiro con arco
                    $especialidad = $this->historialdeportivo_model->getCombo(TBL_LIST_ARCO_ESPECIALIDAD,"Seleccione una posicion");
                    $categorias = $this->historialdeportivo_model->getCombo(TBL_LIST_ARCO_CATEGORIA,"Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_ARCO];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_ARCO]) ; $i++){

                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboEspecialidad'] = $especialidad;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                        $arr_datos = array('cboCategoria'=>$categorias,
                                           'cboCountry'=>$cboCountry);
                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_ARCO_TORNEOS, "historial", "torneos", $arr_datos);

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_ARCO_PALMARES];
                    break;                    
                case 20: //tiro deportivo
                    $list_cat = TBL_LIST_TIRO_MODALIDAD;


                    $categorias =   $this->historialdeportivo_model->getCombo(TBL_LIST_TIRO_CATEGORIA,"Seleccione una categoria");
                    $cboModalidad=array(array("name"=>"Seleccione una modalidad","id"=>""),
                                                array("name"=>"Modalidad Rifle","id"=>1),
                                                array("name"=>"Modalidad Pistola","id"=>2),
                                                array("name"=>"Modalidad Escopeta","id"=>3),
                                                array("name"=>"Modalidad Blanco Móvil","id"=>4));
                    
                    $data['historial'] = $row[TBL_HISTORIAL_TIRO];
                    for($i=0 ; $i < count($row[TBL_HISTORIAL_TIRO]) ; $i++ ){
                        $especialidad =  $data['historial'][$i]['especialidad'];
                        $modalidad = $this->historialdeportivo_model->get_combo_first_value($list_cat, $especialidad);


                        $cboEspecialidad=$this->historialdeportivo_model->getComboSubCat($list_cat,"Seleccione especialidad",$modalidad);
                        $data['historial'][$i]['cboEspecialidad'] = $cboEspecialidad;

                        $data['historial'][$i]['modalidad'] = $modalidad;
                        $data['historial'][$i]['cboModalidad'] = $cboModalidad;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['list'] = $list_cat;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $this->_inicializarTablaHija($data, $row, $i, TBL_HISTORIAL_TIRO_EVENTOS, "historial", "torneos", array());
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_TIRO_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_TIRO_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    
                    break;
                case 21: //Voley
                    $posicion=$this->historialdeportivo_model->getCombo(TBL_LIST_VOLEY_POSICION,"Seleccione una posicion");
                    $categoria=$this->historialdeportivo_model->getCombo(TBL_LIST_VOLEY_CATEGORIA,"Seleccione una categoria");
                    $data['historial'] = $row[TBL_HISTORIAL_VOLEY];
                    for($i=0 ; $i < count($row[TBL_HISTORIAL_VOLEY]) ; $i++ ){
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboCategoria'] = $categoria;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_VOLEY_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_VOLEY_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 22: //Voley Playe
                   
                    $categoria=$this->historialdeportivo_model->getCombo(TBL_LIST_VOLEYPLAYA_CATEGORIA,"Seleccione una categoria");
                    $data['historial'] = $row[TBL_HISTORIAL_VOLEYPLAYA];
                    for($i=0 ; $i < count($row[TBL_HISTORIAL_VOLEYPLAYA]) ; $i++ ){
                        $data['historial'][$i]['cboCategoria'] = $categoria;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_VOLEYPLAYA_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_VOLEYPLAYA_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;
                }
          return $data;
    }



    public function save(){
        $datos = $_POST;
     
        
        $sports_id = array_pop($datos);
        $historial_id = array_pop($datos);
     
        $this->historialdeportivo_model->save(json_decode($historial_id), $sports_id, $datos);
      //  print_array($datos, true);

    }

    
     public function ajax_get_subcat(){
        $list = $this->input->post("list");
        $cat = $this->input->post("cat");
        $class = $this->input->post("class");
        $name_comp = $this->input->post("name_comp");

        if (strlen($class)==0) $class=" hinput";


        $label = strlen($this->input->post("label"))>0? $this->input->post("label") : "Categoria";

        $cboCategoria=$this->historialdeportivo_model->getComboSubCat($list,"Seleccione ".$label,$cat);

        echo '<label class="label label-form" ><span class="required">*</span>'.$label.'</label>';
        echo form_dropdown($name_comp, $cboCategoria, $cat, ' tabindex="1"  onchange="LibForms.isOther(this);" class="'.$class.'"');
        
     }


     //private

     private function _inicializarTablaHija(&$data, $row, $cont, $tabla_hija, $alias_padre="historial", $alias_hijo, $arr_campos){
        //asigna un elemento vacio a la primer tabla de cualquier historial por si no existe
        //ningun elemento guardado
        $data[$alias_padre][$cont][$alias_hijo][0] = $row[$tabla_hija][0];
        $tmp =  $data[$alias_padre][$cont][$alias_hijo][0][TABLE_NAME_FIELD];

        foreach($data[$alias_padre][$cont][$alias_hijo][0] as $key=>$value){
            $data[$alias_padre][$cont][$alias_hijo][0][$key]="";
            foreach($arr_campos as $key=>$datos){
                $data[$alias_padre][$cont][$alias_hijo][0][$key] = $datos;
            }
        }

        //asigna elementos a cada tabla
        $data[$alias_padre][$cont][$alias_hijo][0][TABLE_NAME_FIELD] = $tmp;
        $index=0;
        for($n=0;$n<count($row[$tabla_hija]);$n++){
            //compara el id que vincula a tabla padre y tabla hija.
            if ($row[$tabla_hija][$n][$alias_padre."_id"] == $data[$alias_padre][$cont][$alias_padre."_id"]){
                $data[$alias_padre][$cont][$alias_hijo][$index] = $row[$tabla_hija][$n];

                foreach($arr_campos as $key=>$datos){
                    $data[$alias_padre][$cont][$alias_hijo][$index][$key] = $datos;
                }
                $index++;
            }
        }
     }
}