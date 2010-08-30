<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<form id="form1" action="<?=site_url('/account/edit');?>" method="post" enctype="application/x-www-form-urlencoded">
    <div class="trow">
        <label for="txtEmail" class="label label-account"><span class="required">*</span>Email</label>
        <input type="text" name="txtEmail" id="txtEmail" tabindex="2" class="input-form" />
    </div>

    <div class="trow">
        <label for="txtPassOld" class="label label-account"><span class="required">*</span>Contrase&ntilde;a anterior</label>
        <input type="password" name="txtPassOld" id="txtPassOld" tabindex="4" class="input-form" />
    </div>

    <div class="trow">
        <label for="txtPass" class="label label-account"><span class="required">*</span>Nueva contrase&ntilde;a</label>
        <input type="password" name="txtPass" id="txtPass" tabindex="4" class="input-form" />
    </div>

    <div class="trow">
        <label for="txtConfirmPass" class="label label-account"><span class="required">*</span>Confirmaci&oacute;n de contrase&ntilde;a</label>
        <input type="password" id="txtConfirmPass" name="txtConfirmPass" tabindex="5" class="input-form" />
    </div>

    <div class="trow">
        <label class="label">Deseo Recibir Novedades de LexerSports: <input type="checkbox" name="chkNewsletter" checked tabindex="8" value="1" /></label>
    </div>

    <div class="trow prepend-top" style="width:530px;">
        <label class="label label-contact text-size-80"><b>(*) Campos Obligatorios</b></label>
        <button type="submit" tabindex="10" class="fright">Guardar</button>
    </div>
</form>

<script type="text/javascript">
<!--
    Account.initializer2();
-->
</script>