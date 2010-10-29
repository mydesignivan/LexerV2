<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Perfildeportivo extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->helper('form');
        if( !$this->session->userdata('logged_in') || $this->session->userdata('level')==1 ) redirect('/index/');
        $this->load->model('perfildeportivo_model');
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


        switch ($this->session->userdata('users_type')){
            //=============== DEPORTISTA ==============//
            case TBL_USERS_DEP: 
                

                $info = $this->perfildeportivo_model->get_info();
            
                $data = array(
                    'tlp_section'       => 'paneluser/perfildeportivo/perfildeportivo_view.php',
                    'tlp_title_section' => 'Perfil Deportivo',
                    'tlp_script'        => array('plugins_validator', 'helpers_json', 'plugins_datepicker', 'class_perfildeportivo'),
                    'comboCountry'      => $this->lists_model->get_country(),
                    'comboDeportes'     => $this->lists_model->get_sports(array(""=>"Seleccione un Deporte")),
                    'comboLesion'       => $this->lists_model->get_lesiones(array(""=>"Seleccione una lesion")),
                    'comboRep'          => $this->lists_model->get_representantes(array(""=>"Seleccione un Representante")),
                    'comboSponsor'      => $this->lists_model->get_sponsors(array(""=>"Seleccione un Sponsor")),
                    'info'              => $info['info'],
                    'infoBecas'         => $info['info_becas'],
                    'infoExperiencia'   => $info['info_experiencia'],
                    'infoLesion'   => $info['info_lesion']
                );
            break;

        }

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
            $perfil_id= $this->input->post("perfil_id");
            $perfil_deporte_id= $this->input->post("perfil_deporte_id");
            
            $row=$this->perfildeportivo_model->get_info_dep($deporte, $perfil_deporte_id);
           

            switch ($deporte){
                case 1:
                    $data['cboDisciplina']=$this->perfildeportivo_model->getCombo("list_atletismo_disciplina","Seleccione una disciplina");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_atletismo_categoria","Seleccione una categoria");
                    break;
                case 2:
                    $data['cboModalidad']=$this->perfildeportivo_model->getCombo("list_marciales_modalidad","Seleccione una modalidad");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 3: // basquet
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_basquet_posicion","Seleccione una posicion");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_basquet_categoria","Seleccione una categoria");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 4: //boxeo
                    $data['list']=TBL_LIST_BOXEO_CATEGORIA;
                    $data['cboCategoria']=array(array("name"=>"Seleccione una categoria","id"=>""),
                                                array("name"=>"profesional","id"=>1),
                                                array("name"=>"Aficionado","id"=>2),
                                                array("name"=>"Amateur","id"=>3));

                    $data['infoLic']=$this->perfildeportivo_model->getBoxeoLicencia($perfil_id);
                    break;
                case 5:
                    $data['cboEspecialidad']=$this->perfildeportivo_model->getCombo("list_ciclismo_especialidad","Seleccione una modalidad");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_ciclismo_categoria","Seleccione una categoria");
                    break;
                case 6: //escalada
                    $data['cboModalidad']=$this->perfildeportivo_model->getCombo("list_escalada_modalidad","Seleccione una modalidad");
                    break;
                case 7: //futbol
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_futbol_posicion","Seleccione una posicion");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_futbol_categoria","Seleccione una categoria");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 8: //futbol sala

                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_futsal_posicion","Seleccione una posicion");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_futsal_categoria","Seleccione una categoria");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 9: //golf
                    break;
                case 10: //heterofilia
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_halterofilia_categoria","Seleccione una categoria");
                    $data['cboDivision']=$this->perfildeportivo_model->getCombo("list_halterofilia_division","Seleccione una división");
                    break;
                case 11: //handball
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_handball_posicion","Seleccione una posicion");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 12: //handball
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_hockeyc_posicion","Seleccione una posicion");
                    $data['cboGolpe']=$this->perfildeportivo_model->getCombo("list_hockeyc_golpe","Seleccione un golpe");
                    break;
                case 13: //hockey sobre cesped
                    $data['cboModalidad']=$this->perfildeportivo_model->getCombo("list_natacion_modalidad","Seleccione una modalidad");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 14: //padel
                    $data['cboGolpe']=$this->perfildeportivo_model->getCombo("list_padel_golpe","Seleccione su mejor golpe");
                    $data['cboPosicion']=array(array("name"=>"Seleccione una posicion","id"=>""),
                                               array("name"=>"Drive","id"=>'d'),
                                               array("name"=>"Reves","id"=>'r'));
                    $data['cboModalidad']=array(array("name"=>"Seleccione una modalidad","id"=>""),
                                                array("name"=>"Pareja","id"=>'p'),
                                                array("name"=>"Seleccion","id"=>'s'));

                    break;
                case 15: //hockey sobre cesped
                    $data['list']="list_patinaje_especialidad";
                    $data['cboModalidad']=$this->perfildeportivo_model->getCombo("list_natacion_modalidad","Seleccione una modalidad");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 16: //Rugby
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_rugbi_categoria","Seleccione una categoria");
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_rugbi_posicion","Seleccione una posicion");
                    $data['cboGolpe']=$this->perfildeportivo_model->getCombo("list_rugbi_golpe","Seleccione un golpe");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 17: //Softbol
                    $data['cboHabilidad']=$this->perfildeportivo_model->getCombo("list_softbol_habilidad","Seleccione una habilidad");
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_softbol_posicion","Seleccione una posicion");
                    $data['recursos']=$this->perfildeportivo_model->getCombo("list_softbol_habilidad_recursos");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 18: //Tenis
                    $data['cboModalidad']=array(array("name"=>"Seleccione una modalidad","id"=>""),
                                                array("name"=>"Individuales","id"=>'1'),
                                                array("name"=>"Dobles","id"=>'2'),
                                                array("name"=>"Ambas","id"=>'3'));
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 19: //Tiro con arco
                    $data['cboOjo']=array(array("name"=>"Seleccione un ojo","id"=>""),
                                                array("name"=>"Izquierdo","id"=>'i'),
                                                array("name"=>"Derecho","id"=>'d'));
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 20: //tiro deportivo
                    $data['cboOjo']=array(array("name"=>"Seleccione un ojo","id"=>""),
                                                array("name"=>"Izquierdo","id"=>'i'),
                                                array("name"=>"Derecho","id"=>'d'));
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                case 21: //Voley
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    $data['cboPosicion']=$this->perfildeportivo_model->getCombo("list_voley_posicion","Seleccione una posicion");
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_voley_categoria","Seleccione una categoria");

                    break;
                case 22: //tiro deportivo
                    $data['cboOjo']=array(array("name"=>"Seleccione un ojo","id"=>""),
                                                array("name"=>"Izquierdo","id"=>'i'),
                                                array("name"=>"Derecho","id"=>'d'));
                    $data['cboCategoria']=$this->perfildeportivo_model->getCombo("list_voleyplaya_categoria","Seleccione una categoria");
                    $data['cboSeleccionado']=$this->perfildeportivo_model->getComboSeleccionado($deporte,"Seleccione un seleccionado");
                    break;
                }


            $data['info']=$row;
          
            $path='/paneluser/perfildeportivo/ajax/'.strtolower($row['sport_name']).'_view';
           
             $this->load->view($path, $data);
           
            
         }
    }

     public function ajax_get_subcat(){
        $list=$deporte= $this->input->post("list");
        $cat=$deporte= $this->input->post("cat");

        $cboCategoria=$this->perfildeportivo_model->getComboSubCat($list,"Seleccione una categoria",$cat);

        echo '<label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>';
        echo form_dropdown('cboSubCat', $cboCategoria, $cat, 'id="cboSubCat" tabindex="1"  onchange="LibForms.isOther(this);"');
     }



    /* PRIVATE FUNCTIONS
     **************************************************************************/

}