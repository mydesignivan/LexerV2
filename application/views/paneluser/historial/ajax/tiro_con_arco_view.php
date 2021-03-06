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
                 <!-- ========== AÑO  =========== -->
                <div class="trow "
                    <label class="label label-form" for="cboYear"><span class="required">*</span>Temporada</label>
                     <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[year]", $hist_row['cboTemporada'], $hist_row['year'],  'class="hinput" tabindex="1"');?>
                </div>


                <div class="trow">
                    <label class="label label-form" for="txtClub"><span class="required">*</span>Club/Feder./Asoc.</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]"class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[categoria]", $hist_row['cboCategoria'], $hist_row['categoria'], 'class="hinput" tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>


                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[city]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboCountry">Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[country]", $hist_row['cboCountry'], $hist_row['country'], 'class="hinput" tabindex="14" onchange="Historial.get_combo_states(this)"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>
                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" >Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD]."[state]", $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]" class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>

                <!-- ========== ESPECIALIDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboPosicion"><span class="required">*</span>Especialidad</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[especialidad]", $hist_row['cboEspecialidad'], $hist_row['especialidad'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['especialidad']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[especialidad_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['especialidad_other'] ?>" />
                    </span>
                </div>



                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Resultados</label>
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Categoria</td>
                                <td class="cell4">Ciudad</td>
                                <td class="cell5">Pa&iacute;s</td>
                                <td class="cell6">club</td>
                                <td class="cell7">Puntaje</td>
                                <td class="cell8">Posici&oacute;n</td>
                                <td class="cell9">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['torneos'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['torneos_id']!=0 ) echo 'id="trTorneo'.$torneo_row['torneos_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <span>
                                        <? print_array($torneo_row);?>
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD]."[categoria]", $torneo_row['cboCategoria'], $torneo_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$torneo_row['categoria']>-1?"hide":"";?> noinit">
                                      <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2" tabindex="2" value="<?=$torneo_row['categoria_other'] ?>" />
                                    </span>
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[city]" value="<?=$torneo_row['city']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <?=form_dropdown($torneo_row[TABLE_NAME_FIELD]."[country]", $torneo_row['cboCountry'], $torneo_row['country'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[club]" value="<?=$torneo_row['club']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puntaje]" value="<?=$torneo_row['puntaje']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[posicion]" value="<?=$torneo_row['posicion']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell9"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
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
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Mejores Logros</td>
                                <td class="cell3">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $palmares_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[logros]" value="<?=$palmares_row['logros']?>" class="wsize2" />
                                </td>
                                <td class="cell3"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
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
