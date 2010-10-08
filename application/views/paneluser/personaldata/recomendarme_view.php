<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/recomendarme/send');?>" method="post" enctype="multipart/form-data">

    <!-- ========== Mail =========== -->
    <div class="trow">
        <label class="label label-form" for="txtEmail"><span class="required">*</span>mail: </label>
        <input type="text" name="txtEmail" id="txtLastName" class="wsize2" tabindex="1" value="" />
    </div>
    <!-- ========== Asunto =========== -->
    <div class="trow">
        <label class="label label-form" for="txtAsunto"><span class="required">*</span>Asunto</label>
        <input type="text" name="txtAsunto" id="txtFirstName" class="wsize2" tabindex="2" value="" />
    </div>
    <!-- ========== Mensaje =========== -->
    <div class="trow">
        <label class="label label-form" for="txtMensaje"><span class="required">*</span>Mensaje</label>
        <textarea name="txtMensaje" id="txtMensaje" name="txtMensaje" class="wsize2" tabindex="3"></textarea>
    </div>

    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="10" class="fright">Enviar</button>
    </div>

    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="json" id="json">
</form>


<script type="text/javascript">
<!--
    Recomendacion.initializer();
-->
</script>