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
                <div class="trow "
                <label class="label label-form" ><span class="required">*</span>Temporada</label>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[year]', $hist_row['cboTemporada'], $hist_row['year'], ' tabindex="1" class="hinput"');?>
                </div>
                 <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>
            
                 <!-- ========== MODALIDAD Y GRADUACION  =========== -->
                <div>
                    <input type="hidden" id="list" value="<?=$hist_row['list']?>">
                    <input type="hidden" id="name_comp" value="<?=$hist_row[TABLE_NAME_FIELD]?>[graduacion]">
                    <input type="hidden" id="label" value="Graduacion">
                    <div class="trow "
                         <label class="label label-form" ><span class="required">*</span>Tipo de Graduaci&oacute;n</label>
                        <?=form_dropdown("cboGraudacion", $hist_row['cboGrado'], $hist_row['grado'], 'tabindex="1"  onchange="Historial.selCat(this);" class="temp"');?>
                    </div>
                    <div class="trow <?=$hist_row['graduacion']!=0?"":"hide";?> noinit">
                        <label class="label label-form" ><span class="required">*</span>Graduacion</label>
                        <?=form_dropdown($hist_row[TABLE_NAME_FIELD]."[graduacion]", $hist_row['cboGraduacion'], $hist_row['graduacion'], ' tabindex="1"  onchange="LibForms.isOther(this);" class="hinput"');?>
                    </div>
                </div>


                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" class="hinput"');?>
                    </span>

                </div>

              <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[city]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== PAIS  =========== -->
                <div class="trow">
                    <label class="label label-form" >Pa&iacute;s Origen</label>
                    <?php $comboCountry[''] = "&nbsp;";?>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[country]', $hist_row['cboCountry'], $hist_row['country'], ' tabindex="14" onchange="Historial.get_combo_states(this)" class="hinput"');?>
                    <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                </div>

                <!-- ========== PROVINCIA  =========== -->
                <div class="trow <?=getval($hist_row['state'], 'hide', 0)?> noinit">
                    <label class="label label-form" >Provincia</label>
                    <?php if( $hist_row['state']!=0 ){
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD].'[state]', $hist_row['cboState'], $hist_row['state'], ' class="jq-select hinput" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD]?>[state]"  class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>
              <!-- ========== Competencias de la FASA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Competencias de la FASA</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[fasa]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['fasa'] ?>" />
                </div>
              <!-- ========== Extraoficiales  =========== -->
                <div class="trow">
                    <label class="label label-form"><span class="required">*</span>Competencias Extraoficiales</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD]?>[extraoficiales]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['extraoficiales'] ?>" />
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
