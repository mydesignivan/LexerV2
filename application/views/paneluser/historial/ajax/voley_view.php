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
                    <label class="label label-form" for="cboTemporada"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown('cboTemporada_1', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1"');?>
                </div>
                <div class="trow "
                    <label class="label label-form" for="cboTemporada"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown('cboTemporada_2', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1"');?>
                </div>
                <div class="trow">
                    <label class="label label-form" for="txtClub"><span class="required">*</span>Club</label>
                    <input type="text" name="txtClub" class="wsize2" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown('cboCategoria', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']>0?"":"hide";?> noinit">
                      <input type="text" name="txtCategoriaOther"  class="wsize2" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>
                <!-- ========== POSICION  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
                    <span>
                    <?=form_dropdown('cboPosicion', $hist_row['cboPosicion'], $hist_row['posicion'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['posicion']>0?"":"hide";?> noinit">
                      <input type="text" name="txtPosicionOther"  class="wsize2" tabindex="2" value="<?=$hist_row['posicion_other'] ?>" />
                    </span>
                </div>

                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtCity"><span class="required">*</span>Ciudad</label>
                    <input type="text" name="txtCity" class="wsize2" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCountry">Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown('cboCountry', $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" for="cboStates">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown('cboStates', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
                    <?php }?>
                </div>


                <!-- ========== Temporada =========== -->
                <div id="contDatos" class="trow tbl">
                    <label class="label label-tablas">Datos Promedios por Temporada</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label ">Detalle</label>
                                </td>
                                <td class="cell2">
                                    <label class="label ">Cantidad</label>
                                </td>
                                <td class="cell3">
                                    <label class="label ">Efectividad</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPartidosJugados">Partidos Jugados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPartidosJugados" value="<?=$hist_row['partidos_jugados']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">

                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label">Partidos como Titular</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtMinutosCancha" value="<?=$hist_row['minutos_cancha']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">

                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                     <label class="label ">Saque</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Aciertos / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtSaqueAciertos" value="<?=$hist_row['saque_aciertos']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtSaqueAciertosEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Puntos / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtSaquePuntos" value="<?=$hist_row['saque_puntos']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtSaquePuntosEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                    <label class="label ">Recepci&oacute;n</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Efectividad / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtRecepcionEfectividad" value="<?=$hist_row['recepcion_efectividad']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtRecepcionEfectividadEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtRecepcionErrores" value="<?=$hist_row['recepcion_errores']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtRecepcionErroresEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                    <label class="label ">Armado</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Efectividad / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtArmadoPuntos" value="<?=$hist_row['armado_puntos']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtArmadoPuntosEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtArmadoErrores" value="<?=$hist_row['armado_errores']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtArmadoErroresEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                    <label class="label ">Ataque</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Efectividad / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAtaquePuntos" value="<?=$hist_row['ataque_puntos']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAtaquePuntosEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAtaqueErrores" value="<?=$hist_row['ataque_errores']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtAtaqueErroresEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                    <label class="label ">Bloqueo</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Efectividad / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBloqueEfectivo" value="<?=$hist_row['bloqueo_efectivo']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBloqueEfectivoEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores / Set</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBloqueErrores" value="<?=$hist_row['bloqueo_errores']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtBloqueoErroresEfect" value="" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1" colspan="3">
                                    <label class="label ">Sanciones</label>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Amonestaciones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAmonestaciones" value="<?=$hist_row['amonestaciones']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Castigos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtCastigso" value="<?=$hist_row['castigos']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Expulsiones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtExpulsiones" value="<?=$hist_row['expulsiones']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Descalificaciones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtDescalificaciones" value="<?=$hist_row['descalificaciones']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
           <!-- ========== Observaciones  =========== -->
            <div class="trow">
                <label class="label label-form" for="txtObservaciones"><span class="required">*</span>Observaciones</label>
                <textarea name="txtObservaciones" class="wsize2" tabindex="7"><?=$hist_row['observaciones']?></textarea>
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
                                <td class="cell1">A&ntilde;o</td>
                                <td class="cell2">T&iacute;tulo</td>
                                <td class="cell3">Equipo</td>
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
                                <?=form_dropdown('cboTemporadaPalmares', $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTitulo" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtEquipo" value="<?=$palmares_row['equipo']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                  <?=form_dropdown('cboCountry', $palmares_row['cboCountry'], $palmares_row['country'], ' tabindex="14" ');?>
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
