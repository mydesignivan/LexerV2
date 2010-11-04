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
                 <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtClub"><span class="required">*</span>Club</label>
                    <input type="text" name="txtClub" id="txtClub" class="wsize2" tabindex="2" value="<?=$hist_row['club'] ?>" />
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
                    <?=form_dropdown('cboPosicion', $hist_row['cboPosicion'], $hist_row['posicion'], ' tabindex="14" onchange="Historial.SoftBallSeleccion(this);" ');?>
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
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?>">
                    <label class="label label-form" for="cboStates">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown('cboState', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="cboState" class="jq-select" tabindex="15"></select>
                    <?php }?>
                </div>


                <!-- ========== Pitcher =========== -->
                <div class="pitcher_class trow tbl <?=$hist_row['posicion']!=1? "hide":""?> noinit">
                    <label class="label label-tablas">Defensa - Datos Promedios por Partido</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPartidosJugados">Partidos Jugados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPartidosJugados" value="<?=$hist_row['partidos_jugados']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtStrike">Strike Out Logrados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtStrike" value="<?=$hist_row['strike']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtBasesCedidas">Bases Cedidas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBasesCedidas" value="<?=$hist_row['bases_cedidas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtJugadoresGolpeados">Jugadores Golpeados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtJugadoresGolpeados" value="<?=$hist_row['jugadores_golpeados']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtHits">Hits</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtHits" value="<?=$hist_row['hits']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtEfecto">Efectos de Bola</label>
                                </td>
                                <td class="cell2">
                                    <span>
                                    <?=form_dropdown('cboEfecto', $hist_row['cboEfecto'], $hist_row['efecto'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$hist_row['efecto']>0?"":"hide";?> noinit">
                                      <input type="text" name="txtEfectoOther"  class="wsize2" tabindex="2" value="<?=$hist_row['efecto_other'] ?>" />
                                    </span>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtVelocidad">Velocidad de Lanzamiento Promedio</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtVelocidad" value="<?=$hist_row['velocidad']?>" class="wsize1 " />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ========== OTROS NO PITCHER =========== -->
                <div class="all_pos_class trow tbl <?=$hist_row['posicion']!=1 && $hist_row['posicion']!=0 ? "":"hide"?> noinit">
                    <label class="label label-tablas">Defensa - Datos Promedios por Partido</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPartidosJugadosAll">Partidos Jugados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPartidosJugadosAll" value="<?=$hist_row['partidos_jugados']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtAsistencias">Asistencias Logradas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAsistencias" value="<?=$hist_row['asistencias']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtErrores">Errores Cometidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtErrores" value="<?=$hist_row['errores']?>" class="wsize1 " />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ========== DEFENSA TODOS =========== -->
                <div class="trow tbl">
                    <label class="label label-tablas">Ataque Bateador</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtOrden">Orden de Bateo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtOrden" value="<?=$hist_row['orden']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtTurnos">Turnos al Bateo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTurnos" value="<?=$hist_row['turno']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtStrikeBateador">Strike Out</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtStrikeBateador" value="<?=$hist_row['strike_bateador']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtBasesGanadas">Bases ganadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBasesGanadas" value="<?=$hist_row['bases_ganadas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtHitBateador">Hits</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtHitBateador" value="<?=$hist_row['hit_bateador']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtHomeRun">Home Run</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtHomeRun" value="<?=$hist_row['home_run']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtCarrerasAnotadas">Carreras Anotadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtCarrerasAnotadas" value="<?=$hist_row['carreras_anotadas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtBasesRobadas">Bases Robadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtBasesRobadas" value="<?=$hist_row['bases_robadas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtErroresCorredor">Errores de Corredor</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtErroresCorredor" value="<?=$hist_row['errores_corredor']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                    <label class="label " for="txtHitsLargo">Hit M&aacute;s Largo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtHitsLargo" value="<?=$hist_row['hits_largo']?>" class="wsize1 " />
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
