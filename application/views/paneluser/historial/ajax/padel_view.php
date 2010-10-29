<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div class="trow">
        <label class="label label-form" for="chkIzquierda"><span class="required">*</span>Mano h&aacute;bil</label>
        <label class="label" for="chkPadelIzquierda">
            <input type="radio" name="chkPadelMano" id="chkPadelIzquierda" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "i")?> /> Izquierda
        </label>
        <label class="label" for="chkPadelDerecha">
            <input type="radio" name="chkPadelMano" id="chkPadelDerecha" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "d")?> /> Derecha
        </label>
    </div>


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
        <label class="label label-form" for="txtPala"><span class="required">*</span>Pala f&iacute;sico</label>
        <input type="text" name="txtPala" id="txtPala" class="wsize2" tabindex="2" value="<?=$info['pala'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtCompaniero"><span class="required">*</span>Compa&ntilde;ero de equipo</label>
        <input type="text" name="txtCompaniero" id="txtCompaniero" class="wsize2" tabindex="2" value="<?=$info['companiero'] ?>" />
    </div>


    <div class="trow "
        <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
        <?=form_dropdown('cboPosicion', $cboPosicion, $info['posicion'], 'id="cboPosicion" tabindex="1" ');?>
    </div>

    <div class="trow "
        <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
        <?=form_dropdown('cboModalidad', $cboModalidad, $info['modalidad'], 'id="cboModalidad" tabindex="1" ');?>
    </div>





