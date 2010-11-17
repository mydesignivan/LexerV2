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
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_1]', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1" class="hinput"');?>
                </div>
                <div class="trow "
                    <label class="label label-form" ><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_2]', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1" class="hinput"');?>
                </div>
                 <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2  hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>
                <!-- ========== POSICION  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Posicion</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[posicion]", $hist_row['cboPosicion'], $hist_row['posicion'], ' tabindex="14" onchange="Historial.SoftBallSeleccion(this);" class="hinput" ');?>
                    </span>
                </div>

                <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[city]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" >Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[country]', $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)"  class="hinput"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>

                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?>">
                    <label class="label label-form" >Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD]."[state]", $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]" class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>


                <!-- ========== Pitcher =========== -->
                <div class="pitcher_class trow tbl <?=$hist_row['posicion']!=1? "hide":""?> noinit">
                    <label class="label label-tablas">Defensa - Datos Promedios por Partido</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Partidos Jugados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[partidos_jugados_pitcher]" value="<?=$hist_row['partidos_jugados']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Strike Out Logrados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[strike]" value="<?=$hist_row['strike']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Bases Cedidas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bases_cedidas]" value="<?=$hist_row['bases_cedidas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Jugadores Golpeados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[jugadores_golpeados]" value="<?=$hist_row['jugadores_golpeados']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Hits</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[hits]" value="<?=$hist_row['hits']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Efectos de Bola</label>
                                </td>
                                <td class="cell2">
                                    <span>
                                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[efecto]', $hist_row['cboEfecto'], $hist_row['efecto'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                                    </span>
                                    <span class="<?=$hist_row['efecto']<0?"":"hide";?> noinit">
                                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[efecto_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['efecto_other'] ?>" />
                                    </span>
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Velocidad de Lanzamiento Promedio</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[velocidad]" value="<?=$hist_row['velocidad']?>" class="wsize1  hinput " />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- ========== OTROS NO PITCHER =========== -->
                <div class="all_pos_class trow tbl <?=$hist_row['posicion']!=1 && $hist_row['posicion']!=0 ? "":"hide"?> noinit hinput">
                    <label class="label label-tablas">Defensa - Datos Promedios por Partido</label>
                    <table id="tblDatos" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Partidos Jugados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[partidos_jugados]" value="<?=$hist_row['partidos_jugados']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Asistencias Logradas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[asistencias]" value="<?=$hist_row['asistencias']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores Cometidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[errores]" value="<?=$hist_row['errores']?>" class="wsize1 hinput" />
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
                                     <label class="label " >Orden de Bateo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[orden]" value="<?=$hist_row['orden']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Turnos al Bateo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[turno]" value="<?=$hist_row['turno']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Strike Out</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[strike_bateador]" value="<?=$hist_row['strike_bateador']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Bases ganadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bases_ganadas]" value="<?=$hist_row['bases_ganadas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Hits</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[hit_bateador]" value="<?=$hist_row['hit_bateador']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Home Run</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[home_run]" value="<?=$hist_row['home_run']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Carreras Anotadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[carreras_anotadas]" value="<?=$hist_row['carreras_anotadas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Bases Robadas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[bases_robadas]" value="<?=$hist_row['bases_robadas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Errores de Corredor</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[errores_corredor]" value="<?=$hist_row['errores_corredor']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                    <label class="label " >Hit M&aacute;s Largo</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[hits_largo]" value="<?=$hist_row['hits_largo']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
           <!-- ========== Observaciones  =========== -->
            <div class="trow">
                <label class="label label-form" ><span class="required">*</span>Observaciones</label>
                <textarea name="<?=$hist_row[TABLE_NAME_FIELD]?>[observaciones]" class="wsize2 hinput" tabindex="7"><?=$hist_row['observaciones']?></textarea>
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
                                <?=form_dropdown($palmares_row[TABLE_NAME_FIELD].'[year]', $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[titulo]" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[equipo]" value="<?=$palmares_row['equipo']?>" class="wsize2" />
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
