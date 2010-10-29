<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->



    <div>
        <div class="trow "
            <label class="label label-form" for="cboGolpe"><span class="required">*</span>Mejor Golpe</label>
            <?=form_dropdown('cboGolpe', $cboGolpe, $info['mejor_golpe'], 'id="cboGolpe" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['mejor_golpe']<0?"":"hide"?>">
            <label class="label label-form" for="txtGolpeOther"><span class="required">*</span>Otra categoria</label>
            <input type="text" name="txtGolpeOther" id="txtCategoriaOther" class="wsize2" tabindex="2" value="<?=$info['mejor_golpe_other'] ?>" />
        </div>
    </div>




    <div class="trow ">
        <label class="label label-form" for="txtPrimera"><span class="required">*</span>Debut En Primera Divisi&oacute;n</label>
        <input type="text" name="txtPrimera" id="txtPrimera" class="wsize2" tabindex="2" value="<?=$info['debut_primera'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtInternacional"><span class="required">*</span>Debut Internacional</label>
        <input type="text" name="txtInternacional" id="txtInternacional" class="wsize2" tabindex="2" value="<?=$info['debut_internacional'] ?>" />
    </div>


    <div class="trow">
        <div class="trow ">
            <label class="label label-form" for="cboSeleccionado"><span class="required">*</span>Seleccionado</label>
            <?=form_dropdown('cboSeleccionado', $cboSeleccionado, $info['seleccionado'], 'id="cboSeleccionado" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['seleccionado']<0?"":"hide"?>">
            <label class="label label-form" for="txtSeleccionadoOther"><span class="required">*</span>Especificar seleccion</label>
            <input type="text" name="txtSeleccionadoOther" id="txtSeleccionadoOther" class="wsize2" tabindex="2" value="<?=$info['seleccionado_other'] ?>" />
        </div>
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




    <div class="trow "
        <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
        <?=form_dropdown('cboPosicion', $cboPosicion, $info['posicion'], 'id="cboPosicion" tabindex="1" ');?>
    </div>





