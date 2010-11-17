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


                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club / Federacion</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
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
                    <label class="label label-form" for="cboCountry">Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[country]", $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)" class="hinput"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" >Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD]."[state]", $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]"  class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>

                 <!-- ========== Entrenador  =========== -->
                <div class="trow">
                    <label class="label label-form"><span class="required">*</span>Entrenador</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[entrenador]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>
                 <!-- ========== Ranking Internacional  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ranking Internacional</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ranking_internacional]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['ranking_internacional'] ?>" />
                </div>
                 <!-- ========== Ranking Nacional  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ranking Nacional</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ranking_nacional]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['ranking_nacional'] ?>" />
                </div>
                 <!-- ========== Ranking Individual  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ranking Individual</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ranking_individual]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['ranking_individual'] ?>" />
                </div>
                 <!-- ========== Ranking Dobles  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ranking Dobles</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[ranking_dobles]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['ranking_dobles'] ?>" />
                </div>
                 <!-- ========== Otro Ranking  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Otro Ranking </label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[otros_ranking]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['otros_ranking'] ?>" />
                </div>



                <!-- ========== TITULO SINGLE =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Títulos Individuales </label>
                    <table name="tblTitulosIndividuales" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Oponente</td>
                                <td class="cell5">Resultado</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['titulos_singles'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['titulossingles_id']!=0 ) echo 'id="trTorneo'.$torneo_row['titulossingles_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD].'[superficie]', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>

                         <!-- ========== Finales Individuales =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Finales Individuales</label>
                    <table name="tblFinalIndividual" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Oponente</td>
                                <td class="cell5">Resultado</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['finales_singles'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['finalessingles_id']!=0 ) echo 'id="trTorneo'.$torneo_row['finalessingles_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD].'[superficie]', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>


                <!-- ========== TITULO DOBLES =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Títulos Dobles </label>
                    <table name="tblTituloDoble" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Pareja</td>
                                <td class="cell5">Oponente</td>
                                <td class="cell6">Resultado</td>
                                <td class="cell7">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['titulos_dobles'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['titulosdobles_id']!=0 ) echo 'id="trTorneo'.$torneo_row['titulosdobles_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD].'[superficie]', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[pareja]" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>

                         <!-- ========== Finales DOBLES =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Finales Dobles</label>
                    <table name="tblFinalDoble" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Oponente</td>
                                <td class="cell5">Resultado</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['finales_dobles'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['finalesdobles_id']!=0 ) echo 'id="trTorneo'.$torneo_row['finalesdobles_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD].'[superficie]', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[pareja]" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>

                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>

                

                <!-- ========== OTRAS ACTIVIDADES  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Otras Actividades</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[otras_actividades]', $hist_row['cboActividades'], $hist_row['otras_actividades'], ' tabindex="14" onchange="Historial.TenisActividades(this)" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['otras_actividades']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[otras_actividades_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['otras_actividades_other'] ?>" />
                    </span>
                </div>
                     <!-- ========== CATEGORIA  =========== -->
                <div class="trow <?=$hist_row['otras_actividades']<0 ? "" : "hide"; ?> noinit">
                    <label class="label label-form" ><span class="required">*</span>Categoria DT</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria_actividades]', $hist_row['cboCategoria'], $hist_row['categoria_actividades'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria_actividades']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_actividades_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
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
                        <!-- ========== Finales Individuales =========== -->
                <div  class="trow tbl">
                    <label class="label label-tablas">Mejores Resultados Individuales</label>
                    <table  name="tblPalmaresIndividuales" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Oponente</td>
                                <td class="cell5">Resultado</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares_singles as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[superficie]", $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>


                <!-- ========== TITULO DOBLES =========== -->
                <div class="trow tbl">
                    <label class="label label-tablas">Mejores Resultados Dobles </label>
                    <table name="tblPalmaresDobles" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Superficie</td>
                                <td class="cell4">Pareja</td>
                                <td class="cell5">Oponente</td>
                                <td class="cell6">Resultado</td>
                                <td class="cell7">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares_dobles as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown($palmares_row[TABLE_NAME_FIELD].'[superficie]', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[pareja]" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[oponente]" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[resultado]" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                </div>

        </div>
    </div>
</div>
