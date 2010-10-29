<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div class="trow">
        <label class="label label-form" for="txtInicio"><span class="required">*</span>Inicio de pr&aacute;ctica</label>
        <input type="text" name="txtInicio" id="txtInicio" class="wsize2" tabindex="2" value="<?=$info['inicio'] ?>" />
    </div>

    <div>
        <div class="trow "
            <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
            <?=form_dropdown('cboModalidad', $cboModalidad, $info['modalidad'], 'id="cboModalidad" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['modalidad']<0?"":"hide"?>">
            <label class="label label-form" for="txtModalidadOther"><span class="required">*</span>Otra modalidad</label>
            <input type="text" name="txtModalidadOther" id="txtModalidadOther" class="wsize2" tabindex="2" value="<?=$info['modalidad_other'] ?>" />
        </div>
    </div>
    <div class="trow">
        <label class="label label-form" for="txtCategoriar"><span class="required">*</span>Categoria</label>
        <input type="text" name="txtCategoriar" id="txtCategoriar" class="wsize2" tabindex="2" value="<?=$info['categoria'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
        <input type="text" name="txtEntrenador" id="txtEquipo" class="wsize2" tabindex="2" value="<?=$info['entrenador'] ?>" />
    </div>
    <div>
        <div class="trow "
            <label class="label label-form" for="cboSeleccionado"><span class="required">*</span>Seleccionado</label>
            <?=form_dropdown('cboSeleccionado', $cboSeleccionado, $info['seleccionado'], 'id="cboSeleccionado" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['seleccionado']<0?"":"hide"?>">
            <label class="label label-form" for="txtSeleccionadoOther"><span class="required">*</span>Especificar seleccion</label>
            <input type="text" name="txtSeleccionadoOther" id="txtSeleccionadoOther" class="wsize2" tabindex="2" value="<?=$info['seleccionado_other'] ?>" />
        </div>
    </div>







