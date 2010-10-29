<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->


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

    <div class="trow">
        <label class="label label-form" for="txtClub"><span class="required">*</span>Club actual</label>
        <input type="text" name="txtClub" id="txtClub" class="wsize2" tabindex="2" value="<?=$info['club'] ?>" />
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
        <label class="label label-form" for="txtBloqueo"><span class="required">*</span>Alcance de Bloqueo</label>
        <input type="text" name="txtBloqueo" id="txtBloqueo" class="wsize2" tabindex="2" value="<?=$info['alcance_bloqueo'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtAtaque"><span class="required">*</span>Alcance de Ataque</label>
        <input type="text" name="txtAtaque" id="txtAtaque" class="wsize2" tabindex="2" value="<?=$info['alcance_ataque'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtParado"><span class="required">*</span>Alcance Parado</label>
        <input type="text" name="txtParado" id="txtParado" class="wsize2" tabindex="2" value="<?=$info['alcance_parado'] ?>" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtDebut"><span class="required">*</span>Debut Internacional</label>
        <input type="text" name="txtDebut" id="txtDebut" class="wsize2" tabindex="2" value="<?=$info['debut_internacional'] ?>" />
    </div>


    <div>
        <div class="trow "
            <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
            <?=form_dropdown('cboPosicion', $cboPosicion, $info['posicion'], 'id="cboPosicion" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
    </div>
    













