<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== Razon Social =========== -->
    <div class="trow">
        <label class="label label-form" for="txtRazon"><span class="required">*</span>Razon Social</label>
        <input type="text" name="txtRazon" id="txtRazon" class="wsize2" tabindex="2" value="<?=$info['razon_social']?>" />
    </div>
 <!-- ========== Foto =========== -->
    <div class="trow">
        <label class="label label2" for="txtImage"><span class="required">*</span>Foto</label>
<?php
$src = isset($info) ? UPLOAD_PATH_CV . $info['image_thumb'] : '';
?>
        <img id="ajaxupload-thumb" src="<?=$src?>" alt="<?=@$info['image_name']?>" width="64" height="64" class="fleft thumbframe1 <?php if( $src=='' ) echo 'hide'?>" />
        <div class="fleft">
            <div class="fleft">
                <input type="file" id="txtImage" name="txtImage" class="ajaxupload-input" size="20" />&nbsp;
                <button id="btnUpload2" type="button" onclick="PersonalSponsorData.upload();" class="float-left">Subir</button>
                <img id="ajaxupload-load" src="images/ajax-loader4.gif" alt="Loading..." width="43" height="11" class="hide" />
            </div>
            <label class="clear fleft label-leyend">M&aacute;ximo 2 megas por foto (gif, jpg, jpeg o png)</label>
            <div id="ajaxupload-error" class="clear error span-7 hide">Este campo es obligatorio.</div>
        </div>
        <input type="hidden" name="image_old" value="<?=$src?>" />
    </div>

  <?php /*  <div class="trow">
        <label class="label label-form" for="txtImage"><span class="required">*</span>Foto</label>
        <?php if( !empty($info['image_thumb']) ){?>
        <div class="fleft">
            <div class="picframe">
                <img src="<?=UPLOAD_PATH_CV . $info['image_thumb']?>" alt="<?=$info['image_thumb']?>" width="64<?//=$info['image_width']?>" height="64<?//=$info['image_height']?>" class="jq-imgpreview" />
            </div>
            <p class="clear">
                <input type="file" name="txtImage" id="txtImage" size="10" tabindex="4" />
                <button type="button" class="button-small" onclick="">Subir</button>
            </p>
        </div>
        <?php }?>
    </div>*/?>

    <!-- ========== Cuit =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCuit"><span class="required">*</span>CUIT</label>
        <input type="text" name="txtCuit" id="txtCuit" class="wsize2" tabindex="2" value="<?=$info['cuit']?>" />
    </div>
    <!-- ========== Domicilio Legal =========== -->
    <div class="trow">
        <label class="label label-form" for="txtDomicilio"><span class="required">*</span>Domicilio Legal</label>
        <input type="text" name="txtDomicilio" id="txtDomicilio" class="wsize2" tabindex="2" value="<?=$info['address']?>" />
    </div>


    <!-- ========== PAIS  =========== -->
    <div class="trow">
        <label class="label label-form" for="cboCountry"><span class="required">*</span>Pa&iacute;s Actual</label>
        <?=form_dropdown('cboCountry', $comboCountry, $info['country'], 'id="cboCountry" tabindex="10" onchange="PersonalSponsorData.get_combo_states(this, \'#contStates\')"');?>
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA  =========== -->
    <div id="contStates" class="trow <?=getval($info['states_id'], 'hide', 0)?>">
        <label class="label label-form" for="cboStates"><span class="required">*</span>Provincia</label>
        <?php if( $info['states_id']!=0 ){
                echo form_dropdown('cboStates', $info['comboState'], $info['states_id'], 'id="cboStates" class="jq-select" tabindex="11"');
              }else{?>
                <select name="cboStates" id="cboStates" class="jq-select" tabindex="11"></select>
        <?php }?>
    </div>
    <!-- ========== CIUDAD  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCity"><span class="required">*</span>Ciudad </label>
        <input type="text" name="txtCity" id="txtCity" class="wsize2" tabindex="12" value="<?=$info['city']?>" />
    </div>
    <!-- ========== CODIGO POSTAL  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtZipCode">C&oacute;digo Postal</label>
        <input type="text" name="txtZipCode" id="txtCurrentZipCode" class="wsize0" tabindex="13" value="<?=$info['zipcode']?>" />
    </div>


    <!-- ========== TELEFONO FIJO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtPhoneArea"><span class="required">*</span>Tel&eacute;fono Fijo</label>
        <input type="text" name="txtPhoneArea" id="txtPhoneArea" class="wsize0" tabindex="20" value="<?=$info['phone_area']?>" />
        <input type="text" name="txtPhoneCity" id="txtPhoneCity" class="wsize0" tabindex="21" value="<?=$info['phone_city']?>" />
        <input type="text" name="txtPhoneNum" id="txtPhoneNum" class="wsize1" tabindex="22" value="<?=$info['phone_num']?>" />
    </div>
    <!-- ========== CELULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCeluArea">Celular/M&oacute;vil</label>
        <input type="text" name="txtCeluArea" id="txtCeluArea" class="wsize0" tabindex="23" value="<?=$info['celu_area']?>" />
        <input type="text" name="txtCeluCity" id="txtCeluCity" class="wsize0" tabindex="24" value="<?=$info['celu_city']?>" />
        <input type="text" name="txtCeluNum" id="txtCeluNum" class="wsize1" tabindex="25" value="<?=$info['celu_num']?>" />
    </div>
     <!-- ========== RUBRO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtRubro">Rubro</label>
        <?=form_dropdown('cboRubro', $cboRubro, $info['rubro'], 'id="cboRubro" tabindex="7" onchange="LibForms.isOther(this,\'#txtRubroOther\')"');?>
        <input type="text" name="txtRubroOther" id="txtRubroOther" class="<?=getval($info['rubro_other'], 'hide')?>" value="<?=$info['rubro_other']?>" />
    </div>

    
    <h5>
