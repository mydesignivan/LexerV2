<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

  <div class="trow">
        <label class="label label-form " for="cboDeporte"><span class="required">*</span>Deporte</label>
        <?=form_dropdown('cboDeporte', $comboDeportes, @$info['sports_id'], 'id="cboDeporte" tabindex="1"');?>

        <input type="button" id="btnSelSport" onclick="Historial.seleccionDeporte(this);" value="Mostrar">

    </div>
<div id="tabs_div_ajax">

</div>






<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">
    <!-- ========== Deportes =========== -->




    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="json" id="json">
    <input type="hidden" name="historial_id" id="historial_id" value="<?=@$info['historial_id']?>">
    <input type="hidden" name="historial_deporte_id" id="historial_deporte_id" value="<?=@$info['historial_deporte_id']?>">
</form>



<script type="text/javascript">
<!--
    Historial.initializer();
-->
</script>