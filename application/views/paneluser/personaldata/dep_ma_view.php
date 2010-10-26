<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">

    <!-- ========== Peso =========== -->
    <div id="contPeso" class="trow">
        <label class="label label-tablas">Peso</label>
        <table id="tblPeso" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Peso</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['peso'] as $row ){?>
                <tr <?php if( $row['peso_id']!=0 ) echo 'id="trPesoc'.$row['peso_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPeso" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtPeso" value="<?=$row['peso']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPeso', $comboPeso, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservaciones" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'peso')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Altura =========== -->
    <div id="contAltura" class="trow">
        <label class="label label-tablas">Altura</label>
        <table id="tblAltura" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Altura</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['altura'] as $row ){?>
                <tr <?php if( $row['altura_id']!=0 ) echo 'id="trPeso'.$row['altura_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaAltura" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtAltura" value="<?=$row['altura']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservacionesAltura" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'altura')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Envergadura =========== -->
    <div id="contEnvergadura" class="trow">
        <label class="label label-tablas">Envergadura</label>
        <table id="tblEnvergadura" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Envergadura</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['envergadura'] as $row ){?>
                <tr <?php if( $row['envergadura_id']!=0 ) echo 'id="trEnvergadura'.$row['envergadura_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaEmbergadura" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtAlturaEnvergadura" value="<?=$row['altura']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservacionesAltura" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'altura')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>


    <!-- ========== Altura Sentado =========== -->
    <div id="contAlturaSentado" class="trow">
        <label class="label label-tablas">Altura Sentado</label>
        <table id="tblAlturaSentado" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Altura sentado</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['altura_sentado'] as $row ){?>
                <tr <?php if( $row['altura_id']!=0 ) echo 'id="trAlturaSentado'.$row['altura_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaAlturaSentado" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtAlturaSentado" value="<?=$row['altura']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaSentado', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservacionesAlturaSentado" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'altura')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>


    <!-- ========== Índice de Masa Corporal  =========== -->
    <div id="contMasa" class="trow">
        <label class="label label-tablas">&Iacute;ndice de Masa Corporal </label>
        <table id="tblMasa" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">IMC</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['masa'] as $row ){?>
                <tr <?php if( $row['masa_id']!=0 ) echo 'id="trMasa'.$row['masa_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaMasa" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <label class="label">
                        <input type="text" name="txtMasa" value="<?=$row['imc']?>" class="wsize1 cvalores" />
                        IMC</label>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservacionesMasa" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'masa')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Porcentaje de Grasa Corporal  =========== -->
    <div id="contGrasa" class="trow">
        <label class="label label-tablas">&Iacute;ndice de Masa Corporal </label>
        <table id="tblGrasa" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Porcentaje (%)</td>
                    <td class="cell3">Observaciones</td>
                    <td class="cell4">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['grasa'] as $row ){?>
                <tr <?php if( $row['grasa_id']!=0 ) echo 'id="trGrasa'.$row['grasa_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaGrasa" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <label class="label">
                        <input type="text" name="txtGrasa" value="<?=$row['porcentaje']?>" class="wsize1 cvalores" />
                        %</label>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3"><input type="text" name="txtObservacionesGrasa" value="<?=$row['observaciones']?>" class="jq-data" /></td>
                    <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'masa')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Pliegues Cutáneos   =========== -->
    <div id="contPlieguesCutaneos" class="trow">
        <label class="label label-tablas">Pliegues Cut&aacute;neos </label>
        <table id="tblPlieugesCutaneos" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Tr&iacute;ceps</td>
                    <td class="cell3">Subescapular</td>
                    <td class="cell4">B&iacute;ceps</td>
                    <td class="cell5">Pectoral</td>
                    <td class="cell6">Axilar Medio</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['pliegues_1'] as $row ){?>
                <tr <?php if( $row['pliegues_id']!=0 ) echo 'id="trPliegues1'.$row['pliegues_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPliegue1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtTriceps" value="<?=$row['triceps']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtSubescapular" value="<?=$row['subescapular']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtBiceps" value="<?=$row['biceps']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtPectoral" value="<?=$row['pectoral']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>                    
                    <td class="cell6">
                        <input type="text" name="txtAxilarMedio" value="<?=$row['axilar_medio']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Pliegues Cutáneos  2 =========== -->
    <div id="contPlieguesCutaneos2" class="trow">
        <table id="tblPlieguesCutaneos2" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Ileocrestal</td>
                    <td class="cell3">Suprail&iacute;aco</td>
                    <td class="cell4">Abdominal</td>
                    <td class="cell5">Muslo Anterior</td>
                    <td class="cell6">Muslo Posterior</td>
                    <td class="cell7">Pierna Medial</td>
                    <td class="cell8">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['pliegues_2'] as $row ){?>
                <tr <?php if( $row['pliegues_id']!=0 ) echo 'id="trPliegues2'.$row['pliegues_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPliegue1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtTriceps" value="<?=$row['ileocrestal']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtSuplailiaco" value="<?=$row['suprailiaco']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtAbdominal" value="<?=$row['abdominal']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtMusloAnterior" value="<?=$row['muslo_anterior']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtMusloPosterior" value="<?=$row['muslo posterior']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtPiernaMedia" value="<?=$row['pierna_medial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue2_6', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtObservacionesPliegues">Observaciones</label>
        <textarea name="txtObservacionesPliegues" id="txtObservacionesPliegues" class="textarea-ma-observaciones" tabindex="7"><?=@$info_obs['pliegues']?></textarea>
    </div>


    <!-- ========== Perímetros Grales =========== -->
    <div id="contPerimetrosGrales" class="trow">
        <label class="label label-tablas">Per&iacute;metros  </label>
        <table id="tblPerimetrosGrales" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Cabeza</td>
                    <td class="cell3">Cuello</td>
                    <td class="cell4">T&oacute;rax</td>
                    <td class="cell5">Cintura</td>
                    <td class="cell6">Cadera</td>
                    <td class="cell7">Umbilical</td>
                    <td class="cell8">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['perimetros_gral'] as $row ){?>
                <tr <?php if( $row['perimetro_id']!=0 ) echo 'id="trPerimetrosGral'.$row['perimetro_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPerimetrosGral" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtCabeza" value="<?=$row['cabeza']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtCuello" value="<?=$row['cuello']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtTorax" value="<?=$row['torax']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtCintura" value="<?=$row['cintura']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtCadera" value="<?=$row['cadera']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell7">
                        <input type="text" name="txtUmbilical" value="<?=$row['umbilical']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros1_6', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell8"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Perímetros Pierna =========== -->
    <div id="contPerimetrosPierna" class="trow">
        <table id="tblPerimetrosPierna" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Muslo 1 cm</td>
                    <td class="cell3">Muslo Medial</td>
                    <td class="cell4">Pantorrilla</td>
                    <td class="cell5">Tobillo</td>
                    <td class="cell6">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['perimetros_piernas'] as $row ){?>
                <tr <?php if( $row['perimetros_id']!=0 ) echo 'id="trPerimetrosPiernas'.$row['perimetros_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPerimetrosPiernas" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtMuslo" value="<?=$row['muslo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtMusloMedial" value="<?=$row['muslo_medial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtPantorrilla" value="<?=$row['pantorrilla']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtTobillo" value="<?=$row['tobillo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Perímetros Brazos =========== -->
    <div id="contPerimetrosBrazos" class="trow">
        <table id="tblPerimetrosBrazos" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Brazo_relajado</td>
                    <td class="cell3">Brazo contraido</td>
                    <td class="cell1">Muslo Medial</td>
                    <td class="cell2">Antebrazo</td>
                    <td class="cell2">Mu&ntilde;eca</td>
                    <td class="cell3">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['perimetros_brazos'] as $row ){?>
                <tr <?php if( $row['perimetros_id']!=0 ) echo 'id="trPerimetrosBrazosl'.$row['perimetros_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPerimetrosBrazos" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtBrazoRelajado" value="<?=$row['brazo_relajado']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtBrazoContraido" value="<?=$row['brazo_contraido']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtMusloMedial" value="<?=$row['muslo_medial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtAntebrazo" value="<?=$row['antebrazo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtMunieca" value="<?=$row['munieca']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboPerimetros2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtObservacionesPerimetros">Observaciones</label>
        <textarea name="txtObservacionesPerimetros" id="txtObservacionesPerimetros" class="textarea-ma-observaciones" tabindex="7"><?=@$info_obs['perimetros']?></textarea>
    </div>

    <!-- ==========  Diametros   =========== -->
    <div id="contDiamtros1" class="trow">
        <label class="label label-tablas">Di&aacute;metros </label>
        <table id="tblDiametros1" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Biacromial</td>
                    <td class="cell3">Transverso del T&oacute;rax</td>
                    <td class="cell4">Antero-Posterior del T&oacute;rax</td>
                    <td class="cell5">Biileocrestal</td>
                    <td class="cell6">Bicond&iacute;leo de F&eacute;mur</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['diametros_1'] as $row ){?>
                <tr <?php if( $row['diametro_id']!=0 ) echo 'id="trDiametros1'.$row['diametros_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaDiametros1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtBimalolear" value="<?=$row['bimaleolar']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboDiametro1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtTransversoPie" value="<?=$row['transverso_pie']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboDiametro1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtBiepicondileo" value="<?=$row['biepicondileo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboDiametro1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtBiestiloideo" value="<?=$row['biestiloideo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboDiametro1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtTransverso_mano" value="<?=$row['transverso_mano']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboDiametro1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>


    <!-- ========== Diametros 2   =========== -->
    <div id="contDiametros2" class="trow">
       <table id="tblDiametros2" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Bimaleolar</td>
                    <td class="cell3">Transverso del Pi&eacute;</td>
                    <td class="cell4">Biepicondileo de H&uacute;mero</td>
                    <td class="cell5">Biestiloideo (Mu&ntilde;ca)</td>
                    <td class="cell5">Transverso de la Mano</td>
                    <td class="cell6">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['diametros_2'] as $row ){?>
                <tr <?php if( $row['diametro_id']!=0 ) echo 'id="trDiametros2'.$row['pliegues_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaDiametro1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtDiametro2Biacromial" value="<?=$row['biacromial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtDiametro2Transverso" value="<?=$row['transverso']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtDiametro2AnteroPosterior" value="<?=$row['antero_posterior']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtDiametro2Biileocrestal" value="<?=$row['biileocrestal']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtDiametro2Bicondileo" value="<?=$row['bicondileo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAlturaPliegue1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtObservacionesDiametro">Observaciones</label>
        <textarea name="txtObservacionesDiametro" id="txtObservacionesDiametro" class="textarea-ma-observaciones" tabindex="7"><?=@$info_obs['diametros']?></textarea>
    </div>

    <!-- ========== Alturas 1   =========== -->
    <div id="contAlturas1" class="trow">
        <label class="label label-tablas">Alturas </label>
       <table id="tblAlturas1" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Acromial</td>
                    <td class="cell3">Radial</td>
                    <td class="cell4">Estiloides</td>
                    <td class="cell5">Dactilar</td>
                    <td class="cell6">&Iacute;leoespinal</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['altura_1'] as $row ){?>
                <tr <?php if( $row['altura_id']!=0 ) echo 'id="trPliegues1'.$row['altura_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaAltura1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtAltura1Acromial" value="<?=$row['acromial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtAltura1Radial" value="<?=$row['radial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtAltura1Estiloides" value="<?=$row['estiloides']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtAltura11Dactilar" value="<?=$row['dactilar']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtAltura1Iloespinal" value="<?=$row['ileoespinal']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Altura 2   =========== -->
    <div id="contAltura2" class="trow">
       <table id="tblAltura2" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Trocanérea</td>
                    <td class="cell3">Tibial Lateral</td>
                    <td class="cell4">Maleolar Tibial</td>
                    <td class="cell5">Maleolar Peroneal</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>
    <?php
        foreach( $data['altura_2'] as $row ){?>
                <tr <?php if( $row['altura_id']!=0 ) echo 'id="trAltura2'.$row['altura_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaAltura2" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtAltura2Trocanerea" value="<?=$row['trocanerea']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura2_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtAltura2TibialLateral" value="<?=$row['tibial_lateral']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura2_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtAltura2MaleolarTibial" value="<?=$row['maleolar_tibial']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura2_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtAltura2MaleolarPeroneal" value="<?=$row['maleolar_peroneal']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboAltura2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell6"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>
    <div class="trow">
        <label class="label label-form" for="txtObservacionesAltura">Observaciones</label>
        <textarea name="txtObservacionesAltura" id="txtObservacionesAltura" class="textarea-ma-observaciones" tabindex="7"><?=@$info_obs['alturas']?></textarea>
    </div>
    <!-- ========== Logitudes 1   =========== -->
    <div id="contLongitudes1" class="trow">
        <label class="label label-tablas">Longitudes </label>
       <table id="tblLongitudes1" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Extrem. Sup. 1</td>
                    <td class="cell3">Extrem. Sup. 2</td>
                    <td class="cell4">Brazo</td>
                    <td class="cell5">Antebrazo</td>
                    <td class="cell6">Mano</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['long_1'] as $row ){?>
                <tr <?php if( $row['long_id']!=0 ) echo 'id="trPliegues1'.$row['pliegues_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaLong1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtLong1ExtremSup1" value="<?=$row['extrem_sup_1']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes1_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtLong1ExtremSup2" value="<?=$row['extrem_sup_2']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes1_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtLong1Brazo" value="<?=$row['brazo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes1_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtLong1Antebrazo" value="<?=$row['antebrazo']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes1_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtLong1Mano" value="<?=$row['mano']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes1_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <!-- ========== Longitudes 2   =========== -->
    <div id="contLong2" class="trow">
       <table id="tblLong2" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td class="cell1">Fecha</td>
                    <td class="cell2">Extrem. Inferior</td>
                    <td class="cell3">Pié</td>
                    <td class="cell4">Muslo 1</td>
                    <td class="cell5">Muslo 2</td>
                    <td class="cell6">Tibia</td>
                    <td class="cell7">Acci&oacute;n</td>
                </tr>
            </thead>
            <tbody>

    <?php
        foreach( $data['long_2'] as $row ){?>
                <tr <?php if( $row['long_id']!=0 ) echo 'id="trLong2'.$row['long_id'].'"'?>>
                    <td class="cell1">
                        <input type="text" name="txtFechaPliegue1" value="<?=date('d-m-Y', $row['fecha'])?>" class="jq-data cfecha" tabindex="22" />
                    </td>
                    <td class="cell2">
                        <input type="text" name="txtLong2Inferior" value="<?=$row['inferior']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes2_1', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell3">
                        <input type="text" name="txtLong2Pie" value="<?=$row['pie']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes2_2', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell4">
                        <input type="text" name="txtLong2Muslo1" value="<?=$row['muslo_1']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes2_3', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell5">
                        <input type="text" name="txtLong2Muslo2" value="<?=$row['muslo_2']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes2_4', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>
                    <td class="cell6">
                        <input type="text" name="txtLong2tibia" value="<?=$row['tibia']?>" class="wsize1 cvalores" />
                        <?=form_dropdown('comboLongitudes2_5', $comboLongitud, 0, 'tabindex="1" class="cmedida"');?>
                        <input type="hidden" value="1" />
                    </td>

                    <td class="cell7"><input type="button" value="Eliminar" name="btn" onclick="PersonalMa.removeRow(this, 'plieges')" /></td>
                </tr>
        <?php }?>
            </tbody>
        </table>
        <br />
        <input type="button" value="Agregar otro" name="btn"  onclick="PersonalMa.addRow(this)" />
    </div>

    <div class="trow">
        <label class="label label-form" for="txtObservacionesLongitud">Observaciones</label>
        <textarea name="txtObservacionesLongitud" id="txtObservacionesLongitud" class="textarea-ma-observaciones" tabindex="7"><?=@$info_obs['longitudes']?></textarea>
    </div>




    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="10" class="fright">Guardar</button>
    </div>




    <input type="hidden" name="json" id="json">
</form>


<script type="text/javascript">
<!--
    PersonalMa.initializer();
-->
</script>