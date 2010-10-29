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








    <div>
        <div class="trow "
            <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
            <?=form_dropdown('cboPosicion', $cboPosicion, $info['posicion'], 'id="cboPosicion" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['posicion']<0?"":"hide"?>">
            <label class="label label-form" for="txtPosicionOther"><span class="required">*</span>Otra posicion</label>
            <input type="text" name="txtPosicionOther" id="txtPosicionOther" class="wsize2" tabindex="2" value="<?=$info['posicion_other'] ?>" />
        </div>
    </div>


    <div class="trow">
        <label class="label label-form" for="chkIzquierda"><span class="required">*</span>Pierna h&aacute;bil</label>
        <div class="fleft">
             <label class="label" for="optPateadorSi">
            <input type="radio" name="chkPierna" id="chkIzquierda" class="wsize2" tabindex="2" <?=getval($info['pierna_habil'], 'checked', "i")?> /> Izquierda
             </label>
            <label class="label" for="optPateadorSi">
            <input type="radio" name="chkPierna" id="chkDerecha" class="wsize2" tabindex="2" <?=getval($info['pierna_habil'], 'checked', "d")?> /> Derecha
            </label>
            <label class="label" for="optPateadorSi">
            <input type="radio" name="chkPierna" id="chkAmbas" class="wsize2" tabindex="2" <?=getval($info['pierna_habil'], 'checked', "a")?> /> Ambas
            </label>
        </div>
    </div>

    <div class="trow">
        <label class="label label-form" for="optPateadorSi"><span class="required">*</span>Pateador</label>
        <div class="fleft">
            <label class="label" for="optPateadorRugbiSi">
                <input type="radio" name="optRugbiPateador" id="optPateadorRugbiSi" value="s" tabindex="14" <?=$info['pateador']?"":"checked"?>  onclick="PerfilDeportivo.check('contGolpe','');"/>&nbsp;Si</label>&nbsp;&nbsp;
            <label class="label" for="optPateadorRugbiNo">
                <input type="radio" name="optRugbiPateador" id="optPateadorRugbiNo" value="n" tabindex="15" <?=$info['pateador']?"checked":""?>  onclick="PerfilDeportivo.check('','contGolpe');"/>&nbsp;No</label>
        </div>
    </div>


    <div id="contGolpe">
        <div class="trow "
            <label class="label label-form" for="cboGolpe"><span class="required">*</span>Mejor Golpe</label>
            <?=form_dropdown('cboGolpe', $cboGolpe, $info['mejor_golpe'], 'id="cboGolpe" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
        <div class="trow <?=$info['mejor_golpe']<0?"":"hide"?>">
            <label class="label label-form" for="txtGolpeOther"><span class="required">*</span>Otra categoria</label>
            <input type="text" name="txtGolpeOther" id="txtCategoriaOther" class="wsize2" tabindex="2" value="<?=$info['mejor_golpe_other'] ?>" />
        </div>

        <div class="trow ">
            <label class="label label-form" for="txtAlcance"><span class="required">*</span>Alcance en metros</label>
            <input type="text" name="txtAlcance" id="txtFisico" class="wsize2" tabindex="2" value="<?=$info['alcance'] ?>" />
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