DATOS DEL TITULAR O APODERADO
    </h5>


     <!-- ========== CARGO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCargo">Cargo</label>
        <?=form_dropdown('cboCargo', $cboCargo, $info['titular_cargo'], 'id="cboCargo" tabindex="7" onchange="LibForms.isOther(this,\'#txtCargoOther\')"');?>
        <input type="text" name="txtCargoOther" id="txtCargoOther" class="<?=getval($info['titular_cargo']>0, 'hide')?>" value="<?=$info['titular_cargo_other']?>" />
    </div>

    <!-- ========== APELLIDO TITULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="txtLastName"><span class="required">*</span>Apellido</label>
        <input type="text" name="txtLastName" id="txtLastName" class="wsize2" tabindex="2" value="<?=$info['titular_lastname']?>" />
    </div>
    <!-- ========== NOMBRE TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtFirstName"><span class="required">*</span>Nombre</label>
        <input type="text" name="txtFirstName" id="txtFirstName" class="wsize2" tabindex="3" value="<?=$info['titular_firstname']?>" />
    </div>


    <!-- ========== TIPO DE DOCUMENTO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="cboTipoDoc">Tipo de Documento</label>
        <?=form_dropdown('cboTipoDoc', $comboTipoDoc, $info['titular_documento_tipo'], 'id="cboTipoDoc" tabindex="7" onchange="LibForms.isOther(this,\'#txtTipoDocOther\')"');?>
        <input type="text" name="txtTipoDocOther" id="txtTipoDocOther" class="<?=getval($info['titular_documento_tipo_other'], 'hide')?>" value="<?=$info['titular_documento_tipo_other']?>" />
    </div>
    <!-- ========== NRO DOCUMENTO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtNumDoc">Nro. Documento</label>
        <input type="text" name="txtNumDoc" id="txtNumDoc" class="wsize2" tabindex="8" value="<?=$info['titular_documento_num']?>" />
    </div>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC.TITULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="chkShowNroDoc">Mostrar mi n&uacute;mero de documento</label>
        <label class="label"><input type="checkbox" name="chkShowNroDoc" id="chkShowNroDoc" value="1" tabindex="9" <?=getval($info['titular_documento_show'], 'checked', 1)?> /></label>
    </div>


    <!-- ========== TELEFONO FIJO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtTPhoneArea"><span class="required">*</span>Tel&eacute;fono Fijo</label>
        <input type="text" name="txtTPhoneArea" id="txtTPhoneArea" class="wsize0" tabindex="20" value="<?=$info['titular_phone_area']?>" />
        <input type="text" name="txtTPhoneCity" id="txtTPhoneCity" class="wsize0" tabindex="21" value="<?=$info['titular_phone_city']?>" />
        <input type="text" name="txtTPhoneNum" id="txtTPhoneNum" class="wsize1" tabindex="22" value="<?=$info['titular_phone_num']?>" />
    </div>
    <!-- ========== CELULAR TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtTCeluArea">Celular/M&oacute;vil</label>
        <input type="text" name="txtTCeluArea" id="txtTCeluArea" class="wsize0" tabindex="23" value="<?=$info['titular_celu_area']?>" />
        <input type="text" name="txtTCeluCity" id="txtTCeluCity" class="wsize0" tabindex="24" value="<?=$info['titular_celu_city']?>" />
        <input type="text" name="txtTCeluNum" id="txtTCeluNum" class="wsize1" tabindex="25" value="<?=$info['titular_celu_num']?>" />
    </div>

 

    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="10" class="fright">Guardar</button>
    </div>

    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="filename_image_old" value="<?=$info['image_thumb']?>" />
    <input type="hidden" name="json" id="json">
</form>


<form id="ajaxupload-form" action="<?=site_url('/paneluser/personaldata/ajax_upload_image')?>" method="post" enctype="multipart/form-data" target="ifr" class="hide">
    <iframe name="ifr" id="ifr" src="about:blank" frameborder="1" style="width:800px; height: 100px; border: 1px solid red;"></iframe>
</form>

<script type="text/javascript">
<!--
PersonalSponsorData.initializer();
-->
</script>