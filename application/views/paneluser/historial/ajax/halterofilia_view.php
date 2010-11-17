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
                <!-- ========== CATEGORIA  =========== -->
                <div class="trow">
                     <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($hist_row[TABLE_NAME_FIELD].'[categoria]', $hist_row['cboCategoria'], $hist_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$hist_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$hist_row[TABLE_NAME_FIELD] ?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$hist_row['categoria_other'] ?>" />
                    </span>
                </div>

                <!-- ========== Torneos =========== -->
                <div id="contTorneo" class="trow tbl">
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Div.</td>
                                <td class="cell2">Arranque</td>
                                <td class="cell3">Envi&oacute;n</td>
                                <td class="cell4">Total</td>
                                <td class="cell5">Lugar</td>
                                <td class="cell6">Peso</td>
                                <td class="cell7">Fecha</td>
                                <td class="cell8">Evento</td>
                                <td class="cell9">Ciudad</td>
                                <td class="cell10">Pa&iacute;s</td>
                                <td class="cell11">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
      
                    foreach( $hist_row['categorias'] as $cat_row ){?>
                            <tr <?php if( $cat_row['halterofilia_id']!=0 ) echo 'id="trTorneo'.$cat_row['halterofilia_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                    <?=form_dropdown($cat_row[TABLE_NAME_FIELD].'[division]', $cat_row['cboDivision'], $cat_row['division'], ' tabindex="14" onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$cat_row['division']<0?"":"hide";?> noinit">
                                      <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[division_other]"  class="wsize2" tabindex="2" value="<?=$cat_row['division_other'] ?>" />
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[arranque]" value="<?=$cat_row['arranque']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[envion]" value="<?=$cat_row['envion']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell4">
                                    <label class="label label-form" ></label>
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[lugar]" value="<?=$cat_row['lugar']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell6">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[peso]" value="<?=$cat_row['peso']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell7">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[fecha]" value="<?=date('d-m-Y', $cat_row['fecha']?$cat_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell8">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[evento]" value="<?=$cat_row['evento']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell9">
                                    <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[city]" value="<?=$cat_row['city']?>" class="wsize1 cvalores" />
                                </td>
                                <td class="cell10">
                                    <?=form_dropdown($cat_row[TABLE_NAME_FIELD].'[country]', $cat_row['cboCountry'], $cat_row['country'], ' tabindex="14" ');?>
                                </td>
                                <td class="cell11">
                                    <input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" />
                                </td>
  
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this,0,'.cell7','.fixed')" />
                </div>

           <!-- ========== Observaciones  =========== -->
            <div class="trow">
                <label class="label label-form" ><span class="required">*</span>Observaciones</label>
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
                   <label class="label label-tablas">Logros / T&iacute;tulos Nacionales / T&iacute;tulos Internacionales / Otros</label>
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
