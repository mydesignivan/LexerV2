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

                <!-- ========== DETALLE  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtDetalle"><span class="required">*</span>Detalle</label>
                    <input type="text" name="txtDetalle" class="wsize2" tabindex="2" value="<?=$hist_row['detalle'] ?>" />
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
                    <label class="label label-form" for="cboState">Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown('cboState', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="cboState"  class="jq-select" tabindex="15"></select>
                    <?php }?>
                </div>


                <!-- ========== MODALIDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" for="cboPosicion"><span class="required">*</span>Superficie</label>
                    <span>
                    <?=form_dropdown('cboSuperficie', $hist_row['cboModalidad'], $hist_row['modalidad'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                    </span>
                    <span class="<?=$hist_row['modalidad']>0?"":"hide";?> noinit" >
                      <input type="text" name="txtModalidadOther"  class="wsize2" tabindex="2" value="<?=$hist_row['modalidad_other'] ?>" />
                    </span>
                </div>

                <!-- ========== ENTRENADOR  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
                    <input type="text" name="txtEntrenador" class="wsize2" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>
                <!-- ========== OTROS DATOS  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtOtros"><span class="required">*</span>Otros datos</label>
                    <input type="text" name="txtOtros" class="wsize2" tabindex="2" value="<?=$hist_row['otros_datos'] ?>" />
                </div>

             
                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Prueba</td>
                                <td class="cell2">Marca</td>
                                <td class="cell3">Crono</td>
                                <td class="cell4">Puesto</td>
                                <td class="cell5">Piscina</td>
                                <td class="cell6">Fecha</td>
                                <td class="cell7">Torneo</td>
                                <td class="cell8">Ciudad</td>
                                <td class="cell9">Pa&iacute;s</td>
                                <td class="cell10">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['competencias'] as $torneo_row ){?>
                            <tr <?php if( $torneo_row['competencia_id']!=0 ) echo 'id="trTorneo'.$torneo_row['competencia_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                    <?=form_dropdown('cboPrueba', $torneo_row['cboPrueba'], $torneo_row['prueba'], ' tabindex="14"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtMarca" value="<?=$torneo_row['marca']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtCrono" value="<?=$torneo_row['crono']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtPuesto" value="<?=$torneo_row['puesto']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <?=form_dropdown('cboPiscina', $torneo_row['cboPiscina'], $torneo_row['piscina'], ' tabindex="14"');?>
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtFechaTorneo" value="<?=date('d-m-Y', $torneo_row['fecha']?$torneo_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="txtTorneo" value="<?=$torneo_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="txtCity" value="<?=$torneo_row['city']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell9">
                                    <?=form_dropdown('cboCountry', $torneo_row['cboCountry'], $torneo_row['country'], ' tabindex="14"');?>
                                </td>

                                <td class="cell10"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this,0,'.cell6')" />
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
                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table id="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Prueba</td>
                                <td class="cell2">Marca</td>
                                <td class="cell3">Crono</td>
                                <td class="cell4">Puesto</td>
                                <td class="cell5">Piscina</td>
                                <td class="cell6">Fecha</td>
                                <td class="cell7">Torneo</td>
                                <td class="cell8">Ciudad</td>
                                <td class="cell9">Pa&iacute;s</td>
                                <td class="cell10">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                    <?=form_dropdown('cboPrueba', $palmares_row['cboPrueba'], $palmares_row['prueba'], ' tabindex="14"');?>
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="txtMarca" value="<?=$palmares_row['marca']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="txtCrono" value="<?=$palmares_row['crono']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="txtPuesto" value="<?=$palmares_row['puesto']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <?=form_dropdown('cboPiscina', $palmares_row['cboPiscina'], $palmares_row['piscina'], ' tabindex="14"');?>
                                </td>
                                <td class="cell6">
                                    <input type="text" name="txtFechaTorneo" value="<?=date('d-m-Y', $palmares_row['fecha']?$palmares_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="txtTorneo" value="<?=$palmares_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="txtCity" value="<?=$torneo_row['city']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell9">
                                    <?=form_dropdown('cboCountry', $palmares_row['cboCountry'], $palmares_row['country'], ' tabindex="14"');?>
                                </td>

                                <td class="cell10"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this,0,'.cell6')" />
                </div>
        </div>
    </div>
</div>
