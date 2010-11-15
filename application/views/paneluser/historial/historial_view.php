<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

  <div class="trow">
        <label class="label label-form " for="cboDeporte"><span class="required">*</span>Deporte</label>
        <?=form_dropdown('cboDeporte', $comboDeportes, @$info[0]['sports_id'], 'id="cboDeporte" tabindex="1"');?>

        <input type="button" id="btnSelSport" onclick="Historial.seleccionDeporte(this);" value="Mostrar">
    </div>



<form id="form1" action="<?=site_url('/paneluser/historial/save');?>" method="post" enctype="multipart/form-data">
    <div class="trow">
        <div id="tabs_div_ajax">
        </div>
    </div>

    <!-- ========== Deportes =========== -->

    <?  foreach($info as $nf){   ?>
    <input type="hidden" class="historial_id" value="<?=@$nf['historial_id']?>">
    <? } ?>


    <input type="hidden" name="historial_id" id="historial_id" value="">
    <input type="hidden" name="historial_deporte_id" id="historial_deporte_id">
    <input type="submit" value="Guardar" id="btnGuardar"  />
</form>



<script type="text/javascript">
<!--
    Historial.initializer();
-->
</script>