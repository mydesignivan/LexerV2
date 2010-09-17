<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<form id="form1" action="<?=site_url('/advancedsearch/search/');?>" method="post" enctype="application/x-www-form-urlencoded">
    <!-- ========== BUSCAR COMO =========== -->
    <div class="trow">
        <label class="label label-advsearch" for="cboCategory">Buscar como</label>
        <select name="cboUserType" id="cboCategory" onchange="Advsearch.showform(this)">
            <option value="dep">Deportista</option>
            <option value="club">Club</option>
            <option value="repr">Representante</option>
            <option value="sponsor">Sponsors</option>
            <option value="entrenador">Entrenador</option>
            <option value="prepfisico">Preparador F&iacute;sico</option>
        </select>
    </div>

    <div id="cont">
    <?php require('advsearch/dep_view.php');?>
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