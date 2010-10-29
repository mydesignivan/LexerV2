<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>


    <!-- ========== APELLIDO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtLastName"><span class="required">*</span>Apellido</label>
        <label class="label label-form" for="txtLastName"><span class="required">*</span><?=$info['lastname']?></label>
    <!-- ========== NOMBRE =========== -->
    <div class="trow">
        <label class="label label-form" for="txtFirstName"><span class="required">*</span>Nombre</label>
        <label class="label label-form" for="txtFirstName"><span class="required">*</span><?=$info['firstname']?></label>
    </div>
    <!-- ========== FOTO =========== -->

    <div class="trow">
        <label class="label label2" for="txtImage"><span class="required">*</span>Foto</label>
         <img  src="<?=UPLOAD_PATH_CV.$info['image_thumb']?>" alt="" width="64" height="64" class="fleft thumbframe1" />
    </div>


    <!-- ========== SEXO =========== -->
    <div class="trow">
        <label class="label label-form" for="optSexF"><span class="required">*</span>Sexo</label>
        <div class="fleft">
            <label class="label" for="optSexF"><?=$info['sex']=='f'?"femenino":"masculino";?></label>
        </div>
    </div>
    <!-- ========== FECHA NACIMIENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtFnac"><span class="required">*</span>Fecha de Nacimiento</label>
        <label class="label label-form" for="txtFnac"><span class="required">*</span><?=$info['nacimiento']?></label>
    </div>
    <!-- ========== EDAD =========== -->
    <div class="trow <?=getval($info['age'], 'hide')?>">
        <label class="label label-form">Edad</label>
         <label class="label label-form"><?=$info['age']?></label>
    </div>

    <!-- ========== ESTADO CIVIL =========== -->
    <div class="trow">
        <label class="label label-form" for="cboEstadoCivil">Estado Civil</label>
        <label class="label label-form" for="cboEstadoCivil"><?=$info['estado_civil']?></label>
    </div>

    <?php if ($info['documento_show']){?>
    <!-- ========== TIPO DE DOCUMENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="cboTipoDoc">Tipo de Documento</label>
         <label class="label label-form" for="cboTipoDoc"><?=$info['tipodoc_name']?></label>
    </div>
    <!-- ========== NRO DOCUMENTO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtNumDoc">Nro. Documento</label>
         <label class="label label-form" for="txtNumDoc"><?=$info['documento_num']?></label>
    </div>
    <?php }?>
    <!-- ========== CHECKBOX MOSTRAR NRO DOC. =========== -->

    <!-- ========== PAIS ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="cboCurrentCountry"><span class="required">*</span>Pa&iacute;s Actual</label>
         <label class="label label-form" for="cboCurrentCountry"><span class="required">*</span><?=$comboCountry[$info['current_country']]['name'];?></label>
    </div>
    <!-- ========== PROVINCIA ACTUAL =========== -->
    <div id="contCurrentStates" class="trow ">
        <label class="label label-form" for="cboCurrentStates"><span class="required">*</span>Provincia Actual</label>
        <label class="label label-form" for="cboCurrentStates"><?=$info['current_state_select'][0]['name'];?></label>
    </div>
    <!-- ========== CIUDAD ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCurrentCity"><span class="required">*</span>Ciudad Actual</label>
         <label class="label label-form" for="txtCurrentCity"><span class="required">*</span><?=$info['current_city']?></label>
    </div>
    <!-- ========== CODIGO POSTAL ACTUAL =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCurrentZipCode">C&oacute;digo Postal Actual</label>
        <label class="label label-form" for="txtCurrentZipCode"><?=$info['current_zipcode']?></label>
    </div>
    <!-- ========== PAIS ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="cboOriginCountry">Pa&iacute;s Origen</label>
        <label class="label label-form" for="cboOriginCountry"> <?=$comboCountry[$info['origin_country']]['name'];?></label>
      
       
        <img src="images/ajax-loader.gif" alt="Loading" width="16" height="16" class="jq-loader hide" />
    </div>
    <!-- ========== PROVINCIA ORIGEN =========== -->
    <div id="contOriginStates" class="trow <?=getval($info['origin_state'], 'hide', 0)?>">
        <label class="label label-form" for="cboOriginStates">Provincia Origen</label>
        <label class="label label-form" for="cboOriginStates"><?=$info['origin_state_select'][0]['name'];?></label>
    </div>
    <!-- ========== CIUDAD ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="txtOriginCity">Ciudad Origen</label>
         <label class="label label-form" for="txtOriginCity"><?=$info['origin_city']?></label>
    </div>
    <!-- ========== CODIGO POSTAL ORIGEN =========== -->
    <div class="trow">
        <label class="label label-form" for="txtOriginZipCode">C&oacute;digo Postal Origen</label>
         <label class="label label-form" for="txtOriginZipCode"><?=$info['origin_zipcode']?></label>
    </div>
    <!-- ========== NACIONALIDAD=========== -->
    <div class="trow">
        <label class="label label-form" for="txtNacionalidad"><span class="required">*</span>Nacionalidad</label>
        <label class="label label-form" for="txtNacionalidad"><span class="required">*</span><?=$info['nacionalidad']?></label>
    </div>
    <!-- ========== PASAPORTE =========== -->
    <div class="trow">
        <label class="label label-form" for="cboPassport">Pasaporte</label>
        <label class="label label-form" for="cboPassport"><?=$info['passport'];?></label>

      
    </div>
    <!-- ========== TELEFONO FIJO =========== -->
    <div class="trow">
        <label class="label label-form" for="txtPhoneArea"><span class="required">*</span>Tel&eacute;fono Fijo</label>
         <label class="label label-form" for="txtPhoneArea"><span class="required">*</span><?=$info['phone_area']?> - <?=$info['phone_city']?> - <?=$info['phone_num']?></label>

    </div>
    <!-- ========== CELULAR =========== -->
    <div class="trow">
        <label class="label label-form" for="txtCeluArea">Celular/M&oacute;vil</label>
        <label class="label label-form" for="txtCeluArea"><?=$info['celu_area']?> - <?=$info['celu_city']?> - <?=$info['celu_num']?></label>
    </div>
    <!-- ========== SITIO WEB =========== -->
    <div class="trow">
        <label class="label label-form" for="txtWebSite">Tu Sitio Web</label>
        <label class="label label-form" for="txtWebSite"><?=$info['website']?></label>
    </div>
    <!-- ========== IDIOMAS =========== -->
    <div class="trow">
        <label class="label label-form" style="width:220px">Idiomas</label>
        <div class="fleft">
            <table id="tblLang" cellpadding="0" cellspacing="0" class="table-lang">
                <thead>
                    <tr>
                        <td class="cell1">Idioma</td>
                        <td class="cell2">Nivel Hablado</td>
                        <td class="cell3">Nivel Escrito</td>
                    </tr>
                </thead>
                <tbody>

        <?php if( $infoLang->num_rows==0 ){
                  $listInfoLang = array();
                  $listInfoLang[] = array('deplang_id'=>0, 'lang_id'=>0, 'level_oral'=>'', 'level_write'=>'');
              }else{
                  $listInfoLang = $infoLang->result_array();
              }
        ?>
            <?php foreach( $listInfoLang as $row ){?>
                    <tr <?php if( $row['deplang_id']!=0 ) echo 'id="trLang'.$row['deplang_id'].'"'?>>
                        <td class="cell1"><?=$row['lang_id']?></td>
                        <td class="cell2">
                            <label class="label label-form"><?=$row['level_oral']?></label>
                        </td>
                        <td class="cell3">
                            <label class="label label-form"><?=$row['level_write']?></label>
                        </td>
                       
                    </tr>
            <?php }?>
                </tbody>
            </table>
            <br />
        </div>
    </div>

    <!-- ========== PROFESION / ACTIVIDAD =========== -->
    <div class="trow">
        <label class="label label-form" for="txtProfesion">Profesi&oacute;n/Actividad</label>
         <label class="label label-form" for="txtProfesion"><?=$info['profesion']?></label>
    </div>
    <!-- ========== ESTUDIOS =========== -->
    <div class="trow">
        <label class="label label-form" for="txtEstudios">Estudios</label>
        <label class="label label-form" for="txtEstudios"><?=$info['estudios']?></label>
    </div>
    <!-- ========== POSEE ELGUNA DISCAPACIDAD =========== -->
    <div class="trow">
        <label for="chkDisc"><?=$info['check_discapacidad']?"Posee alguna Discapacidad":"sin discapacidad";?> </label>
    </div>
    <!-- ========== DATOS DISCAPACIDAD =========== -->
    <div id="contDisc" class="trow <?=getval($info['check_discapacidad'], 'hide', 0)?>">
        <label class="label label-form">Discapacidad</label>
        <table id="tblDisc" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Tipo Discapacidad</td>
                    <td class="cell2">Detallar Discapacidad</td>
                </tr>
            </thead>
            <tbody>

    <?php if( $infoDisc->num_rows==0 ){
              $listInfoDisc = array();
              $listInfoDisc[] = array('disc_id'=>0, 'type'=>'', 'detalle'=>'');
          }else{
              $listInfoDisc = $infoDisc->result_array();
          }
    ?>
        <?php foreach( $listInfoDisc as $row ){?>
                <tr <?php if( $row['disc_id']!=0 ) echo 'id="trDisc'.$row['disc_id'].'"'?>>
                    <td class="cell1"><?=$row['type'];?></td>
                    <td class="cell2"><?=$row['detalle']?> </td>
                </tr>
        <?php }?>
            </tbody>
        </table>
   
    </div>


