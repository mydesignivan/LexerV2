<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div>
        <div class="trow "
            <label class="label label-form" for="cboDivision"><span class="required">*</span>Divisi&oacute;n</label>
            <?=form_dropdown('cboDivision', $cboDivision, $info['division'], 'id="cboDivision" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['division']<0?"":"hide"?>">
            <label class="label label-form" for="txtDivisionOther"><span class="required">*</span>Otra divisi&oacute;n</label>
            <input type="text" name="txtDivisionOther" id="txtDivisionOther" class="wsize2" tabindex="2" value="<?=$info['division_other'] ?>" />
        </div>
    </div>
    
    <div>
        <div class="trow "
            <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>
            <?=form_dropdown('cboCategoria', $cboCategoria, $info['categoria'], 'id="cboCategoria" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['categoria']<0?"":"hide"?>">
            <label class="label label-form" for="txtCategoriaOther"><span class="required">*</span>Otra categoria</label>
            <input type="text" name="txtCategoriaOther" id="txtCategoriaOther" class="wsize2" tabindex="2" value="<?=$info['categoria_other'] ?>" />
        </div>
    </div>


     <div class="trow">
        <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
        <input type="text" name="txtEntrenador" id="txtEntrenador" class="wsize2" tabindex="2" value="<?=$info['entrenador'] ?>" />
     </div>
     <div class="trow">
        <label class="label label-form" for="txtEquipo"><span class="required">*</span>Equipo</label>
        <input type="text" name="txtEquipo" id="txtEquipo" class="wsize2" tabindex="2" value="<?=$info['equipo'] ?>" />
     </div>











