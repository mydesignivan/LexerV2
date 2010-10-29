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
                <!-- ========== SUPERFICIE  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboPosicion"><span class="required">*</span>Superficie</label>
                    <span>
                    <?=form_dropdown('cboSuperficie', $hist_row['cboSuperficie'], $hist_row['superficie'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['superficie']>0?"":"hide";?>">
                      <input type="text" name="txtSuperficieOther"  class="wsize2" tabindex="2" value="<?=$hist_row['superficie_other'] ?>" />
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
                                     <label class="label " for="txtPartidosTitular">Partidos como Titular</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPartidosTitular" value="<?=$hist_row['partidos_titular']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtMinutosCancha">Goles Convertidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtMinutosCancha" value="<?=$hist_row['goles_convertidos']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtGolesMarcados">Penales Ejecutados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtGolesMarcados" value="<?=$hist_row['penales_ejecutados']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPenalesEjecutados">Penales Convertidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPenalesEjecutados" value="<?=$hist_row['penales_convertidos']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPenalesConvertidos">Tarjetas Verdes</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPenalesConvertidos" value="<?=$hist_row['tarjetas_verdes']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPenalesAtajados">Tarjetas Amarillas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPenalesAtajados" value="<?=$hist_row['tarjetas_amarillas']?>" class="wsize1 " />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " for="txtPenalesAtajados">Tarjetas Rojas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtPenalesAtajados" value="<?=$hist_row['tarjetas_rojas']?>" class="wsize1 " />
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

            <!-- ========== DEFENSIVA  =========== -->
            <div class="trow "
                <label class="label label-form" for="cboDefensivo"><span class="required">*</span>Defensivo</label>
                <?=form_dropdown('cboDefensivo', $hist_row['cboDefensivo'], $hist_row['corner_defensivo'], ' tabindex="1"');?>
            </div>
            <div class="trow">
                <label class="label label-form" for="txtDefensivo"><span class="required">*</span>Observaciones</label>
                <input type="text" name="txtDefensivo" class="wsize2" tabindex="2" value="<?=$hist_row['observaciones_defensivo'] ?>" />
            </div>
           <!-- ========== OFENSIVA  =========== -->
            <div class="trow "
                <label class="label label-form" for="cboOfensivo"><span class="required">*</span>Ofensivo</label>
                <?=form_dropdown('cboOfensivo', $hist_row['cboOfensivo'], $hist_row['corner_defensivo'], ' tabindex="1"');?>
            </div>
            <div class="trow">
                <label class="label label-form" for="txtOfensivo"><span class="required">*</span>Observaciones</label>
                <input type="text" name="txtOfensivo" class="wsize2" tabindex="2" value="<?=$hist_row['observaciones_ofensivo'] ?>" />
            </div>

                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Puesto</td>
                                <td class="cell4">Lugar</td>
                                <td class="cell4">OBservaciones</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['torneos'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['torneos_id']!=0 ) echo 'id="trTorneo'.$torneo_row['torneos_id'].'"'?>>
                                <td class="cell1">
                                    <?=form_dropdown('cboTemporada', $torneo_row['cboTemporada'], $torneo_row['year'], ' tabindex="1"');?>
                                    
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneo" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtPuestoTorneo" value="<?=$torneo_row['puesto']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtLugarTorneo" value="<?=$torneo_row['lugar']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtObservacionesrTorneo" value="<?=$torneo_row['observaciones']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRow(this)" />
                </div>
                <!-- ========== OTRAS ACTIVIDADES  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCategoriaDT"><span class="required">*</span>Otras Actividades</label>
                    <span>
                    <?=form_dropdown('cboActividades', $hist_row['cboActividades'], $hist_row['otras_actividades'], ' tabindex="14" onchange="Historial.hockeyActividades(this)"');?>
                    </span>
                    <span class="<?=$hist_row['otras_actividades']>0?"":"hide";?>">
                      <input type="text" name="txtOtrasActividadesOther"  class="wsize2" tabindex="2" value="<?=$hist_row['otras_actividades_other'] ?>" />
                    </span>
                </div>
                     <!-- ========== CATEGORIA  =========== -->
                <div class="trow <?=$hist_row['otras_actividades']==100 ? "" : "hide"; ?>">
                    <label class="label label-form" for="cboCategoriaDT"><span class="required">*</span>Categoria DT</label>
                    <span>
                    <?=form_dropdown('cboCategoriaDT', $hist_row['cboCategoria'], $hist_row['categoria_actividades'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['categoria_actividades']>0?"":"hide";?>">
                      <input type="text" name="txtCategoriaActividadesOther"  class="wsize2" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
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
