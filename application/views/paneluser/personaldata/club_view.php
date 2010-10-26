<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== Razon Social =========== -->
    <div class="trow">
        <label class="label label-form" for="txtRazon"><span class="required">*</span>Razon Social</label>
        <input type="text" name="txtRazon" id="txtRazon" class="wsize2" tabindex="2" value="<?=$info['razon_social']?>" />
    </div>
 <!-- ========== Foto =========== -->
    <div class="trow">
        <label class="label label2" for="txtImage"><span class="required">*</span>Foto</label>
<?php
$src = isset($info) ? UPLOAD_PATH_CV . $info['image_thumb'] : '';
?>
        <img id="ajaxupload-thumb" src="<?=$src?>" alt="<?=@$info['image_name']?>" width="64" height="64" class="fleft thumbframe1 <?php if( $src=='' ) echo 'hide'?>" />
        <div class="fleft">
            <div class="fleft">
                <input type="file" id="txtImage" name="txtImage" class="ajaxupload-input" size="20" />&nbsp;
                <button id="btnUpload2" type="button" onclick="PersonalSponsorData.upload();" class="float-left">Subir</button>
                <img id="ajaxupload-load" src="images/ajax-loader4.gif" alt="Loading..." width="43" height="11" class="hide" />
            </div>
            <label class="clear fleft label-leyend">M&aacute;ximo 2 megas por foto (gif, jpg, jpeg o png)</label>
            <div id="ajaxupload-error" class="clear error span-7 hide">Este campo es obligatorio.</div>
        </div>
        <input type="hidden" name="image_old" value="<?=$src?>" />
    </div>

  <?php /*  <div class="trow">
        <label class="label label-form" for="txtImage"><span class="required">*</span>Foto</label>
        <?php if( !empty($info['image_thumb']) ){?>
        <div class="fleft">
            <div class="picframe">
                <img src="<?=UPLOAD_PATH_CV . $info['image_thumb']?>" alt="<?=$info['image_thumb']?>" width="64<?//=$info['image_width']?>" height="64<?//=$info['image_height']?>" class="jq-imgpreview" />
            </div>
            <p class="clear">
                <input type="file" name="txtImage" id="txtImage" size="10" tabindex="4" />
                <button type="button" class="button-small" onclick="">Subir</button>
            </p>
        </div>
        <?php }?>
    </div>*/?>

    <!-- ========== Nombre del club =========== -->
    <div class="trow">
        <label class="label label-form" for="txtNombre"><span class="required">*</span>Nombre del club</label>
        <input type="text" name="txtNombre" id="txtNombre" class="wsize2" tabindex="2" value="<?=$info['nombre_club']?>" />
    </div>
    <!-- ========== Presidente Actual =========== -->
    <div class="trow">
        <label class="label label-form" for="txtPresidente"><span class="required">*</span>Presidente Actual</label>
        <input type="text" name="txtPresidente" id="txtPresidente" class="wsize2" tabindex="2" value="<?=$info['presidente_actual']?>" />
    </div>
    <!-- ========== Cuit =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCuit"><span class="required">*</span>CUIT</label>
        <input type="text" name="txtCuit" id="txtCuit" class="wsize2" tabindex="2" value="<?=$info['cuit']?>" />
    </div>
    <!-- ========== Año de fundacion=========== -->
    <div class="trow">
        <label class="label label-form" for="txtFundacion"><span class="required">*</span>A&ntilde;o de fundaci&oacute;n</label>
        <input type="text" name="txtFundacion" id="txtFundacion" class="wsize2" tabindex="2" value="<?=$info['anio_fundacion']?>" />
    </div>


    <!-- ========== DEPORTES  =========== -->

    <div id="contDeportes" class="trow  ">

        <label class="label label-form">Deportes</label>
        <table id="tblDeportes" cellpadding="0" cellspacing="0">
            <tr>
                <td>Listado de deportes</td>
                <td>Acciones</td>
                <td>Deportes seleccionaods</td>
            </tr>
            <tr>
                <td>
  <?=form_dropdown('cboDep1', $comboDeportes, false, 'id="cboDep1" tabindex="10" size="10" class="jq-data"');?>
                </td>
                <td>
                    <input type="button" onclick="javascript:void(LibForms.addItem('cboDep1','cboDep2'))" value="Agregar" />
                    <input type="button" onclick="javascript:void(LibForms.removeItem('cboDep2'))" value="Quitar" />
                </td>
                <td><?=form_dropdown('cboDep2',  $infoDeportes->result_array(), false, 'id="cboDep2" tabindex="10" size="10" class="jq-data" multiple');?>
                </td>
            </tr>

        </table>
        <br />
    </div>

    <!-- ========== LISTA SEDES =========== -->
    <div id="contSedes" class="trow ">
        <label class="label label-form">Estadio/Sede</label>
        <table id="tblSedes" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Estadio/Sede</td>
                    <td class="cell2">Domicilio Legal</td>
                    <td class="cell3">Pa&iacute;s</td>
                    <td class="cell4">Provincia</td>
                    <td class="cell5">Ciudad</td>
                    <td class="cell6">C&oacute;digo Postal</td>
                    <td class="cell7">Tel&eacute;fono Fijo</td>
                    <td class="cell8">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php if( count($infoSedes)==0 ){
              $infoSedes[] = array('sedes_id'=>0, 'type'=>'', 'detalle'=>'');
          }
    ?>
        <?php foreach( $infoSedes as $row ){?>
                <tr <?php if( $row['sedes_id']!=0 ) echo 'id="trSedes'.$row['sedes_id'].'"'?>>
                    <td class="cell1"><input type="text" name="txtSede" value="<?=$row['sede']?>" class="jq-data" /></td>
                    <td class="cell2"><input type="text" name="txtDomicilio" value="<?=$row['domicilio']?>" class="jq-data" /></td>
                    <td class="cell3">
                        <?=form_dropdown('combo', $comboCountry, $row['country'], 'tabindex="10" onchange="PersonalClubData.get_combo_states(this)"');?>
                        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
                    </td>
                    <td class="cell4" >
                    <?php
                    if( $row['state']!=0 ){
                            echo form_dropdown('cboStates', $row['comboState'], $row['state'], ' class="jq-select" tabindex="11"');
                          }else{?>
                            <select name="cboStates" class="jq-select" tabindex="11"></select>
                    <?php }?>

                    </td>
                    <td class="cell5"><input type="text" name="txtZipCode" value="<?=$row['city']?>" class="jq-data" /></td>
                    <td class="cell6"><input type="text" name="txtZipCode" value="<?=$row['zip_code']?>" class="jq-data" /></td>
                    <td class="cell7">
                        <input type="text" name="txtPhoneArea" value="<?=$row['phone_area']?>" class="wsize0 jq-data" />
                        <input type="text" name="txtPhoneCity" value="<?=$row['phone_city']?>" class="wsize0 jq-data" />
                        <input type="text" name="txtPhoneNum" value="<?=$row['phone_num']?>" class="wsize1 jq-data" /></td>
                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalClubData.removeRow(this, 'sedes')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn" onclick="PersonalClubData.addRow('#tblSedes', 4)" />
    </div>


     <!-- ========== Categorias =========== -->
    <div class="trow">
        <label class="label label-form" for="cboCategoria">Categoria</label>
        <?=form_dropdown('cboCategoria', $cboCategoria, $info['categoria'], 'id="cboCategoria" tabindex="7" onchange="LibForms.isOther(this,\'#txtCategoriaOther\')"');?>
        <input type="text" name="txtCategoriaOther" id="txtCategoriaOther" class="<?=getval($info['categoria']>0, 'hide')?>" value="<?=$info['categoria_other']?>" />
    </div>

    
    <h5>
DATOS DEL TITULAR O APODERADO
    </h5>


    <!-- ========== APELLIDO TITULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="txtLastName"><span class="required">*</span>Apellido</label>
        <input type="text" name="txtLastName" id="txtLastName" class="wsize2" tabindex="2" value="<?=$info['titular_lastname']?>" />
    </div>
    <!-- ========== NOMBRE TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtFirstName"><span class="required">*</span>Nombre</label>
        <input type="text" name="txtFirstName" id="txtFirstName" class="wsize2" tabindex="3" value="<?=$info['titular_firstname']?>" />
    </div>

     <!-- ========== CARGO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCargo">Cargo</label>
        <?=form_dropdown('cboCargo', $cboCargo, $info['titular_cargo'], 'id="cboCargo" tabindex="7" onchange="LibForms.isOther(this,\'#txtCargoOther\')"');?>
        <input type="text" name="txtCargoOther" id="txtCargoOther" class="<?=getval($info['titular_cargo']>0, 'hide')?>" value="<?=$info['titular_cargo_other']?>" />
    </div>

    <!-- ========== TELEFONO FIJO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtTPhoneArea"><span class="required">*</span>Tel&eacute;fono Fijo</label>
        <input type="text" name="txtTPhoneArea" id="txtTPhoneArea" class="wsize0" tabindex="20" value="<?=$info['titular_phone_area']?>" />
        <input type="text" name="txtTPhoneCity" id="txtTPhoneCity" class="wsize0" tabindex="21" value="<?=$info['titular_phone_city']?>" />
        <input type="text" name="txtTPhoneNum" id="txtTPhoneNum" class="wsize1" tabindex="22" value="<?=$info['titular_phone_num']?>" />
    </div>
    <!-- ========== CELULAR TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtTCeluArea">Celular/M&oacute;vil</label>
        <input type="text" name="txtTCeluArea" id="txtTCeluArea" class="wsize0" tabindex="23" value="<?=$info['titular_celu_area']?>" />
        <input type="text" name="txtTCeluCity" id="txtTCeluCity" class="wsize0" tabindex="24" value="<?=$info['titular_celu_city']?>" />
        <input type="text" name="txtTCeluNum" id="txtTCeluNum" class="wsize1" tabindex="25" value="<?=$info['titular_celu_num']?>" />
    </div>


    <!-- ========== TIPO DE DOCUMENTO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="cboTipoDoc">Tipo de Documento</label>
        <?=form_dropdown('cboTipoDoc', $comboTipoDoc, $info['titular_documento_tipo'], 'id="cboTipoDoc" tabindex="7" onchange="LibForms.isOther(this,\'#txtTipoDocOther\')"');?>
        <input type="text" name="txtTipoDocOther" id="txtTipoDocOther" class="<?=getval($info['titular_documento_tipo_other'], 'hide')?>" value="<?=$info['titular_documento_tipo_other']?>" />
    </div>
    <!-- ========== NRO DOCUMENTO TITULAR=========== -->
    <div class="trow">
        <label class="label label-form" for="txtNumDoc">Nro. Documento</label>
        <input type="text" name="txtNumDoc" id="txtNumDoc" class="wsize2" tabindex="8" value="<?=$info['titular_documento_num']?>" />
    </div>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC.TITULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="chkShowNroDoc">Mostrar mi n&uacute;mero de documento</label>
        <label class="label"><input type="checkbox" name="chkShowNroDoc" id="chkShowNroDoc" value="1" tabindex="9" <?=getval($info['titular_documento_show'], 'checked', 1)?> /></label>
    </div>


 

    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="10" class="fright">Guardar</button>
    </div>

    <input type="hidden" name="extra_post" id="extra_post" />
    <input type="hidden" name="filename_image_old" value="<?=$info['image_thumb']?>" />
    <input type="hidden" name="json" id="json">
</form>


<form id="ajaxupload-form" action="<?=site_url('/paneluser/personaldata/ajax_upload_image')?>" method="post" enctype="multipart/form-data" target="ifr" class="hide">
    <iframe name="ifr" id="ifr" src="about:blank" frameborder="1" style="width:800px; height: 100px; border: 1px solid red;"></iframe>
</form>

<script type="text/javascript">
<!--
PersonalClubData.initializer();
-->
</script>