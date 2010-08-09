<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== APELLIDO =========== -->
    <div class="trow">
        <label for="txtLastName"><span class="asterisco">*</span>Apellido</label>
        <input type="text" name="txtLastName" id="txtLastName" tabindex="2" value="<?=$info['lastname']?>" />
    </div>
    <!-- ========== NOMBRE =========== -->
    <div class="trow">
        <label for="txtFirstName"><span class="asterisco">*</span>Nombre</label>
        <input type="text" name="txtFirstName" id="txtFirstName" tabindex="3" value="<?=$info['firstname']?>" />
    </div>
    <!-- ========== FOTO =========== -->
    <div class="trow">
        <label for="txtImage"><span class="asterisco">*</span>Foto</label>

        <?php if( !empty($info['image_thumb']) ){?>
        <img src="<?=UPLOAD_PATH_CV . $info['image_thumb']?>" alt="<?=$info['image_thumb']?>" width="<?=$info['image_width']?>" height="<?=$info['image_height']?>" class="jq-imgpreview" /><br />
        <?php }?>
        <input type="file" name="txtImage" id="txtImage" size="20" tabindex="4" />
    </div>
    <!-- ========== SEXO =========== -->
    <div class="trow">
        <label for="optSexF"><span class="asterisco">*</span>Sexo</label>
        <div class="fleft">
            <label for="optSexF"><input type="radio" name="optSex" id="optSexF" value="f" <?=getval($info['sex'], 'checked', 'f')?> />&nbsp;Femenino</label>&nbsp;&nbsp;
            <label for="optSexM"><input type="radio" name="optSex" id="optSexM" value="m" <?=getval($info['sex'], 'checked', 'm')?> />&nbsp;Masculino</label>
        </div>
    </div>
    <!-- ========== FECHA NACIMIENTO Y EDAD =========== -->
    <div class="trow">
        <label for="txtFnac"><span class="asterisco">*</span>Fecha de Nacimiento</label>
        <input type="text" name="txtFnac" id="txtFnac" tabindex="5" value="<?=$info['nacimiento']?>" /><br />
        <div id="age" class="<?=getval($info['age'], 'hide')?>"><b>Edad: <span><?=$info['age']?></span></b></div>
    </div>
    <!-- ========== ESTADO CIVIL =========== -->
    <div class="trow">
        <label for="cboEstadoCivil">Estado Civil</label>
        <select name="cboEstadoCivil" id="cboEstadoCivil" tabindex="6">
            <option value="Soltero/a" <?=getval($info['estado_civil'], 'selected="selected"', "Soltero/a")?>>Soltero/a</option>
            <option value="Casado/a" <?=getval($info['estado_civil'], 'selected="selected"', "Casado/a")?>>Casado/a</option>
            <option value="Viudo/a" <?=getval($info['estado_civil'], 'selected="selected"', "Viudo/a" )?>>Viudo/a</option>
            <option value="Divorciado/a" <?=getval($info['estado_civil'], 'selected="selected"', "Divorciado/a")?>>Divorciado/a</option>
        </select>
    </div>
    <!-- ========== TIPO DE DOCUMENTO =========== -->
    <div class="trow">
        <label for="cboTipoDoc">Tipo de Documento</label>
        <?=form_dropdown('cboTipoDoc', $comboTipoDoc, $info['documento_tipo'], 'id="cboTipoDoc" tabindex="7"');?>
        <input type="text" name="txtTipoDocOther" id="txtTipoDocOther" class="<?=getval($info['documento_tipo_other'], 'hide')?>" value="<?=$info['documento_tipo_other']?>" />
    </div>
    <!-- ========== NRO DOCUMENTO =========== -->
    <div class="trow">
        <label for="txtNumDoc">Nro. Documento</label>
        <input type="text" name="txtNumDoc" id="txtNumDoc" tabindex="8" value="<?=$info['documento_num']?>" />
    </div>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC. =========== -->
    <div class="trow">
        <label for="chkShowNroDoc">Mostrar mi n&uacute;mero de documento <input type="checkbox" name="chkShowNroDoc" id="chkShowNroDoc" value="1" tabindex="9" <?=getval($info['documento_show'], 'checked', 1)?> /></label>
    </div>
    <!-- ========== PAIS ACTUAL =========== -->
    <div class="trow">
        <label for="cboCurrentCountry"><span class="asterisco">*</span>Pa&iacute;s Actual</label>
        <?=form_dropdown('cboCurrentCountry', $comboCountry, $info['current_country'], 'id="cboCurrentCountry" tabindex="10" onchange="PersonalData.get_combo_states(this, \'#contCurrentStates\')"');?>
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA ACTUAL =========== -->
    <div id="contCurrentStates" class="trow <?=getval($info['current_state'], 'hide', 0)?>">
        <label for="cboCurrentStates"><span class="asterisco">*</span>Provincia Actual</label>
        <?php if( $info['current_state']!=0 ){
                echo form_dropdown('cboCurrentStates', $info['comboCurrentState'], $info['current_state'], 'id="cboCurrentStates" class="jq-select" tabindex="11"');
              }else{?>
                <select name="cboCurrentStates" id="cboCurrentStates" class="jq-select" tabindex="11"></select>
        <?php }?>
    </div>
    <!-- ========== CIUDAD ACTUAL =========== -->
    <div class="trow">
        <label for="txtCurrentCity"><span class="asterisco">*</span>Ciudad Actual</label>
        <input type="text" name="txtCurrentCity" id="txtCurrentCity" tabindex="12" value="<?=$info['current_city']?>" />
    </div>
    <!-- ========== CODIGO POSTAL ACTUAL =========== -->
    <div class="trow">
        <label for="txtCurrentZipCode">C&oacute;digo Postal Actual</label>
        <input type="text" name="txtCurrentZipCode" id="txtCurrentZipCode" tabindex="13" value="<?=$info['current_zipcode']?>" />
    </div>
    <!-- ========== PAIS ORIGEN =========== -->
    <div class="trow">
        <label for="cboOriginCountry">Pa&iacute;s Origen</label>
        <?php $comboCountry[''] = "&nbsp;";?>
        <?=form_dropdown('cboOriginCountry', $comboCountry, $info['origin_country'], 'id="cboOriginCountry" tabindex="14" onchange="PersonalData.get_combo_states(this, \'#contOriginStates\')"');?>
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA ORIGEN =========== -->
    <div id="contOriginStates" class="trow <?=getval($info['origin_state'], 'hide', 0)?>">
        <label for="cboOriginStates">Provincia Origen</label>
        <?php if( $info['origin_state']!=0 ){
                echo form_dropdown('cboOriginStates', $info['comboOriginState'], $info['origin_state'], 'id="cboOriginStates" class="jq-select" tabindex="15"');
              }else{?>
                <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
        <?php }?>
    </div>
    <!-- ========== CIUDAD ORIGEN =========== -->
    <div class="trow">
        <label for="txtOriginCity">Ciudad Origen</label>
        <input type="text" name="txtOriginCity" id="txtOriginCity" tabindex="16" value="<?=$info['origin_city']?>" />
    </div>
    <!-- ========== CODIGO POSTAL ORIGEN =========== -->
    <div class="trow">
        <label for="txtOriginZipCode">C&oacute;digo Postal Origen</label>
        <input type="text" name="txtOriginZipCode" id="txtOriginZipCode" tabindex="17" value="<?=$info['origin_zipcode']?>" />
    </div>
    <!-- ========== NACIONALIDAD=========== -->
    <div class="trow">
        <label for="txtNacionalidad"><span class="asterisco">*</span>Nacionalidad</label>
        <input type="text" name="txtNacionalidad" id="txtNacionalidad" tabindex="18" value="<?=$info['nacionalidad']?>" />
    </div>
    <!-- ========== PASAPORTE =========== -->
    <div class="trow">
        <label for="cboPassport"><span class="asterisco">*</span>Pasaporte</label>
        <?=form_dropdown('cboPassport', $comboPassport, $info['passport'], 'id="cboPassport" tabindex="19"');?>
    </div>
    <!-- ========== TELEFONO FIJO =========== -->
    <div class="trow">
        <label for="txtPhoneArea"><span class="asterisco">*</span>Tel&eacute;fono Fijo</label>
        <input type="text" name="txtPhoneArea" id="txtPhoneArea" tabindex="20" value="<?=$info['phone_area']?>" />
        <input type="text" name="txtPhoneCity" id="txtPhoneCity" tabindex="21" value="<?=$info['phone_city']?>" />
        <input type="text" name="txtPhoneNum" id="txtPhoneNum" tabindex="22" value="<?=$info['phone_num']?>" />
    </div>
    <!-- ========== CELULAR =========== -->
    <div class="trow">
        <label for="txtCeluArea">Celular/M&oacute;vil</label>
        <input type="text" name="txtCeluArea" id="txtCeluArea" tabindex="23" value="<?=$info['celu_area']?>" />
        <input type="text" name="txtCeluCity" id="txtCeluCity" tabindex="24" value="<?=$info['celu_city']?>" />
        <input type="text" name="txtCeluNum" id="txtCeluNum" tabindex="25" value="<?=$info['celu_num']?>" />
    </div>
    <!-- ========== SITIO WEB =========== -->
    <div class="trow">
        <label for="txtWebSite">Tu Sitio Web</label>
        <input type="text" name="txtWebSite" id="txtWebSite" tabindex="26" value="<?=$info['website']?>" />
    </div>
    <!-- ========== IDIOMAS =========== -->
    <div class="trow">
        <label>Idiomas</label>
        <table id="tblLang" cellpadding="0" cellspacing="0">
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
              $listInfoLang[] = array('deplang_id'=>0, 'lang_id'=>0, 'level_oral'=>'', 'level_write'=>'');
          }else{
              $listInfoLang = $infoLang->result_array();
          }
    ?>
        <?php foreach( $listInfoLang as $row ){?>
                <tr <?php if( $row['deplang_id']!=0 ) echo 'id="trLang'.$row['deplang_id'].'"'?>>
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
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalData.removeRow(this, 'lang')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="PersonalData.addRow('#tblLang')" />
    </div>

    <!-- ========== PROFESION / ACTIVIDAD =========== -->
    <div class="trow">
        <label for="txtProfesion">Profesi&oacute;n/Actividad</label>
        <input type="text" name="txtProfesion" id="txtProfesion" tabindex="28" value="<?=$info['profesion']?>" />
    </div>
    <!-- ========== ESTUDIOS =========== -->
    <div class="trow">
        <label for="txtEstudios">Estudios</label>
        <input type="text" name="txtEstudios" id="txtEstudios" tabindex="29" value="<?=$info['estudios']?>" />
    </div>
    <!-- ========== POSEE ELGUNA DISCAPACIDAD =========== -->
    <div class="trow">
        <label for="chkDisc">Posee alguna Discapacidad <input type="checkbox" name="chkDisc" id="chkDisc" value="1" tabindex="30" onclick="showhide(this, '#contDisc')" <?=getval($info['check_discapacidad'], 'checked', 1)?> /></label>
    </div>
    <!-- ========== DATOS DISCAPACIDAD =========== -->
    <div id="contDisc" class="trow <?=getval($info['check_discapacidad'], 'hide', 0)?>">
        <label>Discapacidad</label>
        <table id="tblDisc" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Tipo Discapacidad</td>
                    <td class="cell2">Detallar Discapacidad</td>
                    <td class="cell3">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php if( $infoDisc->num_rows==0 ){
              $listInfoDisc = array();
              $listInfoDisc[] = array('disc_id'=>0, 'type'=>'', 'detalle'=>'');
          }else{
              $listInfoDisc = $infoDisc->result_array();
          }
    ?>
        <?php foreach( $listInfoDisc as $row ){?>
                <tr <?php if( $row['disc_id']!=0 ) echo 'id="trDisc'.$row['disc_id'].'"'?>>
                    <td class="cell1"><?=form_dropdown('cboDiscTipo', $comboTipoDisc, $row['type'], ' tabindex="31" class="jq-data"');?></td>
                    <td class="cell2"><input type="text" name="txtDiscDetalle" value="<?=$row['detalle']?>" class="jq-data" /></td>
                    <td class="cell3"><input type="button" value="Eliminar" name="btn" onclick="PersonalData.removeRow(this, 'disc')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="PersonalData.addRow('#tblDisc', 4)" />
    </div>

    <div class="trow">
        <p><input type="submit" value="Guardar" /></p>
    </div>

    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="filename_image_old" value="<?=$info['image_thumb']?>" />
</form>

<script type="text/javascript">
<!--
    PersonalData.initializer();
-->
</script>