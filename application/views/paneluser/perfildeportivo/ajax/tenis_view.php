<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div class="trow">
        <label class="label label-form" for="chkTenisIzquierda"><span class="required">*</span>Mano h&aacute;bil</label>
        <label class="label" for="chkTenisIzquierda">
            <input type="radio" name="chkTenisMano" id="chkTenisIzquierda" class="wsize2" tabindex="2" value="i" <?=getval($info['mano_habil'], 'checked', "i")?> /> Izquierda
        </label>
        <label class="label" for="chkTenisDerecha">
            <input type="radio" name="chkTenisMano" id="chkTenisDerecha" class="wsize2" tabindex="2" value='d' <?=getval($info['mano_habil'], 'checked', "d")?> /> Derecha
        </label>
        <label class="label" for="chkTenisAmbos">
            <input type="radio" name="chkTenisMano" id="chkTenisAmbos" class="wsize2" tabindex="2" value='a' <?=getval($info['mano_habil'], 'checked', "a")?> /> Ambidiestro
        </label>
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


    <div class="trow ">
        <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
        <?=form_dropdown('cboModalidad', $cboModalidad, $info['modalidad'], 'id="cboModalidad" tabindex="1" ');?>
    </div>


    <div class="trow ">
        <label class="label label-form" for="txtProfesional"><span class="required">*</span>Profesional desde </label>
        <input type="text" name="txtProfesional" id="txtProfesional" class="wsize2" tabindex="2" value="<?=$info['profesional_desde'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtFisico"><span class="required">*</span>Entrenamiento f&iacute;sico</label>
        <input type="text" name="txtFisico" id="txtFisico" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_fisico'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtGym"><span class="required">*</span>Entrenamiento gimnasio</label>
        <input type="text" name="txtGym" id="txtGym" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_gimnasio'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtTactico"><span class="required">*</span>Entrenamiento T&aacute;ctico</label>
        <input type="text" name="txtTactico" id="txtTactico" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_tactico'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtTecnico"><span class="required">*</span>Entrenamiento T&eacute;cnico</label>
        <input type="text" name="txtTecnico" id="txtTecnico" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_tecnico'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtGanancia"><span class="required">*</span>Ganancias en U$S</label>
        <input type="text" name="txtGanancia" id="txtGanancia" class="wsize2" tabindex="2" value="<?=$info['ganancia'] ?>" />
    </div>
