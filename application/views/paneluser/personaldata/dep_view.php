<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== APELLIDO =========== -->
    <div class="trow">
        <label for="txtLastName"><span class="asterisco">*</span>Apellido</label>
        <input type="text" name="txtLastName" id="txtLastName" tabindex="2" />
    </div>
    <!-- ========== NOMBRE =========== -->
    <div class="trow">
        <label for="txtFirstName"><span class="asterisco">*</span>Nombre</label>
        <input type="text" name="txtFirstName" id="txtFirstName" tabindex="3" />
    </div>
    <!-- ========== FOTO =========== -->
    <div class="trow">
        <label for="txtImage"><span class="asterisco">*</span>Foto</label>
        <input type="file" name="txtImage" id="txtImage" size="20" tabindex="4" />
    </div>
    <!-- ========== FECHA NACIMIENTO Y EDAD =========== -->
    <div class="trow">
        <label for="txtFnac"><span class="asterisco">*</span>Fecha de Nacimiento</label>
        <input type="text" name="txtFnac" id="txtFnac" tabindex="5" /><br />
        <div id="age" class="hide"><b>Edad: <span></span></b></div>
    </div>
    <!-- ========== ESTADO CIVIL =========== -->
    <div class="trow">
        <label for="cboEstadoCivil">Estado Civil</label>
        <select name="cboEstadoCivil" id="cboEstadoCivil" tabindex="6">
            <option value="Soltero/a">Soltero/a</option>
            <option value="Casado/a">Casado/a</option>
            <option value="Viudo/a">Viudo/a</option>
            <option value="Divorciado/a">Divorciado/a</option>
        </select>
    </div>
    <!-- ========== TIPO DE DOCUMENTO =========== -->
    <div class="trow">
        <label for="cboTipoDoc">Tipo de Documento</label>
        <?=form_dropdown('cboTipoDoc', $comboTipoDoc, '', 'id="cboTipoDoc" tabindex="7"');?>
    </div>
    <!-- ========== NRO DOCUMENTO =========== -->
    <div class="trow">
        <label for="txtNumDoc">Nro. Documento</label>
        <input type="text" name="txtNumDoc" id="txtNumDoc" tabindex="8" />
    </div>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC. =========== -->
    <div class="trow">
        <label for="chkShowNroDoc">Mostrar mi n&uacute;mero de documento <input type="checkbox" name="chkShowNroDoc" id="chkShowNroDoc" value="1" tabindex="9" /></label>
    </div>
    <!-- ========== PAIS ACTUAL =========== -->
    <div class="trow">
        <label for="cboCurrentCountry"><span class="asterisco">*</span>Pa&iacute;s Actual</label>
        <?=form_dropdown('cboCurrentCountry', $comboCountry, '', 'id="cboCurrentCountry" tabindex="10" onchange="PersonalData.get_combo_states(this, \'#contCurrentStates\')"');?>
    </div>
    <!-- ========== PROVINCIA ACTUAL =========== -->
    <div id="contCurrentStates" class="trow hide">
        <label for="cboCurrentStates"><span class="asterisco">*</span>Provincia Actual</label>
        <select name="cboCurrentStates" id="cboCurrentStates" class="jq-select" tabindex="11"></select>
    </div>
    <!-- ========== CIUDAD ACTUAL =========== -->
    <div class="trow">
        <label for="txtCurrentCity"><span class="asterisco">*</span>Ciudad Actual</label>
        <input type="text" name="txtCurrentCity" id="txtCurrentCity" tabindex="12" />
    </div>
    <!-- ========== CODIGO POSTAL ACTUAL =========== -->
    <div class="trow">
        <label for="txtCurrentZipCode">C&oacute;digo Postal Actual</label>
        <input type="text" name="txtCurrentZipCode" id="txtCurrentZipCode" tabindex="13" />
    </div>
    <!-- ========== PAIS ORIGEN =========== -->
    <div class="trow">
        <label for="cboOriginCountry">Pa&iacute;s Origen</label>
        <?=form_dropdown('cboOriginCountry', $comboCountry, '', 'id="cboOriginCountry" tabindex="14" onchange="PersonalData.get_combo_states(this, \'#contOriginStates\')"');?>
    </div>
    <!-- ========== PROVINCIA ORIGEN =========== -->
    <div id="contOriginStates" class="trow hide">
        <label for="cboOriginStates">Provincia Origen</label>
        <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
    </div>
    <!-- ========== CIUDAD ORIGEN =========== -->
    <div class="trow">
        <label for="txtOriginCity">Ciudad Origen</label>
        <input type="text" name="txtOriginCity" id="txtOriginCity" tabindex="16" />
    </div>
    <!-- ========== CODIGO POSTAL ORIGEN =========== -->
    <div class="trow">
        <label for="txtOriginZipCode">C&oacute;digo Postal Origen</label>
        <input type="text" name="txtOriginZipCode" id="txtOriginZipCode" tabindex="17" />
    </div>
    <!-- ========== CODIGO NACIONALIDAD=========== -->
    <div class="trow">
        <label for="txtNacionalidad"><span class="asterisco">*</span>Nacionalidad</label>
        <input type="text" name="txtNacionalidad" id="txtNacionalidad" tabindex="18" />
    </div>
    <!-- ========== PASAPORTE =========== -->
    <div class="trow">
        <label for="cboPassport"><span class="asterisco">*</span>Pasaporte</label>
        <?=form_dropdown('cboPassport', $comboPassport, '', 'id="cboPassport" tabindex="19"');?>
    </div>
    <!-- ========== TELEFONO FIJO =========== -->
    <div class="trow">
        <label for="txtPhoneArea"><span class="asterisco">*</span>Tel&eacute;fono Fijo</label>
        <input type="text" name="txtPhoneArea" id="txtPhoneArea" tabindex="20" />
        <input type="text" name="txtPhoneCity" id="txtPhoneCity" tabindex="21" />
        <input type="text" name="txtPhoneNum" id="txtPhoneNum" tabindex="22" />
    </div>
    <!-- ========== CELULAR =========== -->
    <div class="trow">
        <label for="txtCeluArea">Celular/M&oacute;vil</label>
        <input type="text" name="txtCeluArea" id="txtCeluArea" tabindex="23" />
        <input type="text" name="txtCeluCity" id="txtCeluCity" tabindex="24" />
        <input type="text" name="txtCeluNum" id="txtCeluNum" tabindex="25" />
    </div>
    <!-- ========== SITIO WEB =========== -->
    <div class="trow">
        <label for="txtWebSite">Tu Sitio Web</label>
        <input type="text" name="txtWebSite" id="txtWebSite" tabindex="26" />
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
                <tr>
                    <td class="cell1"><?=form_dropdown('cboLangName[]', $comboLang, ' tabindex="27"');?></td>
                    <td class="cell2">
                        <select name="cboLangLevelOral[]">
                            <option value="B&aacute;sico">B&aacute;sico</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </td>
                    <td class="cell3">
                        <select name="cboLangLevelWrite[]">
                            <option value="B&aacute;sico">B&aacute;sico</option>
                            <option value="Intermedio">Intermedio</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="JTable.remove(this)" /></td>
                </tr>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="JTable.add('#tblLang')" />
    </div>

    <!-- ========== PROFESION / ACTIVIDAD =========== -->
    <div class="trow">
        <label for="txtProfesion">Profesi&oacute;n/Actividad</label>
        <input type="text" name="txtProfesion" id="txtProfesion" tabindex="28" />
    </div>
    <!-- ========== ESTUDIOS =========== -->
    <div class="trow">
        <label for="txtEstudios">Estudios</label>
        <input type="text" name="txtEstudios" id="txtEstudios" tabindex="29" />
    </div>
    <!-- ========== POSEE ELGUNA DISCAPACIDAD =========== -->
    <div class="trow">
        <label for="chkDisc">Posee alguna Discapacidad <input type="checkbox" name="chkDisc" id="chkDisc" value="1" tabindex="30" onclick="showhide(this, '#contDisc')" /></label>
    </div>
    <!-- ========== DATOS DISCAPACIDAD =========== -->
    <div id="contDisc" class="trow hide">
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
                <tr>
                    <td class="cell1"><?=form_dropdown('cboDiscTipo[]', $comboTipoDisc, ' tabindex="31"');?></td>
                    <td class="cell2"><input type="text" name="txtDiscDetalle[]" /></td>
                    <td class="cell3"><input type="button" value="Eliminar" name="btn" onclick="JTable.remove(this)" /></td>
                </tr>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="JTable.add('#tblDisc')" />
    </div>

    <div class="trow">
        <p><input type="submit" value="Guardar" /></p>
    </div>
    
</form>

<script type="text/javascript">
<!--
    PersonalData.initializer();
-->
</script>