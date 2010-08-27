<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status_sendmail')=="ok" ){?>
<div class="success">
    Muchas Gracias por comunicarse con nosotros, nos comunicaremos con usted a la brevedad.
</div>
<?php }elseif( $this->session->flashdata('status_sendmail')=="error" ){?>
<div class="error">
    El formulario no ha podido ser enviado, porfavor, reintentelo nuevamente.
</div>
<?php }?>

<form id="form1" action="<?=site_url('/contacto/send/');?>" method="post" enctype="application/x-www-form-urlencoded">
    <div class="trow">
        <label class="label label-contact" for="txtName"><span class="required">*</span>Nombre</label>
        <input type="text" name="txtName" id="txtName" class="input-contact" />
    </div>
    <div class="trow">
        <label class="label label-contact" for="txtEmail"><span class="required">*</span>Email</label>
        <input type="text" name="txtEmail" id="txtEmail" class="input-contact" />
    </div>
    <div class="trow">
        <label class="label label-contact" for="txtSubject"><span class="required">*</span>Asunto</label>
        <input type="text" name="txtSubject" id="txtSubject" class="input-contact" />
    </div>
    <div class="trow">
        <label class="label label-contact" for="cboArea"><span class="required">*</span>Email y &Aacute;rea de Contacto</label>
        <select name="cboArea" id="cboArea">
            <option value="">Seleccione un &aacute;rea</option>
            <option value="publicidad@lexersports.com">Publicidad</option>
            <option value="info@lexersports.com">Administraci&oacute;n</option>
            <option value="denuncia@lexesports.com">Denuncias</option>
            <option value="ayuda@lexersports.com">Ayuda</option>
            <option value="support@lexesports.com">Soporte Tecnico</option>
        </select>
    </div>
    <div class="trow">
        <label class="label label-contact" for="txtMessage"><span class="required">*</span>Consulta</label>
        <textarea name="txtMessage" id="txtMessage" rows="5" cols="22" class="textarea-contact"></textarea>
    </div>

    <hr style="width:530px" />

    <div class="trow" style="width:530px">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" name="btnSubmit" class="fright button-small">Enviar</button>
    </div>
</form>
<br /><br /><br /><br />

<script type="text/javascript">
<!--
    Contact.initializer();
-->
</script>