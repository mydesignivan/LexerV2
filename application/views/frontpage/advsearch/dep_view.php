<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- ========== APELLIDO/NOMBRE =========== -->
<div class="trow">
    <label class="label label-advsearch" for="txtName">Apellido/s y/o Nombre/s</label>
    <input type="text" name="txtName" id="txtName" class="input-advsearch" />
</div>
<!-- ========== DEPORTE =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboSport">Deporte</label>
    <select name="cboSport" id="cboSport">
        <option value=""></option>
    </select>
</div>
<!-- ========== PESO =========== -->
<div class="trow">
    <label class="label label-advsearch">Peso</label>
    <div class="fleft align-center">
        <div id="slider-range-peso" style="width:290px;"></div>
        <span></span>
    </div>
</div>
<!-- ========== ALTURA =========== -->
<div class="trow">
    <label class="label label-advsearch">Altura</label>
    <div class="fleft align-center">
        <div id="slider-range-altura" style="width:290px;"></div>
        <span></span>
    </div>
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
<!-- ========== POSICION/DISIPLINA =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboPosition">Posici&oacute;n Disiplina</label>
    <select name="cboPosition" id="cboPosition">
        <option value=""></option>
    </select>
</div>
<!-- ========== PIERNA/MANO HABIL =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboPiernaManoHabil">Pierna/Mano H&aacute;bil</label>
    <select name="cboPiernaManoHabil" id="cboPiernaManoHabil">
        <option value="izquierda">Izquierda</option>
        <option value="derecha">Derecha</option>
        <option value="ambas" selected>Ambas</option>
    </select>
</div>
<!-- ========== CLUB =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboClub">Club</label>
    <select name="cboClub" id="cboClub">
        <option value=""></option>
    </select>
</div>
<!-- ========== CATEGORIA =========== -->
<div class="trow">
    <label class="label label-advsearch" for="cboCategorie">Categor&iacute;a</label>
    <select name="cboCategorie" id="cboCategorie">
        <option value=""></option>
    </select>
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
    <label class="label label-advsearch" for="cboCity">Ciudad</label>
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
<!-- ========== CHECKBOX =========== -->
<div class="trow" style="margin-bottom:20px">
    <label class="label label-advsearch">&nbsp;</label>
    <div class="fleft">
        <label class="label"><input type="checkbox" name="chkRepr" value="1" />Con representante</label><br />
        <label class="label"><input type="checkbox" name="chkPhoto" value="1" />Con fotos</label>
    </div>
    <div class="fleft">
        <label class="label"><input type="checkbox" name="chkMovie" value="1" />Con videos</label><br />
        <label class="label"><input type="checkbox" name="chkHistDep" value="1" />Con historial deportivo</label>
    </div>
</div>
