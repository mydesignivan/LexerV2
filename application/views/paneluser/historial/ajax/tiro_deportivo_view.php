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
                    <label class="label label-form" for="cboYear"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown('cboYear', $hist_row['cboTemporada'], $hist_row['year'], ' tabindex="1"');?>
                </div>

            <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtClub"><span class="required">*</span>Club</label>
                    <input type="text" name="txtClub" id="txtClub" class="wsize2" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>


                 <!-- ========== MODALIDAD  =========== -->
                <div>
                    <input type="hidden" name="list" value="<?=$hist_row['list']?>">
                    <div class="trow "
                        <label class="label label-form" for="cboNivel"><span class="required">*</span>Modalidad</label>
                        <?=form_dropdown('cboModalidad', $hist_row['cboModalidad'], 0, 'tabindex="1"  onchange="Historial.selCat(this);"');?>
                    </div>
                    <div class="trow hide ">
                    </div>
                </div>

                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown('cboCategoria', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']>0?"":"hide";?>">
                      <input type="text" name="txtCategoriaOther"  class="wsize2" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>


                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtCiudad"><span class="required">*</span>Ciudad</label>
                    <input type="text" name="txtCiudad" id="txtCiudad" class="wsize2" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCountry">Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown('cboCountry', $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?>">
                    <label class="label label-form" for="cboStates">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown('cboStates', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
                    <?php }?>
                </div>


              
                <!-- ========== RESULTADOS =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Resultados</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtEvento" value="<?=$torneo_row['evento']?>" class="wsize1" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPos" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtCat" value="<?=$torneo_row['cat']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtT" value="<?=$torneo_row['t']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtL" value="<?=$torneo_row['l']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtPrimera" value="<?=$torneo_row['primera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtSegunda" value="<?=$torneo_row['segunda']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTercera" value="<?=$torneo_row['tercera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtCuarta" value="<?=$torneo_row['cuarta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtQuinta" value="<?=$torneo_row['quinta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtSexta" value="<?=$torneo_row['sexta']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTotal" value="<?=$torneo_row['total']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtfinal" value="<?=$torneo_row['final']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTotalGeneral" value="<?=$torneo_row['total_general']?>" class="wsize1 cvalores" />
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
                    <table id="tblPalmares" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtRk" value="<?=$palmares_row['rk']?>" class="wsize2" />
                                </td>
                                <td class="cell2">
                                    <?=form_dropdown('cboTemporadaPalmares', $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtTitulo" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtEquipo" value="<?=$palmares_row['equipo']?>" class="wsize2" />
                                </td>
                                <td class="cell5">
                                  <?=form_dropdown('cboCountry', $palmares_row['cboCountry'], $palmares_row['country'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtEvento" value="<?=$palmares_row['evento']?>" class="wsize2" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="txtCat" value="<?=$palmares_row['cat']?>" class="wsize2" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="txtComp" value="<?=$palmares_row['comp']?>" class="wsize2" />
                                </td>
                                <td class="cell9">
                                    <input type="text" name="txtFinal" value="<?=$palmares_row['final']?>" class="wsize2" />
                                </td>
                                <td class="cell10">
                                    <input type="text" name="txtTotal" value="<?=$palmares_row['total']?>" class="wsize2" />
                                </td>
                                <td class="cell11">
                                    <input type="text" name="txtRecord" value="<?=$palmares_row['record']?>" class="wsize2" />
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
