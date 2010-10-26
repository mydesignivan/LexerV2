<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->
    <div>
        <div class="trow">
            <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria Actual</label>
            <?=form_dropdown('cboCategoria', $cboCategoria, $info['categoria'], 'id="cboCategoria" tabindex="1" onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['categoria']<0?"":"hide"?>">
            <label class="label label-form" for="txtCategoriaOther"><span class="required">*</span>Otra categoria</label>
            <input type="text" name="txtCategoriaOther" id="txtCategoriaOther" class="wsize2" tabindex="2" value="<?=$info['categoria_other'] ?>" />
        </div>
    </div>
    <div>
        <div class="trow "
            <label class="label label-form" for="cboEspecialidad"><span class="required">*</span>Especialidad</label>
            <?=form_dropdown('cboEspecialidad', $cboEspecialidad, $info['especialidad'], 'id="cboEspecialidad" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['especialidad']<0?"":"hide"?>">
            <label class="label label-form" for="txtEspecialidadOther"><span class="required">*</span>Otra especialidad</label>
            <input type="text" name="txtEspecialidadOther" id="txtEspecialidadOther" class="wsize2" tabindex="2" value="<?=$info['especialidad_other'] ?>" />
        </div>
    </div>







