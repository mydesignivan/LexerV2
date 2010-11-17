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

        foreach($categoria as $cat_row){
        ?>
            <div class="chistorial trow">
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Categoria</label>
                    <span>
                    <?=form_dropdown($cat_row[TABLE_NAME_FIELD]."[categoria]" , $cat_row['cboCategoria'], $cat_row['categoria'], ' tabindex="14" onchange="LibForms.isOther(this);" class="hinput"');?>
                    </span>
                    <span class="<?=$cat_row['categoria']<0?"":"hide";?> noinit">
                      <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[categoria_other]"  class="wsize2 hinput" tabindex="2" value="<?=$cat_row['categoria_other'] ?>" />
                    </span>
                </div>
                <!-- ========== Torneos =========== -->

                <div class="trow tbl">
                    <label class="label label-tablas">Torneos Nacionales e Internacionales</label>
                    <table name="tblTorneos" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Prueba</td>
                                <td class="cell2">marca</td>
                                <td class="cell3">federacion</td>
                                <td class="cell4">Fecha</td>
                                <td class="cell5">Ciudad</td>
                                <td class="cell6">Pa&iacute;s</td>
                                <td class="cell7">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $cat_row['categorias'] as $prueba_row ){?>
                            <tr <?php if( $prueba_row['prueba_id']!=0 ) echo 'id="trTorneo'.$prueba_row['prueba_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                    <?=form_dropdown($prueba_row[TABLE_NAME_FIELD]."[prueba]", $prueba_row['cboPrueba'], $prueba_row['prueba'], ' tabindex="14"  onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$prueba_row['prueba']<0?"":"hide";?> noinit">
                                    <input type="text" name="<?=$prueba_row[TABLE_NAME_FIELD] ?>[prueba_other]" value="<?=$prueba_row['prueba_other']?>" class="wsize1 " />
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$prueba_row[TABLE_NAME_FIELD] ?>[marca]" value="<?=$prueba_row['marca']?>" class="wsize1 " />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$prueba_row[TABLE_NAME_FIELD] ?>[federacion]" value="<?=$prueba_row['federacion']?>" class="wsize1 " />
                                </td>
                                <td class="cell4">
                                    <input type="text" name="<?=$prueba_row[TABLE_NAME_FIELD] ?>[fecha]" value="<?=date('d-m-Y', $prueba_row['fecha']?$prueba_row['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$prueba_row[TABLE_NAME_FIELD] ?>[ciudad]" value="<?=$prueba_row['city']?>" class="wsize1 " />
                                </td>
                                <td class="cell6">
                                    <?=form_dropdown($prueba_row[TABLE_NAME_FIELD]."[country]" , $prueba_row['cboCountry'], $prueba_row['country'], ' tabindex="1"  ');?>
                                </td>
                                <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'torneo')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this,0,'.cell4')" />
                </div>
                <div class="trow">
                    <label class="label label-form" ><span class="required">*</span>Observaciones</label>

                      <input type="text" name="<?=$cat_row[TABLE_NAME_FIELD] ?>[observaciones]" class="wsize2 hinput" tabindex="2" value="<?=$cat_row['observaciones'] ?>" />
                </div>

            </div>
               <div class="trow">
                    <input type="button" value="A&ntilde;adir Otra Categoria" name="btn"  onclick="Historial.addHistorial(this, 'chistorial')" />
                </div>
            
        <? }?>
           
           
       <? foreach($pruebas as $pruebas_row){?>

            <div class="cevolucion trow">
                <div class="trow tbl">
                <label class="label label-tablas">Evoluci&oacute;n</label>
                    <table name="tblPruebas" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Fecha</td>
                                <td class="cell2">Prueba</td>
                                <td class="cell3">Observaci&oacute;n</td>
                                <td class="cell4">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
      
                    foreach( $pruebas_row as $pr_num ){?>
                            <tr <?php if( $pr_num['prueba_id']!=0 ) echo 'id="trTorneo'.$pr_num['prueba_id'].'"'?>>
                                <td class="cell1">
                                    <input type="text" name="<?=$pr_num[TABLE_NAME_FIELD] ?>[fecha]" value="<?=date('d-m-Y', $pr_num['fecha']?$pr_num['fecha']:time())?>" class="jq-data cfecha" tabindex="22" />
                                </td>
                                <td class="cell2">
                                    <span>
                                    <?=form_dropdown($pr_num[TABLE_NAME_FIELD]."[prueba]" , $pr_num['cboPrueba'], $pr_num['prueba'], ' tabindex="14"  onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$pr_num['prueba']<0?"":"hide";?> noinit">
                                    <input type="text" name="<?=$pr_num[TABLE_NAME_FIELD] ?>[prueba_other]" value="<?=$pr_num['prueba_other']?>" class="wsize1 " />
                                    </span>
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$pr_num[TABLE_NAME_FIELD] ?>[observaciones]" value="<?=$pr_num['observaciones']?>" class="wsize1 " />
                                </td>
                                <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, '.evolucion')" /></td>
                            </tr>
                    <?php }?>
                        </tbody>
                    </table>
                    <br />
                    <input type="button" value="Agregar otro" name="btn"  onclick="Historial.addRowFecha(this)" />
                 </div>

            </div>
        <? } ?>
                <div class="trow">
                    <input type="button" value="A&ntilde;adir Otra tabla" name="btn"  onclick="Historial.addHistorial(this,'cevolucion')" />
                </div>
               

            
        </div>
        <div id="tabs-2">
                <div id="contPalmares" class="trow tbl">
                    <label class="label label-tablas">Logros / Títulos Nacionales / Títulos Internacionales / Otros</label>
                    <table name="tblPalmares" cellpadding="0" cellspacing="0">
                        <thead>
                            <tr>
                                <td class="cell1">Prueba</td>
                                <td class="cell2">Marca</td>
                                <td class="cell3">Puesto</td>
                                <td class="cell4">A&ntilde;o</td>
                                <td class="cell5">Descripcion</td>
                                <td class="cell6">Acci&oacute;n</td>
                            </tr>
                        </thead>
                        <tbody>

                <?php
                    foreach( $palmares as $palmares_row ){?>
                            <tr <?php if( $palmares_row['palmares_id']!=0 ) echo 'id="trTorneo'.$palmares_row['palmares_id'].'"'?>>
                                <td class="cell1">
                                    <span>
                                <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[pruebas]" , $palmares_row['cboPrueba'], $palmares_row['prueba'], ' tabindex="1"  onchange="LibForms.isOther(this);"');?>
                                    </span>
                                    <span class="<?=$palmares_row['prueba']<0 ? "" : "hide"?> noinit">
                                <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD] ?>[prueba_other]" value="<?=$palmares_row['prueba_other']?>" class="wsize2" />
                                    </span>
                                </td>
                                <td class="cell2">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD] ?>[marca]" value="<?=$palmares_row['marca']?>" class="wsize2" />
                                </td>
                                <td class="cell3">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD] ?>[puesto]" value="<?=$palmares_row['puesto']?>" class="wsize2" />
                                </td>
                                <td class="cell4">
                                <?=form_dropdown($palmares_row[TABLE_NAME_FIELD]."[year]" , $palmares_row['cboTemporada'], $palmares_row['year'], ' tabindex="1"');?>
                                </td>
                                <td class="cell5">
                                    <input type="text" name="<?=$palmares_row[TABLE_NAME_FIELD] ?>[descripcion]" value="<?=$palmares_row['descripcion']?>" class="wsize2" />
                                </td>

                                <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="Historial.removeRow(this, 'palmares')" /></td>
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
