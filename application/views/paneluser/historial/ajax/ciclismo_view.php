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
                    <label class="label label-form"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_1]', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1" class="hinput" ');?>
                </div>
                <div class="trow "
                    <label class="label label-form"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_2]', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1" class="hinput"');?>
                </div>

                <!-- ========== INSTITUCION  =========== -->
                <div class="trow">
                    <label class="label label-form"><span class="required">*</span>Representa a</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[institucion]', $hist_row['cboInstitucion'], $hist_row['institucion'], ' tabindex="14" onchange="LibForms.isOther(this);"  class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['institucion']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[institucion_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['institucion_other'] ?>" />
                    </span>
                </div>

                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Institucion</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[nombre_institucion]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['nombre_institucion'] ?>" />
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

                <!-- ========== Especialidad  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Especialidad</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[especialidad]', $hist_row['cboEspecialidad'], $hist_row['especialidad'], ' tabindex="14" onchange="Historial.ciclismoEspecialidad(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['especialidad']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[especialidad_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['especialidad_other'] ?>" />
                    </span>
                </div>

                <!-- ========== MODALIDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Modalidad</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[modalidad]', $hist_row['cboModalidad'], $hist_row['modalidad'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['modalidad']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[modalidad_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['modalidad_other'] ?>" />
                    </span>
                </div>



          <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Carreras Nacionales</label>
                    <table name="tblNacionales" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Mod.</td>
                                <td class="cell3">Carrera</td>
                                <td class="cell4">Etapa</td>
                                <td class="cell5">Pos</td>
                                <td class="cell6_">Ptos</td>
                                <td class="cell7">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['nacionales'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['nacionales_id']!=0 ) echo 'id="trTorneo'.$torneo_row['nacionales_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[mod]" value="<?=$torneo_row['mod']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[carrera]" value="<?=$torneo_row['carrera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[etapa]" value="<?=$torneo_row['etapa']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[pos]" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puntos]" value="<?=$torneo_row['puntos']?>" class="wsize1 cvalores" onkeyup="Historial.sumaCol(this, '.cell6', '.res1')" />
                                </td>
                                <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                            <tr class="fix_class">
                                <td class="cell1" colspan="5">
                                     <label class="label label-form">Puntos Totales</label>
                                </td>
                                <td class="cell2" >
                                    <label class="label label-form res1"></label>
                                </td>
                                <td class="cell3" >
                                    <label class="label label-form"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this, 100 , '.cell1', '.fix_class');" />
                </div>
          <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Carreras Internacionales</label>
                    <table name="tblInternacionales" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Mod.</td>
                                <td class="cell3">Carrera</td>
                                <td class="cell4">Etapa</td>
                                <td class="cell5">Pos</td>
                                <td class="cell6">Ptos</td>
                                <td class="cell7">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['internacionales'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['internacionales_id']!=0 ) echo 'id="trTorneo'.$torneo_row['internacionales_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[fecha]" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[mod]" value="<?=$torneo_row['mod']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[carrera]" value="<?=$torneo_row['carrera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[etapa]" value="<?=$torneo_row['etapa']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[pos]" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$torneo_row[TABLE_NAME_FIELD]?>[puntos]" value="<?=$torneo_row['puntos']?>" class="wsize1 cvalores" onkeyup="Historial.sumaCol(this, '.cell6', '.res1')" />
                                </td>
                                <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                             <tr class="fix_class">
                                <td class="cell1" colspan="5">
                                     <label class="label label-form">Puntos Totales</label>
                                </td>
                                <td class="cell2" >
                                    <label class="label label-form res1"></label>
                                </td>
                                <td class="cell3" >
                                    <label class="label label-form"></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this, 100 , '.cell1', '.fix_class');" />
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
              <div id="contTorneo" class="trow tbl">
                  <label class="label label-tablas">Triunfos M&aacute;s Destacados</label>
                    <table name="tblPalmares" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Carrera</td>
                                <td class="cell3">Pos</td>
                                <td class="cell4">Ptos</td>
                                <td class="cell5">Acci&oacute;n</td>
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
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[carrera]" value="<?=$palmares_row['carrera']?>" class="wsize1 cvalores" />

                                <td class="cell3">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[pos]" value="<?=$palmares_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD]?>[puntos]" value="<?=$palmares_row['puntos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this, 100 , '.cell1');" />
                </div>
        </div>
    </div>
</div>
