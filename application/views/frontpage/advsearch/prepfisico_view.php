<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- ========== APELLIDO/NOMBRE =========== -->
<div class="trow">
    <label class="label label-advsearch" for="txtName">Apellido/s y/o Nombre/s</label>
    <input type="text" name="txtName" id="txtName" class="input-advsearch" />
</div>
<!-- ========== EDAD =========== -->
<div class="trow">
    <label class="label label-advsearch">Edad</label>
    <div class="fleft align-center">
        <div id="slider-range-edad" style="width:290px;"></div>
        <span></span>
    </div>
</div>
<!-- ========== SEXO =========== -->
<div class="trow">
    <label class="label label-advsearch">Sexo</label>
    <label class="label"><input type="radio" name="optSex" value="m">Masculino</label>
    <label class="label"><input type="radio" name="optSex" value="f">Femenino</label>
    <label class="label"><input type="radio" name="optSex" value="a" checked>Cualquiera</label>
</div>
<!-- ========== NIVEL =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboLevel">Nivel</label>
    <select name="cboLevel" id="cboLevel">
        <option value=""></option>
    </select>
</div>
<!-- ========== PAIS =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboCountry">Pa&iacute;s</label>
    <select name="cboCountry" id="cboCountry">
        <option value=""></option>
    </select>
</div>
<!-- ========== PROVINCIA =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboStates">Provincia</label>
    <select name="cboStates" id="cboStates">
        <option value=""></option>
    </select>
</div>
<!-- ========== CIUDAD =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboStates">Ciudad</label>
    <select name="cboCity" id="cboCity">
        <option value=""></option>
    </select>
</div>
<!-- ========== PASAPORTE =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboPassport">Pasaporte</label>
    <select name="cboPassport" id="cboPassport">
        <option value=""></option>
    </select>
</div>
<!-- ========== IDIOMA =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboLang">Idioma</label>
    <select name="cboLang" id="cboLang">
        <option value=""></option>
    </select>
</div>
<!-- ========== DEPORTE =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboSport">Deporte</label>
    <select name="cboSport" id="cboSport">
        <option value=""></option>
    </select>
</div>
<!-- ========== CHECKBOX =========== -->
<div class="trow" style="margin-bottom:20px">
    <label class="label label-advsearch">&nbsp;</label>
    <div class="fleft">
        <label class="label"><input type="checkbox" name="chkExpLaboral" value="1" />Experiencia laboral</label><br />
        <label class="label"><input type="checkbox" name="chkExpDep" value="1" />Experiencia deportiva</label><br />
        <label class="label"><input type="checkbox" name="chkPhoto" value="1" />Docencia</label>
    </div>
    <div class="fleft">
        <label class="label"><input type="checkbox" name="chkPalmares" value="1" />Palmares</label><br />
        <label class="label"><input type="checkbox" name="chkMovie" value="1" />Con videos</label><br />
        <label class="label"><input type="checkbox" name="chkPhoto" value="1" />Con fotos</label>
    </div>
</div>
