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
                    <?=form_dropdown('cboTemporada_!', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1"');?>
                </div>
                <div class="trow "
                    <label class="label label-form" for="cboTemporada"><span class="required">*</span>Temporada</label>
                    <?=form_dropdown('cboTemporada_2', $hist_row['cboTemporada'], $hist_row['temporada_2'], ' tabindex="1"');?>
                </div>

                <!-- ========== INSTITUCION  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboInstitucion"><span class="required">*</span>Representa a</label>
                    <span>
                    <?=form_dropdown('cboInstitucion', $hist_row['cboInstitucion'], $hist_row['institucion'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['institucion']>0?"":"hide";?> noinit">
                      <input type="text" name="txtInstitucionOther"  class="wsize2" tabindex="2" value="<?=$hist_row['institucion_other'] ?>" />
                    </span>
                </div>

                <div class="trow">
                    <label class="label label-form" for="txtInstitucionb"><span class="required">*</span>Institucion</label>
                    <input type="text" name="txtInstitucion" id="txtClub" class="wsize2" tabindex="2" value="<?=$hist_row['nombre_institucion'] ?>" />
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
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" for="cboStates">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown('cboStates', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="cboOriginStates" id="cboOriginStates" class="jq-select" tabindex="15"></select>
                    <?php }?>
                </div>

                <!-- ========== Especialidad  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboEspecialidad"><span class="required">*</span>Especialidad</label>
                    <span>
                    <?=form_dropdown('cboEspecialidad', $hist_row['cboEspecialidad'], $hist_row['especialidad'], ' tabindex="14" onchange="Historial.ciclismoEspecialidad(this);"');?>
                    </span>
                    <span class="<?=$hist_row['especialidad']>0?"":"hide";?> noinit">
                      <input type="text" name="txtEspecialidadOther"  class="wsize2" tabindex="2" value="<?=$hist_row['especialidad_other'] ?>" />
                    </span>
                </div>

                <!-- ========== MODALIDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
                    <span>
                    <?=form_dropdown('cboModalidad', $hist_row['cboModalidad'], $hist_row['modalidad'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['modalidad']>0?"":"hide";?> noinit">
                      <input type="text" name="txtModalidadOther"  class="wsize2" tabindex="2" value="<?=$hist_row['modalidad_other'] ?>" />
                    </span>
                </div>



          <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Carreras Nacionales</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaNacionales" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtModNacionales" value="<?=$torneo_row['mod']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtCarreraNacionales" value="<?=$torneo_row['carrera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtEtapasNacionales" value="<?=$torneo_row['etapa']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtPosNacionales" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtPtosNacionales" value="<?=$torneo_row['puntos']?>" class="wsize1 cvalores" onkeyup="Historial.sumaCol(this, '.cell6', '.res1')" />
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
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaInternacionales" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtModInternacionales" value="<?=$torneo_row['mod']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtCarreraInternacionales" value="<?=$torneo_row['carrera']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtEtapasInternacionales" value="<?=$torneo_row['etapa']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="txtPosInternacionales" value="<?=$torneo_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtPtosInternacionales" value="<?=$torneo_row['puntos']?>" class="wsize1 cvalores" onkeyup="Historial.sumaCol(this, '.cell6', '.res1')" />
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
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
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
                                    <input type="text" name="txtFechaInternacionales" value="<?=date('d-m-Y', $palmares_row['fecha']?$palmares_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtCarreraInternacionales" value="<?=$palmares_row['carrera']?>" class="wsize1 cvalores" />

                                <td class="cell3">
                                    <input type="text" name="txtPosInternacionales" value="<?=$palmares_row['pos']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtPtosInternacionales" value="<?=$palmares_row['puntos']?>" class="wsize1 cvalores" />
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
