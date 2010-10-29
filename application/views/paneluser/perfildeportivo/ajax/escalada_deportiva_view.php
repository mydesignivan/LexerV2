<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php $this->load->helper('form');?>

    <!-- ========== Deportes =========== -->
    <div>
        <div class="trow "
            <label class="label label-form" for="cboModalidad"><span class="required">*</span>Modalidad</label>
            <?=form_dropdown('cboModalidad', $cboModalidad, $info['modalidad'], 'id="cboModalidad" tabindex="1"  onchange="LibForms.isOther(this);"');?>
        </div>
    </div>

    <div class="trow">
        <label class="label label-form" for="txtEscalada"><span class="required">*</span>A&ntilde;os escalando</label>
        <input type="text" name="txtEscalada" id="txtEspecialidadOther" class="wsize2" tabindex="2" value="<?=$info['anios_escalada'] ?>" />
    </div>








