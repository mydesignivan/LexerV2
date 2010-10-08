<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== APELLIDO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtLastName"><span class="required">*</span>Apellido</label>
        <input type="text" name="txtLastName" id="txtLastName" class="wsize2" tabindex="2" value="<?=$info['lastname']?>" />
    </div>
    <!-- ========== NOMBRE =========== -->
    <div class="trow">
        <label class="label label-form" for="txtFirstName"><span class="required">*</span>Nombre</label>
        <input type="text" name="txtFirstName" id="txtFirstName" class="wsize2" tabindex="3" value="<?=$info['firstname']?>" />
    </div>
    <!-- ========== FOTO =========== -->

    <div class="trow">
        <label class="label label2" for="txtImage"><span class="required">*</span>Foto</label>
<?php
$src = isset($info) ? UPLOAD_PATH_CV . $info['image_thumb'] : '';
?>
        <img id="ajaxupload-thumb" src="<?=$src?>" alt="<?=@$info['image_name']?>" width="64" height="64" class="fleft thumbframe1 <?php if( $src=='' ) echo 'hide'?>" />
        <div class="fleft">
            <div class="fleft">
                <input type="file" id="txtImage" name="txtImage" class="ajaxupload-input" size="20" />&nbsp;
                <button id="btnUpload2" type="button" onclick="PersonalRepData.upload();" class="float-left">Subir</button>
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
    <!-- ========== SEXO =========== -->
    <div class="trow">
        <label class="label label-form" for="optSexF"><span class="required">*</span>Sexo</label>
        <div class="fleft">
            <label class="label" for="optSexF"><input type="radio" name="optSex" id="optSexF" value="f" <?=getval($info['sex'], 'checked', 'f')?> />&nbsp;Femenino</label>&nbsp;&nbsp;
            <label class="label" for="optSexM"><input type="radio" name="optSex" id="optSexM" value="m" <?=getval($info['sex'], 'checked', 'm')?> />&nbsp;Masculino</label>
        </div>
    </div>
    <!-- ========== FECHA NACIMIENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtFnac"><span class="required">*</span>Fecha de Nacimiento</label>
        <input type="text" name="txtFnac" id="txtFnac" class="wsize1" tabindex="5" value="<?=$info['nacimiento']?>" />
    </div>
    <!-- ========== EDAD =========== -->
    <div class="trow <?=getval($info['age'], 'hide')?>">
        <label class="label label-form">Edad</label>
        <input type="text" id="txtAge" class="input-age" value="<?=$info['age']?>" readonly />
    </div>


    <!-- ========== TIPO DE DOCUMENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="cboTipoDoc">Tipo de Documento</label>
        <?=form_dropdown('cboTipoDoc', $comboTipoDoc, $info['documento_tipo'], 'id="cboTipoDoc" tabindex="7" onchange="LibForms.isOther(this,\'#txtTipoDocOther\')"');?>
        <input type="text" name="txtTipoDocOther" id="txtTipoDocOther" class="<?=getval($info['documento_tipo_other'], 'hide')?>" value="<?=$info['documento_tipo_other']?>" />
    </div>
    <!-- ========== NRO DOCUMENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtNumDoc">Nro. Documento</label>
        <input type="text" name="txtNumDoc" id="txtNumDoc" class="wsize2" tabindex="8" value="<?=$info['documento_num']?>" />
    </div>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC. =========== -->
    <div class="trow">
        <label class="label label-form" for="chkShowNroDoc">Mostrar mi n&uacute;mero de documento</label>
        <label class="label"><input type="checkbox" name="chkShowNroDoc" id="chkShowNroDoc" value="1" tabindex="9" <?=getval($info['documento_show'], 'checked', 1)?> /></label>
    </div>
    <!-- ========== PAIS ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="cboCurrentCountry"><span class="required">*</span>Pa&iacute;s Actual</label>
        <?=form_dropdown('cboCurrentCountry', $comboCountry, $info['current_country'], 'id="cboCurrentCountry" tabindex="10" onchange="PersonalRepData.get_combo_states(this, \'#contCurrentStates\')"');?>
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA ACTUAL =========== -->
    <div id="contCurrentStates" class="trow <?=getval($info['current_state'], 'hide', 0)?>">
        <label class="label label-form" for="cboCurrentStates"><span class="required">*</span>Provincia Actual</label>
        <?php if( $info['current_state']!=0 ){
                echo form_dropdown('cboCurrentStates', $info['comboCurrentState'], $info['current_state'], 'id="cboCurrentStates" class="jq-select" tabindex="11"');
              }else{?>
                <select name="cboCurrentStates" id="cboCurrentStates" class="jq-select" tabindex="11"></select>
        <?php }?>
    </div>
    <!-- ========== CIUDAD ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCurrentCity"><span class="required">*</span>Ciudad Actual</label>
        <input type="text" name="txtCurrentCity" id="txtCurrentCity" class="wsize2" tabindex="12" value="<?=$info['current_city']?>" />
    </div>
    <!-- ========== CODIGO POSTAL ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCurrentZipCode">C&oacute;digo Postal Actual</label>
        <input type="text" name="txtCurrentZipCode" id="txtCurrentZipCode" class="wsize0" tabindex="13" value="<?=$info['current_zipcode']?>" />
    </div>
    <!-- ========== PAIS ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="cboOriginCountry">Pa&iacute;s Origen</label>
        <?php $comboCountry[''] = "&nbsp;";?>
        <?=form_dropdown('cboOriginCountry', $comboCountry, $info['origin_country'], 'id="cboOriginCountry" tabindex="14" onchange="PersonalRepData.get_combo_states(this, \'#contOriginStates\')"');?>
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA ORIGEN =========== -->
    <div id="contOriginStates" class="trow <?=getval($info['origin_state'], 'hide', 0)?>">
        <label class="label label-form" for="cboOriginStates">Provincia Origen</label>
        <?php if( $info['origin_state']!=0 ){
                echo form_dropdown('cboOriginStates', $info['comboOriginState'], $info['origin_state'], 'id="cboOriginStates" class="jq-select" tabindex="15"');
              }else{?>
                <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
        <?php }?>
    </div>
    <!-- ========== CIUDAD ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="txtOriginCity">Ciudad Origen</label>
        <input type="text" name="txtOriginCity" id="txtOriginCity" tabindex="16" class="wsize2" value="<?=$info['origin_city']?>" />
    </div>
    <!-- ========== CODIGO POSTAL ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="txtOriginZipCode">C&oacute;digo Postal Origen</label>
        <input type="text" name="txtOriginZipCode" id="txtOriginZipCode" tabindex="17" class="wsize0" value="<?=$info['origin_zipcode']?>" />
    </div>
    <!-- ========== NACIONALIDAD=========== -->
    <div class="trow">
        <label class="label label-form" for="txtNacionalidad"><span class="required">*</span>Nacionalidad</label>
        <input type="text" name="txtNacionalidad" id="txtNacionalidad" tabindex="18" class="wsize2" value="<?=$info['nacionalidad']?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtNacionalidad2">Nacionalidad</label>
        <input type="text" name="txtNacionalidad2" id="txtNacionalidad2" tabindex="18" class="wsize2" value="<?=$info['nacionalidad2']?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtNacionalidad3">Nacionalidad</label>
        <input type="text" name="txtNacionalidad3" id="txtNacionalidad3" tabindex="18" class="wsize2" value="<?=$info['nacionalidad3']?>" />
    </div>
    <!-- ========== PASAPORTE =========== -->
    <div class="trow">
        <label class="label label-form" for="cboPassport"><span class="required">*</span>Pasaporte</label>
        <?=form_dropdown('cboPassport', $comboPassport, $info['passport'], 'id="cboPassport" tabindex="19"');?>
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
    <!-- ========== SITIO WEB =========== -->
    <div class="trow">
        <label class="label label-form" for="txtWebSite">Tu Sitio Web</label>
        <input type="text" name="txtWebSite" id="txtWebSite" class="wsize2" tabindex="26" value="<?=$info['website']?>" />
    </div>
    <!-- ========== IDIOMAS =========== -->
    <div class="trow">
        <label class="label label-form" style="width:220px">Idiomas</label>
        <div class="fleft">
            <table id="tblLang" cellpadding="0" cellspacing="0" class="table-lang">
                <thead>
                    <tr>
                        <td class="cell1">Idioma</td>
                        <td class="cell2">Nivel Hablado</td>
                        <td class="cell3">Nivel Escrito</td>
                        <td class="cell4">Acci&oacute;n</td>
                    </tr>
                </thead>
                <tbody>

        <?php if( $infoLang->num_rows==0 ){
                  $listInfoLang = array();
                  $listInfoLang[] = array('reprlang_id'=>0, 'lang_id'=>0, 'level_oral'=>'', 'level_write'=>'');
              }else{
                  $listInfoLang = $infoLang->result_array();
              }
        ?>
            <?php foreach( $listInfoLang as $row ){?>
                    <tr <?php if( $row['reprlang_id']!=0 ) echo 'id="trLang'.$row['reprlang_id'].'"'?>>
                        <td class="cell1"><?=form_dropdown('cboLangName', $comboLang, $row['lang_id'], ' tabindex="27" class="jq-data"');?></td>
                        <td class="cell2">
                            <select name="cboLangLevelOral" class="jq-data">
                                <option value="B&aacute;sico" <?=getval($row['level_oral'], 'selected="selected"', 'Básico')?>>B&aacute;sico</option>
                                <option value="Intermedio" <?=getval($row['level_oral'], 'selected="selected"', 'Intermedio')?>>Intermedio</option>
                                <option value="Avanzado" <?=getval($row['level_oral'], 'selected="selected"', 'Avanzado')?>>Avanzado</option>
                            </select>
                        </td>
                        <td class="cell3">
                            <select name="cboLangLevelWrite" class="jq-data">
                                <option value="B&aacute;sico" <?=getval($row['level_write'], 'selected="selected"', 'Básico')?>>B&aacute;sico</option>
                                <option value="Intermedio" <?=getval($row['level_write'], 'selected="selected"', 'Intermedio')?>>Intermedio</option>
                                <option value="Avanzado" <?=getval($row['level_write'], 'selected="selected"', 'Avanzado')?>>Avanzado</option>
                            </select>
                        </td>
                        <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalRepData.removeRow(this, 'lang')" /></td>
                    </tr>
            <?php }?>
                </tbody>
            </table>
            <br />
            <input type="button" value="Agregar otro" name="btn" onclick="PersonalRepData.addRow('#tblLang')" />
        </div>
    </div>

        <!-- ========== TRABAJO  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtTrabajo">Trabajo</label>
        <input type="text" name="txtTrabajo" id="txtTrabajo" tabindex="28" value="<?=$info['trabajo']?>" />
    </div>

    <!-- ========== PROFESION  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtProfesion">Profesi&oacute;n/Actividad</label>
        <input type="text" name="txtProfesion" id="txtProfesion" tabindex="28" value="<?=$info['profesion']?>" />
    </div>

    <!-- ========== LICENCIA FIFA  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtProfesion">Agente FIFA</label>
        <label class="label">
            <input type="radio" name="chkLic" id="chkLicSi" tabindex="28" <?=getval($info['agente_fifa'], 'checked', '1')?> onclick="LibForms.isChecked(this,'#contLic');" /> Si
        </label>
        <label class="label">
            <input type="radio" name="chkLic" id="chkLicNo" tabindex="28" <?=getval($info['agente_fifa'], 'checked', '0')?> onclick="LibForms.isChecked(this,'#contLic',1);" /> No
        </label>
        <span id="contLic" class="<?=$info['agente_fifa']?"":"hide";?>">
        <input type="text" name="txtNrolicencia" id="txtNrolicencia" tabindex="28" value="<?=$info['profesion']?>" />
        </span>
    </div>
    <!-- ========== DEPORTES  =========== -->
  
    <div id="contPaises" class="trow  ">

        <label class="label label-form">Deportes</label>
        <table id="tblDeportes" cellpadding="0" cellspacing="0">
            <tr>
                <td>Listado de deportes</td>
                <td>Acciones</td>
                <td>Deportes seleccionaods</td>
            </tr>
            <tr>
                <td>
  <?=form_dropdown('cboDep1', $comboDeportes, false, 'id="cboDep1" tabindex="10" size="10" class="jq-data"');?>
                </td>
                <td>
                    <input type="button" onclick="javascript:void(LibForms.addItem('cboDep1','cboDep2'))" value="Agregar" />
                    <input type="button" onclick="javascript:void(LibForms.removeItem('cboDep2'))" value="Quitar" />
                </td>
                <td><?=form_dropdown('cboDep2',  $infoDeportes->result_array(), false, 'id="cboDep2" tabindex="10" size="10" class="jq-data" multiple');?>
                </td>
            </tr>

        </table>
        <br />
    </div>
    <!-- ========== NIVEL  =========== -->
    <div class="trow">
        <label class="label label-form" for="txtProfesion">Nivel</label>
        <label class="label">
            <input type="radio" name="chkLevel" id="chkLevelAmateur" tabindex="28" <?=getval($info['level'], 'checked', '1')?> /> Amateur
        </label>
        <label class="label">
            <input type="radio" name="chkLevel" id="chkLevelProfesional" tabindex="28" <?=getval($info['level'], 'checked', '2')?> /> Profesional
        </label>
        <label class="label">
            <input type="radio" name="chkLevel" id="chkLevelAmbos" tabindex="28" <?=getval($info['level'], 'checked', '3')?> /> Ambos
        </label>
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
PersonalRepData.initializer();
-->
</script>