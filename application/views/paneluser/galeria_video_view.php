<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')=="success" ){?>
<div class="success">
    Los datos han sido guardados con &eacute;xito.
</div>
<?php }elseif( $this->session->flashdata('status')=="error" ){?>
<div class="error">
    Los datos no han podido ser guardados.
</div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/galeria_video/save/')?>" method="post" enctype="application/x-www-form-urlencoded">

    <div class="trow" id="output">
        
    </div>
    <div class="trow">
        <label class="label label2" for="txtImage"><span class="required">*</span>Enlace video</label>

        <div class="fleft">
            <div class="fleft">
                <input type="text" id="txtVideo" name="txtVideo" size="20" />&nbsp;
                <button id="btnUpload2" type="button" onclick="Videos.guardarEnlace();" class="float-left">Agregar</button>
            </div>
            <label class="clear fleft label-leyend">Enace youtube</label>
            <div id="ajaxupload-error" class="clear error span-7 hide">Este campo es obligatorio.</div>
        </div>
    </div>
</form>



<script type="text/javascript">
<!--
    Videos.initializer(<?=count($info['gallery'])>0 ? "true" : "false"?>);
-->
</script>