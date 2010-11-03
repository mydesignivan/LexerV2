<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class perfildeportivo_model extends Model {

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
    public function save(){
        $extra_post = json_decode($this->input->post('extra_post'));
        $json = json_decode($_POST['json']);

        

        //print_array($extra_post, true);

        $data = array(
            'users_id'        => $this->_users_id,
            'lastname'        => $this->input->post('txtLastName'),
            'firstname'       => $this->input->post('txtFirstName'),
            'sex'             => $this->input->post('optSex'),
            'nacimiento'      => strtotime($this->input->post('txtFnac')),
            'estado_civil'    => $this->input->post('cboEstadoCivil'),
            'documento_tipo'  => get_def_post('txtTipoDocOther', $this->input->post('cboTipoDoc')),
            'documento_tipo_other'  => get_def_post('txtTipoDocOther', ''),
            'documento_num'   => $this->input->post('txtNumDoc'),
            'documento_show'  => $this->input->post('chkShowNroDoc'),
            'current_country' => $this->input->post('cboCurrentCountry'),
            'current_city'    => $this->input->post('txtCurrentCity'),
            'current_state'   => $this->input->post('cboCurrentStates'),
            'current_zipcode' => $this->input->post('txtCurrentZipCode'),
            'origin_country'  => $this->input->post('cboOriginCountry'),
            'origin_city'     => $this->input->post('txtOriginCity'),
            'origin_state'    => $this->input->post('cboOriginStates'),
            'origin_zipcode'  => $this->input->post('txtOriginZipCode'),
            'nacionalidad'    => $this->input->post('txtNacionalidad'),
            'passport'        => $this->input->post('cboPassport'),
            'phone_area'      => $this->input->post('txtPhoneArea'),
            'phone_city'      => $this->input->post('txtPhoneCity'),
            'phone_num'       => $this->input->post('txtPhoneNum'),
            'celu_area'       => $this->input->post('txtCeluArea'),
            'celu_city'       => $this->input->post('txtCeluCity'),
            'celu_num'        => $this->input->post('txtCeluNum'),
            'website'         => $this->input->post('txtWebSite'),
            'profesion'       => $this->input->post('txtProfesion'),
            'estudios'        => $this->input->post('txtEstudios'),
            'check_discapacidad' => $this->input->post('chkDisc'),
            'image_thumb'    => $json->filename_image,
            'image_width'   => $json->thumb_width,
            'image_height'  => $json->thumb_height,
        );
//        print_array($data,true);

  /*      if( isset($datUpload['filename_image']) ){
            $data['image_thumb'] = $datUpload['filename_image'];
            $data['image_width'] = $datUpload['thumb_width'];
            $data['image_height'] = $datUpload['thumb_height'];
        }*/

        $this->db->trans_start(); // INICIO TRANSACCION

        // GUARDA LOS "DATOS PERSONALES"
        $this->db->where('users_id', $this->_users_id);
        if( !$this->db->update(TBL_USERS_DEP, $data) ) return false;
        //----------------------------------------------------------------------


        // "IDIOMAS" ALTA
        $lngName = $extra_post->langNew->cboLangName;
        $lngLOral = $extra_post->langNew->cboLangLevelOral;
        $lngLWrite = $extra_post->langNew->cboLangLevelWrite;

        for( $n=0; $n<=count($lngName)-1; $n++ ){
            if( !empty($lngName[$n]) ){
                $data = array(
                    'users_id'    => $this->_users_id,
                    'lang_id'     => $lngName[$n],
                    'level_oral'  => $lngLOral[$n],
                    'level_write' => $lngLWrite[$n]
                );

                if( !$this->db->insert(TBL_USERS_DEP_LANG, $data) ) break;
            }
        }

        // "IDIOMAS" BAJA
        foreach( $extra_post->langDel as $id ){
            if( !$this->db->delete(TBL_USERS_DEP_LANG, array('deplang_id'=>$id)) ) break;
        }

        // "IDIOMAS" MODIFICACION
        foreach( $extra_post->langEdit as $row ){
            $data = array();

            foreach($row as $row2){
                $id = $row2[0];
                $name = $row2[1];
                $val = $row2[2];
                if( $name=='cboLangName' ) $key = 'lang_id';
                else if( $name=='cboLangLevelOral' ) $key = 'level_oral';
                else if( $name=='cboLangLevelWrite' ) $key = 'level_write';
                $data[$key] = $val;
            }

            $this->db->where('deplang_id', $id);
            if( !$this->db->update(TBL_USERS_DEP_LANG, $data) ) break;
        }
        //----------------------------------------------------------------------


        // "DISCAPACIDADES" ALTA
        if( $this->input->post('chkDisc')==1 ){
            $discType = $extra_post->discNew->cboDiscTipo;
            $discDetalle = $extra_post->discNew->txtDiscDetalle;

            for( $n=0; $n<=count($discType)-1; $n++ ){
                if( !empty($discType[$n]) ){
                    $data = array(
                        'users_id' => $this->_users_id,
                        'type'     => $discType[$n],
                        'detalle'  => $discDetalle[$n]
                    );

                    if( !$this->db->insert(TBL_USERS_DEP_DISC, $data) ) break;
                }
            }
        }

        // "DISCAPACIDAD" BAJA
        foreach( $extra_post->langDisc as $id ){
            if( !$this->db->delete(TBL_USERS_DEP_DISC, array('disc_id'=>$id)) ) break;
        }

        // "DISCAPACIDAD" MODIFICACION
        foreach( $extra_post->discEdit as $row ){
            $data = array();

            foreach($row as $row2){
                $id = $row2[0];
                $name = $row2[1];
                $val = $row2[2];
                if( $name=='cboDiscTipo' ) $key = 'type';
                else if( $name=='txtDiscDetalle' ) $key = 'detalle';
                $data[$key] = $val;
            }

            $this->db->where('disc_id', $id);
            if( !$this->db->update(TBL_USERS_DEP_DISC, $data) ) break;
        }
        //----------------------------------------------------------------------


        // ELIMINA LA IMAGEN ANTERIOR
        $filename = $this->input->post('filename_image_old');
        if( !@copy($json->href_image_full, UPLOAD_PATH_CV.$json->filename_image) ) return false;
        
        @unlink(UPLOAD_PATH_CV . $filename);
        @unlink($json->href_image_full);

        $this->db->trans_complete(); // COMPLETO LA TRANSACCION

        return true;
    }

    public function get_info(){
     
        $info = $this->db->get_where(TBL_PERFIL, array('users_id' => $this->_users_id))->row_array();

        $this->db->select("name, ".TBL_LIST_COUNTRY.".country_id as country_id");
        $this->db->join(TBL_LIST_COUNTRY,TBL_LIST_COUNTRY.".country_id = ".TBL_PERFIL_EXPERIENCIA.".country_id");
        $experiencia = $this->db->get_where(TBL_PERFIL_EXPERIENCIA, array('perfil_id' => $info['perfil_id']));


        $becas = $this->db->get_where(TBL_PERFIL_BECAS, array('perfil_id' => $info['perfil_id']));
        $lesion = $this->db->get_where(TBL_PERFIL_LESION, array('perfil_id' => $info['perfil_id']));

        return array(
            'info'  => $info,
            'info_experiencia' => $experiencia,
            'info_becas' => $becas,
            'info_lesion' =>$lesion
        );
    }

    public function getval($val, $def){
        return empty($val) ? $def : '';
    }

    public function get_info_dep($sports_id, $perfil_id){
        $this->db->select(TBL_REL_SPORTS.".*, ".TBL_LIST_SPORTS.".name as name_deporte");
        $this->db->join(TBL_LIST_SPORTS,TBL_LIST_SPORTS.".sports_id = ".TBL_REL_SPORTS.".sports_id");
        $row=$this->db->get_where(TBL_REL_SPORTS,array(TBL_REL_SPORTS.".sports_id"=>$sports_id))->row_array();



        $tabla=$row['perfil'];

        list($field_id,$tmp)=$this->db->list_fields($tabla);

        $rtn=$this->db->get_where($tabla, array($field_id=>$perfil_id))->row_array();

        if (!$rtn) {
            foreach($this->db->list_fields($tabla) as $field){
                $rtn[$field]="";
            }
        }

        $rtn['sport_name']=normalize($row['name_deporte'],"_");

        $this->db->get_where($tabla,array());

        return $rtn;
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

   function getBoxeoLicencia($perfil_id){
        $rtn=$this->db->get_where(TBL_PERFIL_BEXEO_LICENCIA,array("perfil_id"=>$perfil_id));
        return $rtn;
       
   }

    public function getComboSeleccionado($deporte){
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
    }




   /* PRIVATE FUNCTIONS
     **************************************************************************/

}