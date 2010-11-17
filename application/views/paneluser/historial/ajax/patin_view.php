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

                <!-- ========== ESPECIALIDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Especialidad</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[especialidad]', $hist_row['cboEspecialidad'], $hist_row['especialidad'], ' tabindex="14" onchange="Historial.patinEspecialidad(this);" class="hinput" ');?>
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
                </div>

                <!-- ========== ENTRENADOR  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Entrenador</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[entrenador]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>

                <!-- ========== OTROS_DATOS  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Otros Datos</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[otros_datos]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['otros_datos'] ?>" />
                </div>


                <div class="trow <?=$hist_row['especialidad']==1?"":"hide temp ";?> div_artistico noinit">
                    <!-- ========== SUPERFICIE  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Superficie</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[superficie]', $hist_row['cboSuperficie'], $hist_row['superficie'], ' tabindex="14" class="hinput" ');?>
                    </div>

                    <!-- ========== CATEGORIA  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Categoria</label>
                        <span>
                       <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoriaVelocidad'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);"  class="hinput"');?>
                        </span>
                        <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                          <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                        </span>
                    </div>


                    <!-- ========== MODALIDAD  =========== -->
                    <div class="trow">
                        <label class="label label-form" for="cboModalidadArtistico"><span class="required">*</span>Modalidad</label>
                        <span>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[modalidad]', $hist_row['cboModalidadArtistico'], $hist_row['modalidad'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                        </span>
                        <span class="<?=$hist_row['modalidad']<0?"":"hide";?> noinit">
                          <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[modalidad_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['modalidad_other'] ?>" />
                        </span>
                    </div>
                    <!-- ========== ARTISTICO PAREJA  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Pareja</label>
                        <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[pareja]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['pareja'] ?>" />
                    </div>
               <!-- ========== Torneos =========== -->
                    <div id="contTorneo" class="trow tbl">
                        <label class="label label-tablas">Competencias</label>
                        <table name="tblTorneos" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <td class="cell1">Fecha</td>
                                    <td class="cell2">Torneo</td>
                                    <td class="cell3">Ciudad</td>
                                    <td class="cell4">Pais</td>
                                    <td class="cell4">Puntaje</td>
                                    <td class="cell4">Puesto</td>
                                    <td class="cell6">Acci&oacute;n</td>
                                </tr>
                            </thead>
                            <tbody>

                    <?php
                        foreach( $hist_row['artistica_competencias'] as $torneo_row ){?>
                                <tr <?php if( $torneo_row['artisticocompetencias_id']!=0 ) echo 'id="trTorneo'.$torneo_row['artisticocompetencias_id'].'"'?>>
                                    <td class="cell1">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                    </td>
                                    <td class="cell2">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell3">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[city]" value="<?=$torneo_row['city']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell4">
                                          <?=form_dropdown($torneo_row[TABLE_NAME_FIELD]."[country]", $torneo_row['cboCountry'], $torneo_row['country'], ' tabindex="14" ');?>
                                    </td>
                                    <td class="cell5">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puntaje]" value="<?=$torneo_row['puntaje']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell6">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puesto]" value="<?=$torneo_row['puesto']?>" class="wsize1 cvalores" />
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


                <div class="trow <?=$hist_row['especialidad']==2?"":"hide temp";?> div_velocidad  noinit">
                    <!-- ========== SUPERFICIE  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Superficie</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[superficie]", $hist_row['cboSuperficie'], $hist_row['superficie'], ' tabindex="14" class="hinput"');?>
                    </div>

                    <!-- ========== CATEGORIA  =========== -->
                    <div class="trow ">
                        <label class="label label-form" for="cboCategoriaArtistico"><span class="required">*</span>Categoria</label>
                        <span>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[categoria]", $hist_row['cboCategoriaArtistico'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this); class="hinput"');?>
                        </span>
                        <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                          <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                        </span>
                    </div>

                    <!-- ========== MODALIDAD  =========== -->
                    <div class="trow">
                        <label class="label label-form" for="cboModalidadArtistico"><span class="required">*</span>Modalidad</label>
                        <span>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[modalidad]', $hist_row['cboModalidadArtistico'], $hist_row['modalidad'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                        </span>
                        <span class="<?=$hist_row['modalidad']<0?"":"hide";?> noinit">
                          <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[modalidad_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['modalidad_other'] ?>" />
                        </span>
                    </div>
                    <!-- ========== VELOCIDAD EQUIPO INTERNACIONAL  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Equipo Internacional</label>
                        <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[equipo_internacional]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['equipo_internacional'] ?>" />
                    </div>
                    <!-- ========== VELOCIDAD EQUIPO NACIONAL  =========== -->
                    <div class="trow">
                        <label class="label label-form" ><span class="required">*</span>Equipo Nacional</label>
                        <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[equipo_nacional]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['equipo_nacional'] ?>" />
                    </div>
          <!-- ========== Torneos =========== -->
                    <div id="contTorneo" class="trow tbl">
                        <label class="label label-tablas">Competencias</label>
                        <table name="tblTorneos" cellpadding="0" cellspacing="0">
                            <thead>
                                <tr>
                                    <td class="cell1">Fecha</td>
                                    <td class="cell2">Torneo</td>
                                    <td class="cell3">Ciudad</td>
                                    <td class="cell4">Pais</td>
                                    <td class="cell4">Tiempo</td>
                                    <td class="cell4">Puesto</td>
                                    <td class="cell6">Acci&oacute;n</td>
                                </tr>
                            </thead>
                            <tbody>

                    <?php
                        foreach( $hist_row['velocidad_competencias'] as $torneo_row ){?>
                                <tr <?php if( $torneo_row['velocidadcompetencias_id']!=0 ) echo 'id="trTorneo'.$torneo_row['velocidadcompetencias_id'].'"'?>>
                                    <td class="cell1">
                                           <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                    </td>
                                    <td class="cell2">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[torneo]" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell3">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[city]" value="<?=$torneo_row['city']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell4">
                                          <?=form_dropdown($torneo_row[TABLE_NAME_FIELD]."[country]", $torneo_row['cboCountry'], $torneo_row['country'], ' tabindex="14" ');?>
                                    </td>
                                    <td class="cell5">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[tiempo]" value="<?=$torneo_row['tiempo']?>" class="wsize1 cvalores" />
                                    </td>
                                    <td class="cell6">
                                        <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puesto]" value="<?=$torneo_row['puesto']?>" class="wsize1 cvalores" />
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
                                <td class="cell2">Mejores Desempe&ntilde;os</td>
                                <td class="cell3">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                       <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $palmares_row['fecha']?$palmares_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[mejores_desempenos]" value="<?=$palmares_row['mejores_desempenos']?>" class="wsize2" />
                                </td>


                                <td class="cell3"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRow(this)" />
                </div>
                                <!-- ========== VELOCIDAD EQUIPO INTERNACIONAL  =========== -
                <div class="trow">
                    <label class="label label-form" for="txtPalmaresObservaciones"><span class="required">*</span>Observaciones</label>
                    <textarea name="txtPalmaresObservaciones" class="wsize2"></textarea>
                </div> 
                                -->
        </div>
    </div>
</div>
