<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

<div id="tabs" >
    <ul>
            <li><a href="#tabs-1">Historial Deportivo</a></li>
            <li><a href="#tabs-2">Palmares</a></li>
    </ul>
    <div id="div_sports">
        <div id="tabs-1">
        <?

        foreach($historial as $hist_row){
        ?>
            <div class="chistorial">
                 <!-- ========== CATEGORIA Y NIVEL  =========== -->
                <div>
                    <input type="hidden" id="list" value="<?=$hist_row['list']?>">
                    <input type="hidden" id="name_comp" value="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria]">
                    <div class="trow "
                        <label class="label label-form" ><span class="required">*</span>Nivel</label>
                        <?=form_dropdown("cboNivel", $hist_row['cboNivel'], $hist_row['nivel'], 'tabindex="1"  onchange="Historial.selCat(this);" class="temp"');?>
                    </div>
                    <div class="trow <?=$hist_row['categoria']!=0?"":"hide";?> noinit">
                        <label class="label label-form" ><span class="required">*</span>Categoria</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[categoria]", $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="1"  onchange="LibForms.isOther(this);" class="hinput"');?>
                    </div>
                </div>

                 <!-- ========== ENTRENADOR  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Entrenador</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[entrenador]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>

                 <!-- ========== PELEAS  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Peleas</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[cant_peleas]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['cant_peleas'] ?>" />
                </div>
             <!-- ========== Torneos =========== -->
                <div id="contDatos" class="trow">
                    <label class="label label-tablas">Detalle de peleas</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <thead>
                             <tr>
                                <td class="cell0">
                                    <label class="label label-form"></label>
                                </td>
                                <td class="cell1">
                                      <label class="label label-form">Ganadas</label>
                                </td>
                                <td class="cell2">
                                     <label class="label label-form">Perdidas</label>
                                </td>
                                <td class="cell3">
                                     <label class="label label-form">Empates</label>
                                </td>
                                <td class="cell4">
                                    <label class="label label-form">No Disputadas</label>
                                </td>
                                <td class="cell5">
                                    <label class="label label-form">TOTAL</label>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="cell0">
                                     <label class="label label-form">K.O.</label>
                                </td>
                                <td class="cell1">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_ganadas]" value="<?=$hist_row['ko_ganadas']?>" class="wsize1 hinput " onkeyup="Historial.suma(this,'.cell1','.rescell1', '.resrow1' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_perdidas]" value="<?=$hist_row['ko_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2', '.resrow1' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_empates]" value="<?=$hist_row['ko_empates']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell3','.rescell3', '.resrow1' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_nodisp]" value="<?=$hist_row['ko_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4', '.resrow1' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow1"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                     <label class="label label-form">K.O. Técnico</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_tecnico_ganadas]" value="<?=$hist_row['ko_tecnico_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1', '.resrow2' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_tecnico_perdidas]" value="<?=$hist_row['ko_tecnico_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2', '.resrow2' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_tecnico_empates]" value="<?=$hist_row['ko_tecnico_empates']?>" class="wsize1 hinput"onkeyup="Historial.suma(this,'.cell3','.rescell3', '.resrow2' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ko_tecnico_nodisp]" value="<?=$hist_row['ko_tecnico_nodisp']?>" class="wsize1 hinput"onkeyup="Historial.suma(this,'.cell4','.rescell4', '.resrow2' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow2"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                     <label class="label label-form">Puntos</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[puntos_ganadas]" value="<?=$hist_row['puntos_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1', '.resrow3' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[puntos_perdidas]" value="<?=$hist_row['puntos_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2', '.resrow3' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[puntos_empates]" value="<?=$hist_row['puntos_empates']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell3','.rescell3', '.resrow3' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[puntos_nodisp]" value="<?=$hist_row['puntos_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4', '.resrow3' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow3"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                     <label class="label label-form">Accidente</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[accidente_ganadas]" value="<?=$hist_row['accidente_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1', '.resrow4' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[accidente_perdidas]" value="<?=$hist_row['accidente_perdidas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell2','.rescell2', '.resrow4' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[accidente_empates]" value="<?=$hist_row['accidente_empates']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell3','.rescell3', '.resrow4' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[accidente_nodisp]" value="<?=$hist_row['accidente_nodisp']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell4','.rescell4', '.resrow4' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow4"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Lesi&oacute;n</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[lesion_ganadas]" value="<?=$hist_row['lesion_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow5' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[lesion_perdidas]" value="<?=$hist_row['lesion_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow5' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[lesion_empates]" value="<?=$hist_row['lesion_empates']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow5' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[lesion_nodisp]" value="<?=$hist_row['lesion_nodisp']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow5' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow5"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Abandono</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[abandono_ganadas]" value="<?=$hist_row['abandono_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow6' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[abandono_perdidas]" value="<?=$hist_row['abandono_perdidas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow6' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[abandono_empates]" value="<?=$hist_row['abandono_empates']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow6' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[abandono_nodisp]" value="<?=$hist_row['abandono_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow6' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow6"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Inferioridad</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[inferioridad_ganadas]" value="<?=$hist_row['inferioridad_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow7' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[inferioridad_perdidas]" value="<?=$hist_row['inferioridad_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow7' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[inferioridad_empates]" value="<?=$hist_row['inferioridad_empates']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow7' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[inferioridad_nodisp]" value="<?=$hist_row['inferioridad_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow7' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow7"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Combate Nulo</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[nulo_ganadas]" value="<?=$hist_row['nulo_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow8' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[nulo_perdidas]" value="<?=$hist_row['nulo_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow8' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[nulo_empates]" value="<?=$hist_row['nulo_empates']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow8' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[nulo_nodisp]" value="<?=$hist_row['nulo_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow8' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow8"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form resrow8">Decisi&oacute;n</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[desicion_ganadas]" value="<?=$hist_row['desicion_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow9' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[desicion_perdidas]" value="<?=$hist_row['desicion_perdidas']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow9' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[desicion_empates]" value="<?=$hist_row['desicion_empates']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow9' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[desicion_nodisp]" value="<?=$hist_row['desicion_nodisp']?>" class="wsize1 hinput" onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow9' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow9"></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Descalificación</label>
                                </td>
                                <td class="cell1">
                                     <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[descalificacion_ganadas]" value="<?=$hist_row['descalificacion_ganadas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell1','.rescell1' , '.resrow10' );" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[descalificacion_perdidas]" value="<?=$hist_row['descalificacion_perdidas']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell2','.rescell2' , '.resrow10' );" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[descalificacion_empates]" value="<?=$hist_row['descalificacion_empates']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell3','.rescell3' , '.resrow10' );" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[descalificacion_nodisp]" value="<?=$hist_row['descalificacion_nodisp']?>" class="wsize1 hinput"  onkeyup="Historial.suma(this,'.cell4','.rescell4' , '.resrow10' );" />
                                </td>
                                <td class="cell5">
                                    <label class="label label-form resrow10" ></label>
                                </td>
                            </tr>
                            <tr>
                                <td class="cell0">
                                    <label class="label label-form">Totales</label>
                                </td>
                                <td class="cell1 rescell1 res">
                                      
                                </td>
                                <td class="cell2 rescell2 res">
                                     
                                </td>
                                <td class="cell3 rescell3 res">
                                     
                                </td>
                                <td class="cell4 rescell4 res">
                                    
                                </td>
                                <td class="cell5 rescell5 ">
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div id="contPeleas" class="trow tbl">
                    <label class="label label-tablas">Historial de Peleas</label>
                    <table name="tblPeleas" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1" >Fecha</td>
                                <td class="cell2" >Lugar</td>
                                <td class="cell3" >Ciudad</td>
                                <td class="cell4" >Pa&iacute;s</td>
                                <td class="cell5" >Peso</td>
                                <td class="cell6" >Adversario</td>
                                <td class="cell7" >Organizaci&oacute;n</td>
                                <td class="cell8" >Resultado</td>
                                <td class="cell9" >Round</td>
                                <td class="cell10">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['peleas'] as $peleas_row ){?>
                            <tr <?php if( $peleas_row['peleas_id']!=0 ) echo 'id="trTorneo'.$peleas_row['peleas_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $peleas_row['fecha']?$peleas_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                <td class="cell2">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[lugar]" value="<?=$peleas_row['lugar']?>" class="wsize2" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[city]" value="<?=$peleas_row['city']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                    <?=form_dropdown($peleas_row[TABLE_NAME_FIELD].'[country]', $peleas_row['cboCountry'], $peleas_row['country'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[peso]" value="<?=$peleas_row['peso']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[adversario]" value="<?=$peleas_row['adversario']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[organizacion]" value="<?=$peleas_row['organizacion']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                    <?=form_dropdown($peleas_row[TABLE_NAME_FIELD].'[resultado]', $peleas_row['cboResultado'], $peleas_row['resultado'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$peleas_row[TABLE_NAME_FIELD]?>[round]" value="<?=$peleas_row['round']?>" class="wsize2" />
                                </td>

                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'pelea')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>


  
            </div>
        <?
        }
        ?>
            <div class="trow">
                <input type="button" value="A&ntilde;adir Otro Historial" name="btn"  onclick="Historial.addHistorial(this,'chistorial')" />
            </div>
        </div>
        <div id="tabs-2">
               <div id="contPalmares" class="trow tbl">
                    <label class="label label-tablas">Logros / Títulos Nacionales / Títulos Internacionales / Otros</label>
                    <table name="tblPalmares" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">A&ntilde;o</td>
                                <td class="cell2">T&iacute;tulo</td>
                                <td class="cell3">Peso</td>
                                <td class="cell4">Organizaci&oacute;n</td>
                                <td class="cell4">Descripci&oacute;n</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                <?=form_dropdown($palmares_row[TABLE_NAME_FIELD].'[year]', $palmares_row['cboYear'], $palmares_row['year'], ' tabindex="1"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[titulo]" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[peso]" value="<?=$palmares_row['peso']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                  <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[organizacion]" value="<?=$palmares_row['organizacion']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                  <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[descripcion]" value="<?=$palmares_row['descripcion']?>" class="wsize2" />
                                </td>

                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRow(this)" />
                </div>
        </div>
    </div>
</div>
