<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Users_sponsor_model extends Model {

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

    public function get_info_personaldata(){
        $this->load->model('lists_model');
         
         $this->db->select("main.*,  list_country.name as country_name, list_country.country_id as country, list_tipodoc.name as tipodoc_name");
         $this->db->join(TBL_LIST_COUNTRY." as list_country", "list_country.country_id = main.country_id","left");
         $this->db->join(TBL_LIST_TIPODOC." as list_tipodoc","list_tipodoc.tipodoc_id = main.titular_documento_tipo","left");
         $infoSponsor = $this->db->get_where(TBL_USERS_SPONSORS." main", array('users_id' => $this->_users_id))->row_array();


        $infoPic = $this->db->get_where(TBL_USERS_TRAINER_PIC, array('users_id' => $this->_users_id));
        $infoVid = $this->db->get_where(TBL_USERS_TRAINER_VID, array('users_id' => $this->_users_id));

        $infoSponsor['comboState']  = $this->lists_model->get_states($infoSponsor['country'], array(""=>"Seleccione una Provincia"));

         if( $infoSponsor['country_id']!=0 ) {
            $infoSponsor['comboState'] = $this->lists_model->get_states($infoSponsor['country_id'], array(""=>"Seleccione una Provincia"));
            $infoSponsor['state_select'] = $this->lists_model->get_states(false, null,$infoSponsor['state']);
        }

        return array(
            'info_sponsor'  => $infoSponsor,
            'info_pic' => $infoPic,
            'info_vid' => $infoVid,
        );
    }

    function get_info_recomendacion(){
        $this->db->select(TBL_USERS_DEP.".*, ".TBL_USERS.".email ");
        $this->db->join(TBL_USERS,TBL_USERS.".users_id=".TBL_USERS_DEP.".users_id");
        $info = $this->db->get_where(TBL_USERS_DEP, array(TBL_USERS.'.users_id' => $this->_users_id))->row_array();
        return $info?$info:false;
    }

    public function getval($val, $def){
        return empty($val) ? $def : '';
    }


   /* PRIVATE FUNCTIONS
     **************************************************************************/

}