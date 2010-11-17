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


                <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
                
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                   <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);"  class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
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

                <!-- ========== POSICION  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Posicion</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[posicion]', $hist_row['cboPosicion'], $hist_row['posicion'], ' tabindex="14" class="hinput"');?>
                    </span>
                </div>

                <!-- ========== SUPERFICIE  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Superficie</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[superficie]', $hist_row['cboSuperficie'], $hist_row['superficie'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['superficie'] < 0 ? "" : "hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[superficie_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['superficie_other'] ?>" />
                    </span>
                </div>


                <!-- ========== Temporada =========== -->
                <div id="contDatos" class="trow tbl">
                    <label class="label label-tablas">Datos Promedios por Temporada</label>
                    <table name="tblDatos" cellpadding="0" cellspacing="0">
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
                                     <label class="label " >Partidos como Titular</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[partidos_titular]" value="<?=$hist_row['partidos_titular']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Goles Convertidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[goles_convertidos]" value="<?=$hist_row['goles_convertidos']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Penales Ejecutados</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[penales_ejecutados]" value="<?=$hist_row['penales_ejecutados']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Penales Convertidos</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[penales_convertidos]" value="<?=$hist_row['penales_convertidos']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Tarjetas Verdes</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[tarjetas_verdes]" value="<?=$hist_row['tarjetas_verdes']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Tarjetas Amarillas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[tarjetas_amarillas]" value="<?=$hist_row['tarjetas_amarillas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            <tr class="fixed">
                                <td class="cell1">
                                     <label class="label " >Tarjetas Rojas</label>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[tarjetas_rojas]" value="<?=$hist_row['tarjetas_rojas']?>" class="wsize1 hinput" />
                                </td>
                            </tr>
                            
                            

                <?php foreach( $hist_row['datos'] as $datos_row ){?>
                        <tr <?php if( $datos_row['datos_id']!=0 ) echo 'id="trDatos'.$datos_row['datos_id'].'"'?>>
                                <td class="cell1">
                                      <input type="text" name="<?=$datos_row[TABLE_NAME_FIELD]?>[opcion]" value="<?=$datos_row['opcion']?>" class="wsize1 " />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$datos_row[TABLE_NAME_FIELD]?>[dato]" value="<?=$datos_row['dato']?>" class="wsize1 " />
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
                <label class="label label-form" ><span class="required">*</span>Defensivo</label>
                <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[corner_defensivo]', $hist_row['cboDefensivo'], $hist_row['corner_defensivo'], ' tabindex="1" class="hinput"');?>
            </div>
            <div class="trow">
                <label class="label label-form" ><span class="required">*</span>Observaciones</label>
                <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[observaciones_defensivo]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['observaciones_defensivo'] ?>" />
            </div>
           <!-- ========== OFENSIVA  =========== -->
            <div class="trow "
                <label class="label label-form" for="cboOfensivo"><span class="required">*</span>Ofensivo</label>
                <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[corner_ofensivo]', $hist_row['cboOfensivo'], $hist_row['corner_ofensivo'], ' tabindex="1" class="hinput"');?>
            </div>
            <div class="trow">
                <label class="label label-form" ><span class="required">*</span>Observaciones</label>
                <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[observaciones_ofensivo]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['observaciones_ofensivo'] ?>" />
            </div>

                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD].'[year]', $torneo_row['cboTemporada'], $torneo_row['year'], ' tabindex="1"');?>
                                    
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puesto]" value="<?=$torneo_row['puesto']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[lugar]" value="<?=$torneo_row['lugar']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[observaciones]" value="<?=$torneo_row['observaciones']?>" class="wsize1 cvalores" />
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
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[otras_actividades]', $hist_row['cboActividades'], $hist_row['otras_actividades'], ' tabindex="14" onchange="Historial.hockeyActividades(this)" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['otras_actividades']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[otras_actividades_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['otras_actividades_other'] ?>" />
                    </span>
                </div>
                     <!-- ========== CATEGORIA  =========== -->
                <div class="trow <?=$hist_row['otras_actividades']==100 ? "" : "hide"; ?> noinit">
                    <label class="label label-form" ><span class="required">*</span>Categoria DT</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria_actividades]', $hist_row['cboCategoria'], $hist_row['categoria_actividades'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria_actividades']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_actividades_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_actividades_other'] ?>" />
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
