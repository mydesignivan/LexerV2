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
            <label class="label label-form" for="cboDisciplina"><span class="required">*</span>Disciplina</label>
            <?=form_dropdown('cboDisciplina', $cboDisciplina, $info['disciplina'], 'id="cboDisciplina" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['disciplina']<0?"":"hide"?>">
            <label class="label label-form" for="txtDisciplinaOther"><span class="required">*</span>Otra disciplina</label>
            <input type="text" name="txtDisciplinaOther" id="txtDisciplinaOther" class="wsize2" tabindex="2" value="<?=$info['disciplina_other'] ?>" />
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






