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
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[temporada_1]', $hist_row['cboTemporada'], $hist_row['temporada_1'], ' tabindex="1" class="hinput"');?>
                </div>

                  <!-- ========== Entrenador  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Entrenador</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[entrenador]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['entrenador'] ?>" />
                </div>

                 <!-- ========== CLUB  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Club</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[club]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['club'] ?>" />
                </div>

                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[categoria]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria'] ?>" />
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
                            echo form_dropdown($hist_row[TABLE_NAME_FIELD].'[state]', $hist_row['cboState'], $hist_row['state'], ' class="jq-select" tabindex="15"');
                          }else{?>
                            <select name="<?=$hist_row[TABLE_NAME_FIELD] ?>[state]" class="jq-select hinput" tabindex="15"></select>
                    <?php }?>
                </div>
                   <!-- ========== CIUDAD  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Ciudad</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[city]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['city'] ?>" />
                </div>

                <!-- ========== RANQUING  =========== -->
                <div class="trow">
                    <label class="label label-form" for="txtRanking"><span class="required">*</span>Ranking</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[ranking]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['ranking'] ?>" />
                </div>

                <!-- ========== TOUR NAME  =========== -->
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Nombre del tour</label>
                    <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[tour_name]" class="wsize2 hinput" tabindex="2" value="<?=$hist_row['tour_name'] ?>" />
                </div>


                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Torneo</td>
                                <td class="cell3">Posici&oacute;n</td>
                                <td class="cell4">r1</td>
                                <td class="cell4">r2</td>
                                <td class="cell4">r3</td>
                                <td class="cell4">r4</td>
                                <td class="cell4">Total</td>
                                <td class="cell4">Par</td>
                                <td class="cell5">Ganancia</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $hist_row['tour'] as $tour_row ){?>
                            <tr <?php if( $tour_row['tour_id']!=0 ) echo 'id="trTorneo'.$tour_row['tour_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[fecha]" value="<?=date('d-m-Y', $tour_row['fecha']?$tour_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[torneo]" value="<?=$tour_row['torneo']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[posicion]" value="<?=$tour_row['posicion']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[r1]" value="<?=$tour_row['r1']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[r2]" value="<?=$tour_row['r2']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[r3]" value="<?=$tour_row['r3']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[r4]" value="<?=$tour_row['r4']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell8">
                                    <input type="text" value="" class="wsize1 cvalores" />
                                </td>
                                <td class="cell9">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[par]" value="<?=$tour_row['par']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell10">
                                    <input type="text" name="<?=$tour_row[TABLE_NAME_FIELD] ?>[ganancia]" value="<?=$tour_row['ganancia']?>" class="wsize1 cvalores" />
                                </td>

                                <td class="cell11"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                              <?php }?>
                            <tr class="fixed" >
                                <td class="cell1" colspan="3">
                                    <label class="label label-form" for="txtRanking">Totales</label>
                                </td>

                                <td class="cell4">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell5">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell6">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell7">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell8">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell9">
                                    <label class="label label-form" > </label>
                                </td>
                                <td class="cell10">
                                    <label class="label label-form" > </label>
                                </td>

                                <td class="cell6"></td>
                            </tr>
                  
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this,0,'.cell1','.fixed')" />
                </div>

           <!-- ========== Observaciones  =========== -->
            <div class="trow">
                <label class="label label-form" for="txtObservaciones"><span class="required">*</span>Observaciones</label>
                <textarea name="<?=$hist_row[TABLE_NAME_FIELD] ?>[observaciones]" class="wsize2 hinput" tabindex="7"><?=$hist_row['observaciones']?></textarea>
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
                    <label class="label label-tablas">Career Highlights / Logros / Titulos Nacionales e Internacionales / Otros Títulos</label>
                    <table name="tblPalmares" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">A&ntilde;o</td>
                                <td class="cell2">T&iacute;tulo</td>
                                <td class="cell3">Acci&oacute;n</td>
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
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD] ?>[titulo]" value="<?=$palmares_row['titulo']?>" class="wsize2" />
                                </td>

                                <td class="cell3"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
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
