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
            'info'              => $info['historial']
        );

        $this->_data = $this->dataview->set_data($data);
        $this->load->view('template_paneluser_view', $this->_data);
    }

    public function save(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            switch ($this->session->userdata('users_type')){
                case TBL_USERS_DEP:
                    $this->load->model('users_dep_model');
                    $res = $this->users_dep_model->save();
                break;
            }

            if( $res ){
                $status = "success";
                $message = "Los datos fueron guardados con &eacute;xito.";
            }else{
                $status = "error";
                $message = "Los datos no pudieron ser guardados.";
            }

            $this->session->set_flashdata('status', $status);
            $this->session->set_flashdata('message', $message);
            redirect('/paneluser/personaldata/');
        }
    }



    /* AJAX FUNCTIONSget_tabla
     **************************************************************************/
    public function ajax_upload_image(){
        if( $_SERVER['REQUEST_METHOD']=="POST" ){

            $this->load->library('superupload', array(
                'path'          => UPLOAD_PATH_CV.'.tmp/',
                'thumb_width'   => IMAGE_CV_THUMB_WIDTH,
                'thumb_height'  => IMAGE_CV_THUMB_HEIGHT,
                'maxsize'       => UPLOAD_MAXSIZE,
                'filetype'      => UPLOAD_FILETYPE,
                'resize_image_original' => false,
                'filename_prefix'       => $this->session->userdata('users_id')."_"
            ));



             echo json_encode($this->superupload->upload('txtImage'));
        }
    }

    public function ajax_get_sport(){
       
         if( $_SERVER['REQUEST_METHOD']=="POST" ){
           
            $deporte= $this->input->post("deporte");
            $historial_id= $this->input->post("historial_id");
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
                    $disciplinas=$this->historialdeportivo_model->getCombo("list_atletismo_disciplina","Seleccione una disciplina");
                    $categorias=$this->historialdeportivo_model->getCombo("list_atletismo_categoria","Seleccione una categoria");

                    $data['categoria']=$row[TBL_HISTORIAL_ATLETISMO_CATEGORIA];
                    for($i=0;$i<count($row[TBL_HISTORIAL_ATLETISMO_CATEGORIA]);$i++){
                        $data['categoria'][$i]['cboTemporada'] = $cboTemporada;
                        $data['categoria'][$i]['cboCategoria'] = $categorias;
                        $data['categoria'][$i]['categorias']=$row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA];

                        for($n=0;$n<count($row[TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA]);$n++){
                            $data['categoria'][$i]['cboCountry'] = $cboCountry;
                            $data['categoria'][$i]['categorias'][$n]['cboPrueba'] = $disciplinas;
                            $data['categoria'][$i]['categorias'][$n]['cboCountry'] = $cboCountry;
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
                         $data['palmares'][$i]['pruebas'] = $disciplinas;
                    }
                break;

                case 2: //Artes Marciales
                    $data['historial']=$row[TBL_HISTORIAL_MARCIALES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_MARCIALES]);$i++){
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $data['historial'][$i]['torneos']=$row[TBL_HISTORIAL_MARCIALES_TORNEOS];

                        for($n=0;$n<count($row[TBL_HISTORIAL_MARCIALES_TORNEOS]);$n++){
                            $data['historial'][$i]['torneos'][$n]['cboCountry'] = $cboCountry;
                        }
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_MARCIALES_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_MARCIALES_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                    }


                    break;
                case 3: // basquet
                    $categorias=$this->historialdeportivo_model->getCombo("list_basquet_categoria","Seleccione una categoria");
                    $posicion=$this->historialdeportivo_model->getCombo("list_basquet_posicion","Seleccione una categoria");

                    $data['historial'] = $row[TBL_HISTORIAL_BASQUET];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_BASQUET]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_BASQUET_DATOS];

                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_BASQUET_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_BASQUET_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    
                    break;
                case 4: //boxeo
                    $list_cat=TBL_LIST_BOXEO_CATEGORIA;;
                    $nivel=array(array("name"=>"Seleccione una categoria","id"=>""),
                                                array("name"=>"profesional","id"=>1),
                                                array("name"=>"Aficionado","id"=>2),
                                                array("name"=>"Amateur","id"=>3));

                    $resultados=$this->historialdeportivo_model->getCombo(TBL_LIST_BOXEO_RESULTADO,"Seleccione resultado");

                    $data['historial'] = $row[TBL_HISTORIAL_BOXEO];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_BOXEO]) ; $i++){
                        $data['historial'][$i]['list'] = $list_cat;
                        $data['historial'][$i]['cboNivel'] = $nivel;
                        $data['historial'][$i]['peleas'] = $row[TBL_HISTORIAL_BOXEO_PELEAS];
                        for($n=0;$n<count($row[TBL_HISTORIAL_BOXEO_PELEAS]);$n++){
                            $data['historial'][$i]['peleas'][$n]['cboResultado'] = $resultados;
                            $data['historial'][$i]['peleas'][$n]['cboCountry'] = $cboCountry;
                        }
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

                        $data['historial'][$i]['internacionales'] = $row[TBL_HISTORIAL_CICLISMO_INTERNACIONALES];
                        $data['historial'][$i]['nacionales'] = $row[TBL_HISTORIAL_CICLISMO_NACIONALES];



                    }
                   $data['palmares'] = $row[TBL_HISTORIAL_CICLISMO_PALMARES];

                   
                    break;
                case 6: //escalada
                    $data['cboModalidad']=$this->historialdeportivo_model->getCombo("list_escalada_modalidad","Seleccione una modalidad");
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

                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_FUTBOL_DATOS];

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

                    $data['historial'] = $row[TBL_HISTORIAL_FUTBOLSALA];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_FUTBOLSALA]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboPosicion'] = $posicion;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;

                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_FUTBOLSALA_DATOS];

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
                        $data['historial'][$i]['tour'] = $row[TBL_HISTORIAL_GOLF_TOUR];
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_GOLF_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_GOLF_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                    }
                    break;
                case 10: //halterofilia
                    $categoria=$this->historialdeportivo_model->getCombo("list_halterofilia_categoria","Seleccione una categoria");
                    $division=$this->historialdeportivo_model->getCombo("list_halterofilia_division","Seleccione una división");

                    $data['historial'] = $row[TBL_HISTORIAL_HALTEROFILIA];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_HALTEROFILIA]) ; $i++){
                        $data['historial'][$i]['cboCategoria'] = $categoria;
                        $data['historial'][$i]['categorias'] = $row[TBL_HISTORIAL_HALTEROFILIA_CATEGORIA];
                        for($n=0;$n<count($row[TBL_HISTORIAL_HALTEROFILIA_CATEGORIA]);$n++){
                            $data['historial'][$i]['categorias'][$n]['cboDivision'] = $division;
                            $data['historial'][$i]['categorias'][$n]['cboCountry'] = $cboCountry;
                        }
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
                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_HANDBALL_DATOS];
                        $data['historial'][$i]['lanzamientos_lista'] = $row[TBL_HISTORIAL_HANDBALL_LANZAMIENTOS];
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
                                               array("name"=>"No participo","id"=>'d'),
                                               array("name"=>"Picador","id"=>'d'),
                                               array("name"=>"Primer Salidor","id"=>'d'),
                                               array("name"=>"Segundo Salidor","id"=>'d'),
                                               array("name"=>"Arquero","id"=>'r'));

                    $ofensivo=array(array("name"=>"Seleccione una posicion","id"=>""),
                                               array("name"=>"No participo","id"=>'d'),
                                               array("name"=>"Parador Horizontal","id"=>'r'),
                                               array("name"=>"Parador Vertical","id"=>'r'),
                                               array("name"=>"Desviador","id"=>'r'),
                                               array("name"=>"Servidor","id"=>'r'),
                                               array("name"=>"Pegador","id"=>'r'),
                                               array("name"=>"Rebotero","id"=>'r'),
                                               array("name"=>"Arrastrador","id"=>'r'),
                                               array("name"=>"Elevaciones","id"=>'r'));
                    /*Árbitro, DT, Ayudante Técnico, Otra)
                     */
                    $actividades=array(array("name"=>"Seleccione una actividad","id"=>""),
                                               array("name"=>"Árbitro","id"=>'d'),
                                               array("name"=>"DT","id"=>'100'),
                                               array("name"=>"Ayudante","id"=>'r'),
                                               array("name"=>"Técnico","id"=>'r'),
                                               array("name"=>"Otra","id"=>'-1'));

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

                        $data['historial'][$i]['torneos']=$row[TBL_HISTORIAL_HOCKEY_TORNEOS];
                       
                        for($n=0;$n<count($row[TBL_HISTORIAL_HOCKEY_TORNEOS]);$n++){
                            $data['historial'][$i]['torneos'][$n]['cboTemporada'] = $cboTemporada;
                        }

                    }

                    $data['palmares'] = $row[TBL_HISTORIAL_HOCKEY_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_HOCKEY_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;

                case 13: //Natacion
                    $categorias = $this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_CATEGORIA,"Seleccione una categoria");
                    $modalidad = $this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_MODALIDAD,"Seleccione una modalidad",true);
                    $prueba=$this->historialdeportivo_model->getCombo(TBL_LIST_NATACION_PRUEBA,"Seleccione una prueba");

                    $piscina=array(array("name"=>"Seleccione piscina","id"=>""),
                                                array("name"=>"25 Mts","id"=>'1'),
                                                array("name"=>"50 Mts","id"=>'2'));
                    $data['historial'] = $row[TBL_HISTORIAL_NATACION];
                    for($i = 0 ; $i < count($row[TBL_HISTORIAL_NATACION]) ; $i++){
                        $data['historial'][$i]['cboModalidad'] = $modalidad;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                        $data['historial'][$i]['competencias'] = $row[TBL_HISTORIAL_NATACION_COMPETENCIAS];
                        for($n = 0; $n < count($row[TBL_HISTORIAL_NATACION_COMPETENCIAS]);$n++){
                            $data['historial'][$i]['competencias'][$n]['cboPrueba'] = $prueba;
                            $data['historial'][$i]['competencias'][$n]['cboPiscina'] = $piscina;
                            $data['historial'][$i]['competencias'][$n]['cboCountry'] = $cboCountry;
                        }
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
                case 15: //hockey sobre cesped
                    $data['list']="list_patinaje_especialidad";
                    $data['cboModalidad']=$this->perfildeportivo_model->getCombo("list_natacion_modalidad","Seleccione una modalidad");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
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
                        $data['historial'][$i]['datos'] = $row[TBL_HISTORIAL_RUGBY_DATOS];
                    }
                    $data['palmares'] = $row[TBL_HISTORIAL_RUGBY_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_RUGBY_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }

                    break;
                case 17: //Softbol
                    $data['cboHabilidad']=$this->perfildeportivo_model->getCombo("list_softbol_habilidad","Seleccione una habilidad");
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_softbol_posicion","Seleccione una posicion");
                    $data['recursos']=$this->perfildeportivo_model->getCombo("list_softbol_habilidad_recursos");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
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

                        $data['historial'][$i]['titulos_singles'] = $row[TBL_HISTORIAL_TENIS_TITULOS_SINGLES];
                        for($n=0;$n<count($row[TBL_HISTORIAL_TENIS_TITULOS_SINGLES]);$n++)
                            $data['historial'][$i]['titulos_singles'][$n]['cboSuperficie'] = $superficie;

                        $data['historial'][$i]['titulos_dobles'] = $row[TBL_HISTORIAL_TENIS_TITULOS_DOBLES];
                        for($n=0;$n<count($row[TBL_HISTORIAL_TENIS_TITULOS_DOBLES]);$n++)
                            $data['historial'][$i]['titulos_dobles'][$n]['cboSuperficie'] = $superficie;

                        $data['historial'][$i]['finales_singles'] = $row[TBL_HISTORIAL_TENIS_FINALES_SINGLES];
                        for($n=0;$n<count($row[TBL_HISTORIAL_TENIS_FINALES_SINGLES]);$n++)
                            $data['historial'][$i]['finales_singles'][$n]['cboSuperficie'] = $superficie;

                        $data['historial'][$i]['finales_dobles'] = $row[TBL_HISTORIAL_TENIS_FINALES_DOBLES];
                        for($n=0;$n<count($row[TBL_HISTORIAL_TENIS_FINALES_DOBLES]);$n++)
                            $data['historial'][$i]['finales_dobles'][$n]['cboSuperficie'] = $superficie;

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
                        $data['historial'][$i]['torneos'] = $row[TBL_HISTORIAL_ARCO_TORNEOS];
                        for($n=0;$n<count($row[TBL_HISTORIAL_ARCO_TORNEOS]);$n++){
                            $data['historial'][$i]['torneos'][$n]['cboCategoria'] = $categorias;
                            $data['historial'][$i]['torneos'][$n]['cboCountry'] = $cboCountry;
                        }

                    }

                    $data['palmares'] = $row[TBL_HISTORIAL_ARCO_PALMARES];
                    for($i=0;$i<count($row[TBL_HISTORIAL_ARCO_PALMARES]);$i++){
                         $data['palmares'][$i]['cboTemporada'] = $cboTemporada;
                         $data['palmares'][$i]['cboCountry'] = $cboCountry;
                    }
                    break;                    break;
                case 20: //tiro deportivo
                    $list_cat = TBL_LIST_TIRO_MODALIDAD;
                    $categorias =   $this->historialdeportivo_model->getCombo(TBL_LIST_TIRO_CATEGORIA,"Seleccione una categoria");
                    $modalidad=array(array("name"=>"Seleccione una modalidad","id"=>""),
                                                array("name"=>"Modalidad Rifle","id"=>1),
                                                array("name"=>"Modalidad Pistola","id"=>2),
                                                array("name"=>"Modalidad Escopeta","id"=>3),
                                                array("name"=>"Modalidad Blanco Móvil","id"=>4));

                    
                    $data['historial'] = $row[TBL_HISTORIAL_TIRO];
                    for($i=0 ; $i < count($row[TBL_HISTORIAL_TIRO]) ; $i++ ){
                        $data['historial'][$i]['cboModalidad'] = $modalidad;
                        $data['historial'][$i]['cboCategoria'] = $categorias;
                        $data['historial'][$i]['cboTemporada'] = $cboTemporada;
                        $data['historial'][$i]['list'] = $list_cat;
                        $data['historial'][$i]['cboCountry'] = $cboCountry;
                        $cboState = $this->lists_model->get_states(false, null,$data['historial'][$i]['country']);
                        $data['historial'][$i]['cboState'] = $cboState;
                        $data['historial'][$i]['torneos'] = $row[TBL_HISTORIAL_TIRO_EVENTOS];
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
    
     public function ajax_get_subcat(){
        $list=$deporte= $this->input->post("list");
        $cat=$deporte= $this->input->post("cat");

        $cboCategoria=$this->historialdeportivo_model->getComboSubCat($list,"Seleccione una categoria",$cat);

        echo '<label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>';
        echo form_dropdown('cboSubCat', $cboCategoria, $cat, 'id="cboSubCat" tabindex="1"  onchange="LibForms.isOther(this);"');
     }
}