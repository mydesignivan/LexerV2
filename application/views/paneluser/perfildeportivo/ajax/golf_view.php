<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div class="trow">
        <label class="label label-form" for="txtLicencia"><span class="required">*</span>Licencia</label>
        <input type="text" name="txtLicencia" id="txtLicencia" class="wsize2" tabindex="2" value="<?=$info['licencia'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtHandicap"><span class="required">*</span>Handicap</label>
        <input type="text" name="txtHandicap" id="txtHandicap" class="wsize2" tabindex="2" value="<?=$info['handicap'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtCategoria"><span class="required">*</span>Categoria</label>
        <input type="text" name="txtCategoria" id="txtCategoria" class="wsize2" tabindex="2" value="<?=$info['categoria'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
        <input type="text" name="txtEntrenador" id="txtEntrenador" class="wsize2" tabindex="2" value="<?=$info['entrenador'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtEquipo"><span class="required">*</span>Equipo</label>
        <input type="text" name="txtEquipo" id="txtEquipo" class="wsize2" tabindex="2" value="<?=$info['equipo'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtNumTorneos"><span class="required">*</span>N&uacute;mero de torneos</label>
        <input type="text" name="txtNumTorneos" id="txtNumTorneos" class="wsize2" tabindex="2" value="<?=$info['nro_torneos'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtGanancias"><span class="required">*</span>Ganancias</label>
        <input type="text" name="txtGanancias" id="txtGanancias" class="wsize2" tabindex="2" value="<?=$info['ganancias'] ?>" />
    </div>









