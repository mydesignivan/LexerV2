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
                    <label class="label label-form" for="txtClub"><span class="required">*</span>Club / Federacion</label>
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


                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtCity"><span class="required">*</span>Ciudad</label>
                    <input type="text" name="txtCity"  class="wsize2" tabindex="2" value="<?=$hist_row['city'] ?>" />
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

                 <!-- ========== Entrenador  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
                    <input type="text" name="txtEntrenador"  class="wsize2" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>
                 <!-- ========== Ranking Internacional  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtRankingInternacional"><span class="required">*</span>Ranking Internacional</label>
                    <input type="text" name="txtRankingInternacional"  class="wsize2" tabindex="2" value="<?=$hist_row['ranking_internacional'] ?>" />
                </div>
                 <!-- ========== Ranking Nacional  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtRankingNacional"><span class="required">*</span>Ranking Nacional</label>
                    <input type="text" name="txtRankingNacional"  class="wsize2" tabindex="2" value="<?=$hist_row['ranking_nacional'] ?>" />
                </div>
                 <!-- ========== Ranking Individual  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtRankingIndividual"><span class="required">*</span>Ranking Individual</label>
                    <input type="text" name="txtRankingIndividual"  class="wsize2" tabindex="2" value="<?=$hist_row['ranking_individual'] ?>" />
                </div>
                 <!-- ========== Ranking Dobles  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtRankingDoble"><span class="required">*</span>Ranking Dobles</label>
                    <input type="text" name="txtRankingDoble"  class="wsize2" tabindex="2" value="<?=$hist_row['ranking_dobles'] ?>" />
                </div>
                 <!-- ========== Otro Ranking  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtOtroRanking"><span class="required">*</span>Otro Ranking </label>
                    <input type="text" name="txtOtroRanking"  class="wsize2" tabindex="2" value="<?=$hist_row['otros_ranking'] ?>" />
                </div>



                <!-- ========== TITULO SINGLE =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Títulos Individuales </label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaTitulosSingles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoTitulosSingles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieTitulosSingles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtOponenteTitulosSingles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtResultadoTitulosSingles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaFinalesSingles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoFinalesSingles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieFinalesSingles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtOponenteFinalesSingles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtResultadoFinalesSingles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaTitulosDobles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoTitulosDobles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieTitulosDobles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTorneoParejaDobles" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtOponenteTitulosDobles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtResultadoTitulosDobles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaFinalesDobles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoFinalesDobles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieFinalesDobles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTorneoParejaFinalesDobles" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtOponenteFinalesDobles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtResultadoFinalesDobles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
                    <label class="label label-form" for="cboCategoriaDT"><span class="required">*</span>Otras Actividades</label>
                    <span>
                    <?=form_dropdown('cboActividades', $hist_row['cboActividades'], $hist_row['otras_actividades'], ' tabindex="14" onchange="Historial.TenisActividades(this)"');?>
                    </span>
                    <span class="<?=$hist_row['otras_actividades']>0?"":"hide";?> noinit">
                      <input type="text" name="txtOtrasActividadesOther"  class="wsize2" tabindex="2" value="<?=$hist_row['otras_actividades_other'] ?>" />
                    </span>
                </div>
                     <!-- ========== CATEGORIA  =========== -->
                <div class="trow <?=$hist_row['otras_actividades']==100 ? "" : "hide"; ?> noinit">
                    <label class="label label-form" for="cboCategoriaDT"><span class="required">*</span>Categoria DT</label>
                    <span>
                    <?=form_dropdown('cboCategoriaDT', $hist_row['cboCategoria'], $hist_row['categoria_actividades'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['categoria_actividades']>0?"":"hide";?> noinit">
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
                        <!-- ========== Finales Individuales =========== -->
                <div  class="trow tbl">
                    <label class="label label-tablas">Mejores Resultados Individuales</label>
                    <table  cellpadding="0" cellspacing="0">
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
                    foreach( $palmares_singles as $torneo_row ){?>
                            <tr <?php if( $torneo_row['palmares_id']!=0 ) echo 'id="trTorneo'.$torneo_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="txtFechaFinalesSingles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoFinalesSingles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieFinalesSingles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtOponenteFinalesSingles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtResultadoFinalesSingles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
                    <table cellpadding="0" cellspacing="0">
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
                    foreach( $palmares_dobles as $torneo_row ){?>
                            <tr <?php if( $torneo_row['palmares_id']!=0 ) echo 'id="trTorneo'.$torneo_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="txtFechaTitulosDobles" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtTorneoTitulosDobles" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <?=form_dropdown('cboSuperficieTitulosDobles', $torneo_row['cboSuperficie'], $torneo_row['superficie'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtTorneoParejaDobles" value="<?=$torneo_row['pareja']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtOponenteTitulosDobles" value="<?=$torneo_row['oponente']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtResultadoTitulosDobles" value="<?=$torneo_row['resultado']?>" class="wsize1 cvalores" />
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
