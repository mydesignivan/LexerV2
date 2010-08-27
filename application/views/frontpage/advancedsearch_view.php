<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<form id="form1" action="<?=site_url('/advancedsearch/');?>" method="post" enctype="application/x-www-form-urlencoded">
    <div class="trow">
        <label class="label label-advsearch" for="cboCategory">Buscar como</label>
        <select name="cboUserType">
            <option value="<?=TBL_USERS_DEP?>">Deportista</option>
            <option value="<?=TBL_USERS_CLUB?>">Club</option>
            <option value="<?=TBL_USERS_REPR?>">Representante</option>
            <option value="<?=TBL_USERS_SPONSORS?>">Sponsors</option>
            <option value="<?=TBL_USERS_TRAINER?>">Entrenador</option>
            <option value="<?=TBL_USERS_PREPFIS?>">Preparador F&iacute;sico</option>
        </select>
    </div>
    <div class="trow">
        <label class="label label-advsearch" for="cboSport">Deporte</label>
        <select name="cboSport">
            <option value="">Seleccione un Deporte</option>
        </select>
    </div>
    <div class="trow">
        <label class="label label-advsearch" for="txtName">Apellido/s y/o Nombre/s</label>
        <input type="text" name="txtName" id="txtName" class="input-advsearch" />
    </div>
    <div class="trow">
        <label class="label label-advsearch" for="cboSport">Peso</label>
        <input type="text" name="txtPeso" id="txtPeso" class="input-advsearch" />
        <div id="slider-range-peso"></div>
    </div>

    <hr style="width:530px" />

    <div class="trow" style="width:530px">
        <button type="submit" name="btnSubmit" class="fright button-small">Buscar</button>
    </div>
</form>

<script type="text/javascript">
<!--
    Advsearch.initializer();
-->
</script>