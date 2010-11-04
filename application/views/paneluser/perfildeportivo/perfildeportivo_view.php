<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">
    <!-- ========== Deportes =========== -->
    <div class="trow dep">
        <label class="label label-form " for="cboDeporte"><span class="required">*</span>Deporte</label>
        <?=form_dropdown('cboDeporte', $comboDeportes, $info['sports_id'], 'id="cboDeporte" tabindex="1"');?>
    
        <input type="button" id="btnSelSport" onclick="PerfilDeportivo.seleccionDeporte(this);" value="Mostrar">
    
    </div>
    <div class="trow " id="div_sports">

    </div>



    <!-- ========== Objetivos =========== -->
    <div class="trow">
        <label class="label label-form" for="txtObjetivo"><span class="required">*</span>Objetivo Profesional</label>
        <input type="text" name="txtObjetivo" id="txtObjetivo" class="wsize2" tabindex="2" value="<?=$info['objetivo_profesional'] ?>" />
    </div>

    <!-- ========== Experiencia Exterior =========== -->
    <div class="trow">
        <label class="label label-form" for="optExpSi"><span class="required">*</span>Experiencia en el exterior</label>
        <div class="fleft">
            <label class="label" for="optExpSi">
                <input type="radio" name="optExperiencia" id="optExpSi" value="s" tabindex="3" <?=$infoExperiencia->num_rows?"checked":""?>  onclick="PerfilDeportivo.check('contPaises','');"/>&nbsp;Si</label>&nbsp;&nbsp;
            <label class="label" for="optExpNo">
                <input type="radio" name="optExperiencia" id="optExpNo" value="n" tabindex="4" <?=$infoExperiencia->num_rows?"":"checked"?>  onclick="PerfilDeportivo.check('','contPaises');"/>&nbsp;No</label>
        </div>
    </div>


   <!-- =========Perfildeportivo========= -->
    <div id="contPaises" class="trow  <?=$infoExperiencia->num_rows?"":"hide"?> ">
       
        <label class="label label-form">Paises</label>
        <table id="tblExperiencia" cellpadding="0" cellspacing="0">
            <tr>
                <td>Listado de paises</td>
                <td>Acciones</td>
                <td>Paises donde se ha desarrollado</td>
            </tr>
            <tr>
                <td>
  <?=form_dropdown('cboPaises', $comboCountry, false, 'id="cboPaises" tabindex="10" size="10" class="jq-data"');?>
                </td>
                <td>
                    <input type="button" onclick="javascript:void(LibForms.addItem('cboPaises','cboExp'))" value="Agregar" />
                    <input type="button" onclick="javascript:void(LibForms.removeItem('cboExp'))" value="Quitar" />
                </td>
                <td><?=form_dropdown('cboExp',  $infoExperiencia->result_array(), false, 'id="cboExp" tabindex="10" size="10" class="jq-data" multiple');?>
                </td>
            </tr>

        </table>
        <br />
    </div>
    <!-- ========== Rankings =========== -->
    <div class="trow"> 
        <label class="label label-form" for="txtRankingMundial"><span class="required">*</span>Ranking Mundial</label>
        <input type="text" name="txtRankingMundial" id="txtRankingMundial" class="wsize2" tabindex="6" value="<?=$info['ranking_mundial']?>" />
    </div>

    <!-- ========== Rankings =========== --> 
    <div class="trow">
        <label class="label label-form" for="txtRankingNacional"><span class="required">*</span>Ranking Nacional</label>
        <input type="text" name="txtRankingNacional" id="txtRankingNacional" class="wsize2" tabindex="7" value="<?=$info['ranking_nacional']?>" />
    </div>

    <!-- ========== Rankings =========== -->
    <div class="trow">
        <label class="label label-form" for="txtRankingOtro"><span class="required">*</span>Otro Ranking</label>
        <input type="text" name="txtRankingNacional" id="txtObjetivo" class="wsize2" tabindex="8" value="<?=$info['ranking_otro']?>" />
    </div>


    <!-- ========== Representante =========== -->
    <div class="trow">
        <label class="label label-form" for="optRepSi"><span class="required">*</span>Representante / Manager</label>
        <div class="fleft">
            <label class="label" for="optRepSi">
                <input type="radio" name="optManager" id="optRepSi" value="s" tabindex="9"<?=$info['manager']!=0?"checked":""?> onclick="PerfilDeportivo.check('div_manager','div_pase');" />&nbsp;Si</label>&nbsp;&nbsp;
            <label class="label" for="optRepNo">
                <input type="radio" name="optManager" id="optRepNo" value="n" tabindex="10"<?=$info['manager']!=0?"":"checked"?> onclick="PerfilDeportivo.check('div_pase','div_manager');" />&nbsp;No</label>
        </div>
    </div>
    <div>

         <div class="trow <?=$info['manager']?"":"hide"?>" id="div_manager">
            <label class="label label-form" for="cboPase"><span class="required">*</span>Representantes registrados</label>
            <?=form_dropdown('cboRep', $comboRep,$info["manager"] , 'id="cboRep" tabindex="11" onchange="LibForms.isOther(this,\'#txtOtroRepresentante\');"');?>
            <input type="text" name="txtOtroRepresentante" id="txtOtroRepresentante" class="wsize2 <?=$info['manager']<0?"":"hide"?>" tabindex="12" value="<?=$info['pase']?>" />
        </div>
        
        <div id="div_pase" clas="<?=$info['manager']?"hide":""?>">
             <!-- ========== Pase =========== -->
            <div class="trow ">
                <label class="label label-form" for="cboPase"><span class="required">*</span>Mi pase pertenece a</label>
                <select name="cboPase" id="cboPase" tabindex="19" onchange="PerfilDeportivo.cboPaseSelection(this);"  >
                    <option value="1" <?=getval($info['pase_options'], 'selected="selected"', "1")?>>Me pertenece</option>
                    <option value="2" <?=getval($info['pase_options'], 'selected="selected"', "2")?>>Mi Club De Origen</option>
                    <option value="3" <?=getval($info['pase_options'], 'selected="selected"', "3" )?>>Mi Club Actual</option>
                    <option value="-1" <?=getval($info['pase_options'], 'selected="selected"', "-1" )?>>Otro</option>
                </select>
            </div>
             <div class="trow <?=$info['pase_options']==1||$info['pase_options']==4?"":"hide"?>" id="div_pasetxt" >
                <label class="label label-form" for="txtPase" id="lblPase">Mi pase...</label>
                <input type="text" name="txtPase" id="txtPase" class="wsize2" tabindex="12" value="<?=$info['pase']?>" />
            </div>
        </div>

    </div>
       


     <!-- ========== Sponsor =========== -->
    <div class="trow">
        <label class="label label-form" for="cboSponsor"><span class="required">*</span>Sponsors</label>
        <?=form_dropdown('cboSponsor', $comboSponsor,$info['sponsor'] , 'id="cboSponsor" tabindex="13"');?>
    </div>

    <!-- ========== Becas =========== -->
    <div class="trow" >
        <label class="label label-form" for="optBecasSi"><span class="required">*</span>Becas</label>
        <div class="fleft">
            <label class="label" for="optBecasSi">
                <input type="radio" name="optBecas" id="optBecasSi" value="s" tabindex="14" <?=$infoBecas->num_rows?"checked":""?>  onclick="PerfilDeportivo.check('contBecas','');"/>&nbsp;Si</label>&nbsp;&nbsp;
            <label class="label" for="optBecasNo">
                <input type="radio" name="optBecas" id="optBecasNo" value="n" tabindex="15" <?=$infoBecas->num_rows?"":"checked"?>  onclick="PerfilDeportivo.check('','contBecas');"/>&nbsp;No</label>
        </div>
    </div>

    <!-- ========== Becas =========== -->
    <div id="contBecas" class="trow <?=$infoBecas->num_rows?"":"hide"?>">
        <label class="label label-form">Becas</label>
        <table id="tblBecas" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">A&ntilde;o</td>
                    <td class="cell2">Instituci&oacute;n</td>
                    <td class="cell3">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php  if( $infoBecas->num_rows==0 ){
              $listInfoBecas = array();
              $listInfoBecas[] = array('becas_id'=>0, 'anio'=>'', 'institucion'=>'');
          }else{
              $listInfoBecas = $infoBecas->result_array();
          }
          foreach( $listInfoBecas as $row ){?>
               
                <tr <?php if( $row['becas_id']!=0 ) echo 'id="trBecas'.$row['becas_id'].'"'?>>
                    <td class="cell1"><input type="text" name="txtAnio" value="<?=$row['anio']?>"  tabindex="16"></td>
                    <td class="cell1"><input type="text" name="txtInstitucion" value="<?=$row['institucion']?>"  tabindex="17"></td>
                    <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="PerfilDeportivo.removeRow(this, 'becas')" /></td>
                </tr>
     <?php  } ?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" tabindex="18" onclick="PerfilDeportivo.addRow('#tblBecas', 4)" />
    </div>


    <!-- =========== Lesiones ======== -->

    <div class="trow">
        <label class="label label-form" for="cboPatologia"><span class="required">*</span>Patolog&iacute;a</label>
        <select name="cboPatologia" id="cboPatologia" tabindex="19" onchange="PerfilDeportivo.seleccionLesion(this)">
            <option value="l" <?=getval($info['patologia'], 'selected="selected"', "l")?>>Lesi&oacute;n</option>
            <option value="o" <?=getval($info['patologia'], 'selected="selected"', "o")?>>Operaci&oacute;n</option>
            <option value="e" <?=getval($info['patologia'], 'selected="selected"', "e" )?>>Enfermedad</option>
        </select>
    </div>
     <!-- =========== Enfermedad ======== -->
    <div id="div_enf" class="trow <?=$info['patologia']!='e'?"hide":""?>">
        <label class="label label-form" for="txtEnfermedad"><span class="required">*</span>Enfermedad</label>
        <input type="text" name="txtEnfermedad" id="txtEnfermedad" class="wsize2" tabindex="6" value="<?=$info['enfermedad']?>" />
    </div>


    <!-- =========Perfildeportivo========= -->
    <div id="contLes" class="trow <?=$info['patologia']!='e'?"":"hide"?>">
        <label class="label label-form">Lesiones / Operaciones</label>
        <table id="tblLesiones" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Lesi&oacute;n u Operaci&oacute;n</td>
                    <td class="cell2">Fecha de Lesi&oacute;n u Operaci&oacute;n</td>
                    <td class="cell3">Fecha de Recuperaci&oacute;n</td>
                    <td class="cell4">Recuperaci&oacute;n</td>
                    <td class="cell5">Observaciones</td>
                    <td class="cell6">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php  if( $infoLesion->num_rows==0 ){
              $listInfoLesion = array();
              $listInfoLesion[] = array('lesiones_id'=>0, 'lesion'=>'', 'fecha_lesion'=>'','fecha_recuperacion'=>'','recuperacion'=>'','observaciones'=>'');
          }else{
              $listInfoLesion = $infoLesion->result_array();
          }
         foreach( $listInfoLesion as $row ){?>
                <tr <?php if( $row['lesiones_id']!=0 ) echo 'id="trLesion'.$row['lesiones_id'].'"'?>>
                    <td class="cell1">
                    <?=form_dropdown('cboLesiones', $comboLesion, $row['lesion'],' tabindex="20" class="jq-data"');?>
                    </td>
                    <td class="cell2">   
        <input type="text" name="txtLesion" class="wsize1 cfecha" tabindex="5" value="<?=@date('d-m-Y', $row['fecha_lesion'])?>" />
                    </td>
   
                    <td class="cell3">
                        <input type="text"  name="txtRecuperacion" value="<?=@date('d-m-Y', $row['fecha_recuperacion'])?>" class="wsize1 cfecha" tabindex="22" />
                    </td>
                    <td class="cell4">
        <select name="cboRecuperacion" id="cboRecuperacion" tabindex="19">
            <option value="1" <?=getval($row['recuperacion'], 'selected="selected"', "1")?>>&Oacute;ptima</option>
            <option value="2" <?=getval($row['recuperacion'], 'selected="selected"', "2")?>>Muy buena</option>
            <option value="3" <?=getval($row['recuperacion'], 'selected="selected"', "3" )?>>Regular</option>
            <option value="4" <?=getval($row['recuperacion'], 'selected="selected"', "4" )?>>Mala</option>
        </select>
                    </td>
                    <td class="cell5"><input type="text" name="txtObservacion" value="<?=$row['observaciones']?>" tabindex="24"></td>
                    <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="PerfilDeportivo.removeRow(this, 'lesion')" /></td>
                </tr>
        <?php  } ?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="PerfilDeportivo.addRowFecha('#tblLesiones', 4)" tabindex="25" />
    </div>

    <!-- ========== Rankings =========== -->
    <div class="trow">
        <label class="label label-form" for="txtDatos"><span class="required">*</span>Otros Datos</label>
        <textarea name="txtDatos" id="txtDatos" class="wsize2" tabindex="7"><?=$info['otros_datos']?></textarea>
    </div>


    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="32" class="fright">Guardar</button>
    </div>

    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="json" id="json">
    <input type="hidden" name="perfil_id" id="perfil_id" value="<?=$info['perfil_id']?>">
    <input type="hidden" name="perfil_deporte_id" id="perfil_deporte_id" value="<?=$info['perfil_deporte_id']?>">
</form>



<script type="text/javascript">
<!--
    PerfilDeportivo.initializer();
-->
</script>