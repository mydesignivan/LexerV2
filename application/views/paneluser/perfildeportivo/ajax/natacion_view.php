<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->
    <div>
        <div class="trow "
            <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
            <?=form_dropdown('cboModalidad', $cboModalidad, $info['modalidad'], 'id="cboModalidad" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
    </div>

    <div class="trow">
        <label class="label label-form" for="txtTiempoNatacion"><span class="required">*</span>Nadando Desde</label>
        <input type="text" name="txtTiempoNatacion" id="txtTiempoNatacion" class="wsize2" tabindex="2" value="<?=$info['nadador_desde'] ?>" />
    </div>

    <div class="trow">
        <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
        <input type="text" name="txtEntrenador" id="txtEntrenador" class="wsize2" tabindex="2" value="<?=$info['entrenador'] ?>" />
    </div>

    <div>
         <div class="trow">
             <label class="label label-form" for="chkSeleccionado"><span class="required">*</span>Ha sido seleccionado</label>
             <input type="checkbox" id="chkSeleccionado" name="chkSeleccionado" <?=$info['seleccionado']?"checked":""?> onclick="LibForms.isChecked(this)">
         </div>

        <div class="<?=$info['seleccionado']?"":"hide"?>">
            <div class="trow ">
                <label class="label label-form" for="cboSeleccionado"><span class="required">*</span>Seleccionado</label>
                <?=form_dropdown('cboSeleccionado', $cboSeleccionado, $info['seleccionado'], 'id="cboSeleccionado" tabindex="1"  onchange="LibForms.isOther(this);"');?>
            </div>
            <div class="trow <?=$info['seleccionado']<0?"":"hide"?>">
                <label class="label label-form" for="txtSeleccionadoOther"><span class="required">*</span>Especificar seleccion</label>
                <input type="text" name="txtSeleccionadoOther" id="txtSeleccionadoOther" class="wsize2" tabindex="2" value="<?=$info['seleccionado_other'] ?>" />
            </div>
        </div>
    </div>






