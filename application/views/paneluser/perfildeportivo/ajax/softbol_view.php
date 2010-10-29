<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div class="trow">
        <label class="label label-form" for="chkSoftballIzquierda"><span class="required">*</span>Mano h&aacute;bil</label>
        <div class="fleft">
             <label class="label" for="chkSoftballIzquierda">
            <input type="radio" name="chkmanosoftball" id="chkSoftballIzquierda" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "i")?> /> Izquierda
             </label>
            <label class="label" for="chkSoftballDerecha">
            <input type="radio" name="chkmanosoftball" id="chkSoftballDerecha" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "d")?> /> Derecha
            </label>
        </div>
    </div>


    <div class="trow">
        <div class="trow ">
            <label class="label label-form" for="cboSeleccionado"><span class="required">*</span>Seleccionado</label>
            <?=form_dropdown('cboSeleccionado', $cboSeleccionado, $info['seleccionado'], 'id="cboSeleccionado" tabindex="1" ');?>
        </div>
    </div>

    <div>
        <div class="trow "
            <label class="label label-form" for="cboHabilidad"><span class="required">*</span>Mayor habilidad</label>
            <?=form_dropdown('cboHabilidad', $cboHabilidad, $info['habilidad'], 'id="cboHabilidad" tabindex="1"  onchange="PerfilDeportivo.selSoftBolHabilidad(this);"');?>
        </div>
        <div class="trow <?=$info['habilidad']<0?"":"hide"?>">
            <label class="label label-form" for="txtHabilidadOther"><span class="required">*</span>Otra habilidad</label>
            <input type="text" name="txtHabilidadOther" id="txtHabilidadOther" class="wsize2" tabindex="2" value="<?=$info['habilidad_other'] ?>" />
        </div>
        <div class="trow <?=$info['habilidad']==4?"":"hide"?>">
            <?php foreach($recursos as $row){?>
            <label class="label" for="chkRecursos<?=$row['recursos_id']?>">
            <input type="radio" name="chkRecursos" id="chkRecursos<?=$row['recursos_id']?>" class="wsize2" tabindex="2" <?=getval($info['habilidad'], 'checked', $row['recursos_id'])?> /> <?=$row['name']?>
            </label>
            <?php } ?>

        </div>
    </div>



    <div>
        <div class="trow "
            <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
            <?=form_dropdown('cboPosicion', $cboPosicion, $info['posicion'], 'id="cboPosicion" tabindex="1" ');?>
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

    <div class="trow ">
        <label class="label label-form" for="txtAniosJugando"><span class="required">*</span>A&ntilde;os jugando</label>
        <input type="text" name="txtAniosJugando" id="txtAniosJugando" class="wsize2" tabindex="2" value="<?=$info['anios_jugando'] ?>" />
    </div>