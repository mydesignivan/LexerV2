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
        </div>
    </div>

   <div class="trow ">
        <label class="label label-form" for="txtDesde1"><span class="required">*</span>Practico Tiro desde</label>
        <input type="text" name="txtDesde1" id="txtDesde1" class="wsize2" tabindex="2" value="<?=substr($info['practica_desde'], 0 ,4 ); ?>" />
        <input type="text" name="txtDesde2" id="txtDesde2" class="wsize2" tabindex="2" value="<?=substr($info['practica_desde'], 5 ,4 ); ?>" />
    </div>
   <div class="trow ">
        <label class="label label-form" for="txtInicio1"><span class="required">*</span>Inicio en Competiciones</label>
        <input type="text" name="txtInicio1" id="txtInicio1" class="wsize2" tabindex="2" value="<?=substr($info['inicio_competicion'], 0 ,4 ); ?>" />
        <input type="text" name="txtInicio2" id="txtInicio2" class="wsize2" tabindex="2" value="<?=substr($info['inicio_competicion'], 5 ,4 ); ?>" />
    </div>

    <div class="trow">
        <label class="label label-form" for="chkArcoIzquierda"><span class="required">*</span>Mano h&aacute;bil</label>
        <label class="label" for="chkArcoIzquierda">
            <input type="radio" name="chkArcoMano" id="chkArcoIzquierda" class="wsize2" tabindex="2" value="i" <?=getval($info['mano_habil'], 'checked', "i")?> /> Izquierda
        </label>
        <label class="label" for="chkArcoDerecha">
            <input type="radio" name="chkArcoMano" id="chkArcoDerecha" class="wsize2" tabindex="2" value='d' <?=getval($info['mano_habil'], 'checked', "d")?> /> Derecha
        </label>
        <label class="label" for="chkArcoAmbos">
            <input type="radio" name="chkArcoMano" id="chkArcoAmbos" class="wsize2" tabindex="2" value='a' <?=getval($info['mano_habil'], 'checked', "a")?> /> Ambidiestro
        </label>
    </div>

    <div class="trow "
        <label class="label label-form" for="cboOjo"><span class="required">*</span>Ojo principal</label>
        <?=form_dropdown('cboOjo', $cboOjo, $info['ojo_principal'], 'id="cboOjo" tabindex="1" ');?>
    </div>






    <div class="trow ">
        <label class="label label-form" for="txtEventos"><span class="required">*</span>Eventos</label>
        <input type="text" name="txtEventos" id="txtEventos" class="wsize2" tabindex="2" value="<?=$info['eventos'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEntrenadorPersonal"><span class="required">*</span>Entrenador Personal</label>
        <input type="text" name="txtEntrenadorPersonal" id="txtEntrenadorPersonal" class="wsize2" tabindex="2" value="<?=$info['entrenador_personal'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEntrenadorNacional"><span class="required">*</span>Entrenador Nacional</label>
        <input type="text" name="txtEntrenadorNacional" id="txtEntrenadorNacional" class="wsize2" tabindex="2" value="<?=$info['entrenador_nacional'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEquipo"><span class="required">*</span>Equipo</label>
        <input type="text" name="txtEquipo" id="txtEquipo" class="wsize2" tabindex="2" value="<?=$info['equipo'] ?>" />
    </div>

    





