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

    
    <div class="trow ">
        <label class="label label-form" for="txtArco"><span class="required">*</span>Arco</label>
        <input type="text" name="txtArco" id="txtArco" class="wsize2" tabindex="2" value="<?=$info['arco'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPalas"><span class="required">*</span>Palas</label>
        <input type="text" name="txtPalas" id="txtPalas" class="wsize2" tabindex="2" value="<?=$info['palas'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPotencia"><span class="required">*</span>Potencia Real</label>
        <input type="text" name="txtPotencia" id="txtPotencia" class="wsize2" tabindex="2" value="<?=$info['potencia_real'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEmpun"><span class="required">*</span>Empu&ntilde;adura</label>
        <input type="text" name="txtEmpun" id="txtEmpun" class="wsize2" tabindex="2" value="<?=$info['empuniaduras'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtFlechas"><span class="required">*</span>Flechas</label>
        <input type="text" name="txtFlechas" id="txtFlechas" class="wsize2" tabindex="2" value="<?=$info['flechas'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPuntas"><span class="required">*</span>Puntas</label>
        <input type="text" name="txtPuntas" id="txtPuntas" class="wsize2" tabindex="2" value="<?=$info['puntas'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPlumas"><span class="required">*</span>Plumas</label>
        <input type="text" name="txtPlumas" id="txtPlumas" class="wsize2" tabindex="2" value="<?=$info['plumas'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtNock"><span class="required">*</span>Nock</label>
        <input type="text" name="txtNock" id="txtNock" class="wsize2" tabindex="2" value="<?=$info['nock'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtCuerda"><span class="required">*</span>Cuerda</label>
        <input type="text" name="txtCuerda" id="txtCuerda" class="wsize2" tabindex="2" value="<?=$info['cuerda'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtReposaFlechas"><span class="required">*</span>Reposa-Flechas</label>
        <input type="text" name="txtReposaFlechas" id="txtReposaFlechas" class="wsize2" tabindex="2" value="<?=$info['reposa_flechas'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtClicker"><span class="required">*</span>Clicker</label>
        <input type="text" name="txtClicker" id="txtClicker" class="wsize2" tabindex="2" value="<?=$info['clicker'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPresion"><span class="required">*</span>Botón de Presión</label>
        <input type="text" name="txtPresion" id="txtPresion" class="wsize2" tabindex="2" value="<?=$info['boton_presion'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEstab"><span class="required">*</span>Estabilizadores</label>
        <input type="text" name="txtEstab" id="txtEstab" class="wsize2" tabindex="2" value="<?=$info['estabilizadores'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtEstabSup"><span class="required">*</span>Estabilizador Superior</label>
        <input type="text" name="txtEstabSup" id="txtEstabSup" class="wsize2" tabindex="2" value="<?=$info['estabilizador_super_izquierdo'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtMira"><span class="required">*</span>Mira</label>
        <input type="text" name="txtMira" id="txtMira" class="wsize2" tabindex="2" value="<?=$info['mira'] ?>" />
    </div>

    <div class="trow ">
        <label class="label label-form" for="txtDactilera"><span class="required">*</span>Dactilera</label>
        <input type="text" name="txtDactilera" id="txtDactilera" class="wsize2" tabindex="2" value="<?=$info['dactilera'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtProtector"><span class="required">*</span>Protector Brazo</label>
        <input type="text" name="txtProtector" id="txtProtector" class="wsize2" tabindex="2" value="<?=$info['protector_brazo'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtCarcaj"><span class="required">*</span>Carcaj</label>
        <input type="text" name="txtCarcaj" id="txtCarcaj" class="wsize2" tabindex="2" value="<?=$info['carcaj'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtPeto"><span class="required">*</span>Peto</label>
        <input type="text" name="txtPeto" id="txtPeto" class="wsize2" tabindex="2" value="<?=$info['peto'] ?>" />
    </div>
    <div class="trow ">
        <label class="label label-form" for="txtReposaArcos"><span class="required">*</span>Reposa-Arcos</label>
        <input type="text" name="txtReposaArcos" id="txtReposaArcos" class="wsize2" tabindex="2" value="<?=$info['reposa_arcos'] ?>" />
    </div>








