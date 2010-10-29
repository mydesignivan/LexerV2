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
                    <?=form_dropdown('cboTemporada1', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1"');?>
                </div>
                <div class="trow "
                    <label class="label label-form" for="cboTemporada"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown('cboTemporada2', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1"');?>
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

                <!-- ========== POSICION  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboPosicion"><span class="required">*</span>Posicion</label>
                    <span>
                    <?=form_dropdown('cboPosicion', $hist_row['cboPosicion'], $hist_row['posicion'], ' tabindex="14" ');?>
                    </span>
                </div>



                <!-- ========== Temporada =========== -->
                <div id="contDatos" class="trow tbl">
                    <label class="label label-tablas">Datos Promedios por Temporada</label>
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
                                     <label class="label " for="txtGoles">goles_marcados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtGoles" value="<?=$hist_row['goles_marcados']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtLanzamientos">lanzamientos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtLanzamientos" value="<?=$hist_row['lanzamientos']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtAtaques">ataques</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAtaques" value="<?=$hist_row['ataques']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPerdidas">perdidas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPerdidas" value="<?=$hist_row['perdidas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtAsistencias">asistencias</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAsistencias" value="<?=$hist_row['asistencias']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtRecuperaciones">recuperaciones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtRecuperaciones" value="<?=$hist_row['recuperaciones']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtParciales">parciales</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtParciales" value="<?=$hist_row['parciales']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtAmonestaciones">amonestaciones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtAmonestaciones" value="<?=$hist_row['amonestaciones']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtExpulsiones">expulsiones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtExpulsiones" value="<?=$hist_row['expulsiones']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtDescalificaciones">descalificaciones</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtDescalificaciones" value="<?=$hist_row['descalificaciones']?>" class="wsize1 " />
                                </td>
                            </tr>
                            
                            

                <?php foreach( $hist_row['datos'] as $datos_row ){?>
                        <tr <?php if( $datos_row['datos_id']!=0 ) echo 'id="trDatos'.$datos_row['datos_id'].'"'?>>
                                <td class="cell1">
                                      <input type="text" name="txtOpcion" value="<?=$datos_row['opcion']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtDato" value="<?=$datos_row['dato']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" />
                                </td>
                        </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRow(this,0,'.fixed')" />
                </div>



           <!-- ========== comentarios  =========== -->

            <div class="trow">
                <label class="label label-form" for="txtOfensivo"><span class="required">*</span>Comentarios</label>
                <input type="text" name="txtOfensivo" class="wsize2" tabindex="2" value="<?=$hist_row['comentarios'] ?>" />
            </div>

                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Competici&oacute;n</td>
                                <td class="cell2">9 Mts.</td>
                                <td class="cell3">6 Mts.</td>
                                <td class="cell4">7 Mts.</td>
                                <td class="cell4">Contraataque</td>
                                <td class="cell4">Pivote</td>
                                <td class="cell4">Extremo</td>
                                <td class="cell4">Fly</td>
                                <td class="cell4">Global</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['lanzamientos_lista'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['handball_id']!=0 ) echo 'id="trTorneo'.$torneo_row['handball_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="txtCompeticion" value="<?=$torneo_row['competicion']?>" class="wsize1" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txt9mts" value="<?=$torneo_row['goles_9']." / ".$torneo_row['lanzamientos_9']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txt6mts" value="<?=$torneo_row['goles_6']." / ".$torneo_row['lanzamientos_6']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txt7mts" value="<?=$torneo_row['goles_7']." / ".$torneo_row['lanzamientos_7']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtContrataque" value="<?=$torneo_row['goles_contrataque']." / ".$torneo_row['lanzamientos_contrataque']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtPivote" value="<?=$torneo_row['goles_pivote']." / ".$torneo_row['lanzamientos_pivote']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="txtContrataque" value="<?=$torneo_row['goles_extremo']." / ".$torneo_row['lanzamientos_extremo']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="txtFly" value="<?=$torneo_row['goles_fly']." / ".$torneo_row['lanzamientos_fly']?>" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell9">
                                    <input type="text" name="txtGlobal" value="" class="wsize1 cformatxy" />
                                </td>
                                <td class="cell10"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>

                    <?php }?>
                            <tr class="fixed" >
                                <td class="cell1">
                                    <label class="label label-form" for="txtRanking">Totales</label>
                                </td>
                                <td class="cell2">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell3">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell4">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell5">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell6">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell7">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell8">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell9">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell10">
                                    <label class="label label-form" ></label>
                                    <label class="label label-form" ></label>
                                </td>
                            </tr>
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
                    <label class="label label-tablas">Logros / Récords / Títulos Nacionales / Títulos Internacionales / Otros</label>
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
