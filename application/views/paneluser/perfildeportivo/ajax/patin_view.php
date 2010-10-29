<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->



    <div class="trow ">
        <label class="label label-form" for="txtDesde"><span class="required">*</span>Patinando desde</label>
        <input type="text" name="txtDesde" id="txtDesde" class="wsize2" tabindex="2" value="<?=$info['patinando_desde'] ?>" />
    </div>



    <div>
        <input type="hidden" id="list" name="list" value="<?=$list?>">
        <div class="trow">
            <label class="label label-form" for="chkIzquierda"><span class="required">*</span>Categoria</label>
            <label class="label" for="chkPatinArtistico">
                <input type="radio" name="chkPatinModalidad" id="chkPatinArtistico" class="wsize2" value="1" tabindex="2" <?=getval($info['categoria'], 'checked', "1")?> onchange="PerfilDeportivo.chkCatPatin(this);" /> Art&iacute;stico
            </label>
            <label class="label" for="chkPatinVelocidad">
                <input type="radio" name="chkPatinModalidad" id="chkPatinVelocidad" class="wsize2" value="2" tabindex="2" <?=getval($info['categoria'], 'checked', "2")?> onchange="PerfilDeportivo.chkCatPatin(this);" /> de Velocidad
            </label>
        </div>
        <div class="trow hide ">

        </div>
        <div class="trow <?=$info['categoria']<0?"":"hide"?>" id="div_otra_categoria">
            <label class="label label-form" for="txtCategoriaOther"><span class="required">*</span>Otra categoria</label>
            <input type="text" name="txtCategoriaOther" id="txtCategoriaOther" class="wsize2" tabindex="2" value="<?=$info['categoria_other'] ?>" />
        </div>
    </div>



    <div class="trow ">
        <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador actual</label>
        <input type="text" name="txtEntrenador" id="txtEntrenador" class="wsize2" tabindex="2" value="<?=$info['entrenador'] ?>" />
    </div>



    <div class="trow ">
        <label class="label label-form" for="txtFisico"><span class="required">*</span>Entrenamiento f&iacute;sico</label>
        <input type="text" name="txtFisico" id="txtFisico" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_fisico'] ?>" />
    </div>


    <div class="trow ">
        <label class="label label-form" for="txtTecnico"><span class="required">*</span>Entrenamiento T&eacute;cnico</label>
        <input type="text" name="txtTecnico" id="txtTecnico" class="wsize2" tabindex="2" value="<?=$info['entrenamiento_tecnico'] ?>" />
    </div>







