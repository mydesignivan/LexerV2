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
                 <!-- ========== TEMPORADA  =========== -->
                <div class="trow "
                    <label class="label label-form"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[year]", $hist_row['cboTemporada'], $hist_row['year'], ' tabindex="1" class="hinput"');?>
                </div>

            <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>


                 <!-- ========== MODALIDAD  =========== -->
                <div>
                    <input type="hidden" id="list" value="<?=$hist_row['list']?>">
                    <input type="hidden" id="name_comp" value="<?=$hist_row[TABLE_NAME_FIELD]?>[especialidad]">
                    <div class="trow "
                        <label class="label label-form" ><span class="required">*</span>Especialidad</label>
                        <?=form_dropdown("cboModalidad", $hist_row['cboModalidad'], $hist_row['modalidad'], 'tabindex="1"  onchange="Historial.selCat(this);" class="temp" ');?>
                    </div>
                    <div class="trow <?=$hist_row['especialidad']!=0?"":"hide";?> noinit">
                        <label class="label label-form" ><span class="required">*</span>Modalidad</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[especialidad]", $hist_row['cboEspecialidad'], $hist_row['especialidad'], ' tabindex="1"  onchange="LibForms.isOther(this);" class="hinput"');?>
                    </div>
                </div>

                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form"><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[categoria]", $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>

                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtCity"><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[city]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCountry">Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[country]", $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)" class="hinput"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" for="cboStates">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD]."[state]", $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]"  class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>


              
                <!-- ========== RESULTADOS =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Resultados</label>
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Evento</td>
                                <td class="cell2">Pos</td>
                                <td class="cell3">cat</td>
                                <td class="cell4">T</td>
                                <td class="cell4">L</td>
                                <td class="cell4">1era</td>
                                <td class="cell4">2da</td>
                                <td class="cell4">3ra</td>
                                <td class="cell4">4ta</td>
                                <td class="cell4">5ta</td>
                                <td class="cell4">6ta</td>
                                <td class="cell4">Total</td>
                                <td class="cell4">Final</td>
                                <td class="cell4">Total Gral</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['torneos'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['eventos_id']!=0 ) echo 'id="trTorneo'.$torneo_row['eventos_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[evento]" value="<?=$torneo_row['evento']?>" class="wsize1" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[pos]" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[cat]" value="<?=$torneo_row['cat']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[t]" value="<?=$torneo_row['t']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[l]" value="<?=$torneo_row['l']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[primera]" value="<?=$torneo_row['primera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[segunda]" value="<?=$torneo_row['segunda']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[tercera]" value="<?=$torneo_row['tercera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[cuarta]" value="<?=$torneo_row['cuarta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[quinta]" value="<?=$torneo_row['quinta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[sexta]" value="<?=$torneo_row['sexta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[total]" value="<?=$torneo_row['total']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[final]" value="<?=$torneo_row['final']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[total_general]" value="<?=$torneo_row['total_general']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRow(this)" />
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
                                <td class="cell1">RK</td>
                                <td class="cell2">A&ntilde;o</td>
                                <td class="cell3">T&iacute;tulo</td>
                                <td class="cell4">Equipo</td>
                                <td class="cell5">Pa&iacute;s</td>
                                <td class="cell6">Evento</td>
                                <td class="cell7">Cat</td>
                                <td class="cell8">Comp</td>
                                <td class="cell9">Final</td>
                                <td class="cell10">Total</td>
                                <td class="cell11">Record</td>
                                <td class="cell12">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[rk]" value="<?=$palmares_row['rk']?>" class="wsize2" />
                                </td>
                                <td class="cell2">
                                    <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[year]", $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[titulo]" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[equipo]" value="<?=$palmares_row['equipo']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                  <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[country]", $palmares_row['cboCountry'], $palmares_row['country'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[evento]" value="<?=$palmares_row['evento']?>" class="wsize2" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[cat]" value="<?=$palmares_row['cat']?>" class="wsize2" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[comp]" value="<?=$palmares_row['comp']?>" class="wsize2" />
                                </td>
                                <td class="cell9">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[final]" value="<?=$palmares_row['final']?>" class="wsize2" />
                                </td>
                                <td class="cell10">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[total]" value="<?=$palmares_row['total']?>" class="wsize2" />
                                </td>
                                <td class="cell11">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[record]" value="<?=$palmares_row['record']?>" class="wsize2" />
                                </td>
                                <td class="cell12"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
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
