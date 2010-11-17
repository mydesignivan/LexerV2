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
                    <label class="label label-form" ><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_1]', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1" class="hinput" ');?>
                </div>
                <div class="trow "
                    <label class="label label-form" ><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_2]', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1" class="hinput"');?>
                </div>

                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Torneo</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[torneo]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['torneo'] ?>" />
                </div>
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria'] ?>" />
                </div>
                <!-- ========== MODALIDAD   =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Modalidad</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[modalidad]', $hist_row['cboModalidad'], $hist_row['modalidad'], ' tabindex="1" class="hinput"');?>
                </div>

                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[city]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" >Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[country]', $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)"  class="hinput"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" >Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD].'[state]', $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]" class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>


                <!-- ========== Temporada =========== -->
                <div id="contDatos" class="trow tbl">
                    <label class="label label-tablas">Datos Promedios por Temporada</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label ">Total Partidos</label>
                                </td>
                                <td class="cell2">
                                    <label class="label ">Cantidad</label>
                                </td>
                                <td class="cell2" colspan="3">
                                    <label class="label ">Cantidad</label>
                                </td>
                                <td class="cell6" colspan="3">
                                    <label class="label ">Porcentajes</label>
                                </td>
                            <tr >
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" ></td>
                                <td class="cell3" >Drives</td>
                                <td class="cell4" >Rev&eacute;s</td>
                                <td class="cell5" >Total</td>
                                <td class="cell6" >Drives</td>
                                <td class="cell7" >Rev&eacute;s</td>
                                <td class="cell8" >Total</td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Golpes ganadores</td>
                                <td class="cell3" ></td>
                                <td class="cell4" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Saque Directos</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['saque_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[saque_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['saque_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[saque_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Volea</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['volea_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[volea_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['volea_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[volea_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Bandeja</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['bandeja_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bandeja_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['bandeja_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bandeja_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Remates</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['remates_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[remates_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['remates_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[remates_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Remates Out</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['out_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[out_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['out_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[out_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Dejada</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['dejada_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[dejada_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['dejada_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[dejada_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Bajada</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['bajada_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bajada_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['bajada_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bajada_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                           <tr class="fixed" >
                                <td class="cell1" colspan="2" > Globo</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['globo_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[globo_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['globo_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[globo_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Resto Directo</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['resto_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[resto_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['resto_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[resto_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Golpe de Fondo</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['fondo_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[fondo_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['fondo_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[fondo_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Errores</td>
                                <td class="cell3" ></td>
                                <td class="cell4" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Error Forzado</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['error_forzado_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[error_forzado_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['error_forzado_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[error_forzado_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Error No Forzado</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['error_no_forzado_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[error_no_forzado_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['error_no_forzado_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[error_no_forzado_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Doble Falta</td>
                                <td class="cell3" ><input type="text" value="<?=$hist_row['doble_falta_drive']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[doble_falta_drive]" class="hinput" ></td>
                                <td class="cell4" ><input type="text" value="<?=$hist_row['doble_falta_reves']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[doble_falta_reves]" class="hinput" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                            <tr class="fixed" >
                                <td class="cell1" colspan="2" > Totales</td>
                                <td class="cell3" ></td>
                                <td class="cell4" ></td>
                                <td class="cell5" ></td>
                                <td class="cell6" ></td>
                                <td class="cell7" ></td>
                                <td class="cell8" ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ========== Temporada =========== -->
                <div id="contEficiencia" class="trow tbl">
                    <label class="label label-tablas">Eficiencia</label>
                    <table cellpadding="0" cellspacing="0">
                            <tr >
                                <td class="cell1">
                                    <label class="label ">Eficiencia</label>
                                </td>
                                <td class="cell2">
                                    <label class="label ">Cantidad</label>
                                </td>
                                <td class="cell2">
                                    <label class="label ">Total</label>
                                </td>
                                <td class="cell4">
                                    <label class="label ">Porcentajes</label>
                                </td>
                            </tr >
                            <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label ">Puntos Decisivos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['decisivos_cantidad']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[decisivos_cantidad]" class="hinput" >
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['decisivos_total']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[decisivos_total]" class="hinput" >
                                </td>
                                <td class="cell4">
                                    <label class="label "></label>
                                </td>
                            </tr >
                           <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label ">Puntos de Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['set_cantidad']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[set_cantidad]" class="hinput" >
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['set_total']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[set_total]" class="hinput" >
                                </td>
                                <td class="cell4">
                                    <label class="label "></label>
                                </td>
                            </tr >
                            <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label ">Puntos de Partido</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['partido_cantidad']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[partido_cantidad]" class="hinput" >
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['partido_total']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[partido_total]" class="hinput" >
                                </td>
                                <td class="cell4">
                                   
                                </td>
                            </tr >
                            <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label ">Puntos de Break</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['break_cantidad']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[break_cantidad]" class="hinput" >
                                </td>
                                <td class="cell2">
                                    <input type="text" value="<?=$hist_row['break_total']?>" name="<?=$hist_row[TABLE_NAME_FIELD]?>[break_total]" class="hinput" >
                                </td>
                                <td class="cell4">
                                    
                                </td>
                            </tr >
                    </table>
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
                                <td class="cell4">Pa&iacute;s</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[year]", $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[titulo]" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                  <?=form_dropdown($palmares_row[TABLE_NAME_FIELD].'[country]', $palmares_row['cboCountry'], $palmares_row['country'], ' tabindex="14" ');?>
                                </td>

                                <td class="cell5"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
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
