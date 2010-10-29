<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/paneluser/personaldata/save');?>" method="post" enctype="multipart/form-data">


    <!-- ========== TEST Y CAPACIDADES FÍSICAS =========== -->
    <div class="trow">
        <label class="label label-form" style="width:220px">TEST Y CAPACIDADES FÍSICAS</label>
        <div class="fleft">
            <table id="tblLang" cellpadding="0" cellspacing="0" class="table-lang">
                <thead>
                    <tr>
                        <td class="cell1">Fecha</td>
                        <td class="cell2">Seleccione un Test</td>
                        <td class="cell3">Observaciones</td>
                        <td class="cell4">Acci&oacute;n</td>
                    </tr>
                </thead>
                <tbody>

        <?php  if( count($info_test)==0 ){
                  $info_test[] = array('test_id'=>0, 'fecha'=>'', 'test0'=>'', 'test1'=>'', 'test2'=>'', 'observaciones'=>'');
              }
        ?>
            <?php foreach( $info_test as $row ){?>
                    <tr <?php if( $row['test']['test_id']!=0 ) echo 'id="trLang'.$row['test']['test_id'].'"';?>>
                        <td class="cell1">
                            <input type="text" name="txtFecha" class="wsize1 fecha" tabindex="5" value="<?=$row['test']['fecha']?>" />
                        </td>
                        <td class="cell2">
                            <div id="pr">
                                <div class="trow">
                                <?=form_dropdown('cboLevel0', $row['combo_0'], $row['test']['test0'], ' tabindex="27" class="jq-data" onchange="PersonalTestData.selectCombo(this,0)"');?>
                                </div>
                                
                                <div class="trow ">
                                <?php if($row['test']['test1']){?>
                                    <?=form_dropdown('cboLevel1', $row['combo_1'], $row['test']['test1'], ' tabindex="27" class="jq-data" onchange="PersonalTestData.selectCombo(this,1)"');?>
                                <?php } ?>
                                </div>
                                
                                <div class="trow">
                                    <?php if($row['test']['test2']){?>
                                        <?=form_dropdown('cboLevel2', $row['combo_2'], $row['test']['test2'], ' tabindex="27" class="jq-data" ');?>
                                     <?php } ?>
                                </div>
                            </div>
                           
                            <div class="other trow <?=strlen($row['test']['other'])>0?strlen($row['test']['other']):"hide"?>">
                                otro
                                <input type="text" name="txtOtro"  class="wsize2" tabindex="2" value="<?=$row['test']['other'] ?>" />
                            </div>
                        </td>
                        <td class="cell3">
                            <textarea name="txtObservaciones" class="wsize2">
                                <?=$row['test']['observaciones']?>
                            </textarea>
                        </td>
                        <td class="cell4"><input type="button" value="Eliminar" name="btn" onclick="PersonalTestData.removeRow(this, 'lang')" /></td>
                    </tr>
            <?php }; ?>
                </tbody>
            </table>
            <br />
            <input type="button" value="Agregar otro" name="btn" onclick="PersonalTestData.addRow('#tblLang')" />
        </div>
    </div>

</form>


<script type="text/javascript">
<!--
    PersonalTestData.initializer();
-->
</script>