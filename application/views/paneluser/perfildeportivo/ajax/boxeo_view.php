<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->

    <div>
        <input type="hidden" id="list" name="list" value="<?=$list?>">
        <div class="trow "
            <label class="label label-form" for="cboCategoria"><span class="required">*</span>Categoria</label>
            <?=form_dropdown('cboCategoria', $cboCategoria, 0, 'id="cboCategoria" tabindex="1"  onchange="PerfilDeportivo.selCat(this);"');?>
        </div>
        <div class="trow hide ">
        </div>
    </div>



    <div class="trow">
        <label class="label label-form" for="txtCategoriar"><span class="required">*</span>Mano h&aacute;bil</label>
        <input type="radio" name="chkMano" id="chkIzquierda" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "i")?> />
        <input type="radio" name="chkMano" id="chkDerecha" class="wsize2" tabindex="2" <?=getval($info['mano_habil'], 'checked', "d")?> />
    </div>


    <!-- ========== Licencias =========== -->
    <div id="contLicencia" class="trow ">
        <label class="label label-form">Licencias</label>
        <table id="tblBecas" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Licencia N</td>
                    <td class="cell2">Licencia Tipo</td>
                    <td class="cell3">Otorgada por</td>
                    <td class="cell3">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php  if( $infoLic->num_rows()==0 ){
              $listInfoLicencias = array();
              $listInfoLicencias[] = array('licencias_id'=>0, 'numero'=>'', 'tipo'=>'','fuente'=>'');

                  foreach( $listInfoLicencias as $row ){?>

                        <tr <?php if( $row['licencias_id']!=0 ) echo 'id="trLicencia'.$row['licencias_id'].'"'?>>
                            <td class="cell1"><input type="text" name="txtLicNumero" value="<?=$row['numero']?>"  tabindex="16"></td>
                            <td class="cell1"><input type="text" name="txtLicTipo" value="<?=$row['tipo']?>"  tabindex="17"></td>
                            <td class="cell1"><input type="text" name="txtLicFuente" value="<?=$row['fuente']?>"  tabindex="17"></td>
                            <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="PerfilDeportivo.removeRow(this, 'licencias')" /></td>
                        </tr>
             <?php  }
               }else{
              $listInfoLicencias = $infoLic->result_array();
          }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" tabindex="18" onclick="PerfilDeportivo.addRow('#tblBecas', 4)" />
    </div>




     <div class="trow">
         <label class="label label-form" for="txtEntrenador"><span class="required">*</span>Ha sido seleccionado</label>
         <input type="input" id="txtEntrenador" name="txtEntrenador" value="<?=$info['entrenador']?>">
     </div>








