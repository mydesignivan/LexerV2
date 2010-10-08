<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="span-7 prepend-top"><a href="<?=$this->config->item('base_url');?>"><img src="images/logo.png" alt="LexerSports" width="279" height="150" /></a></div>

<!-- =============== LOGIN (LOGOUT) =============== -->
<div class="login">
<?php if( $this->session->userdata('logged_in') ){?>

    <div class="bg-login">
        <div class="thumb">
            <img src="images/persona.jpeg" alt="" width="100" height="100" />
        </div>
        <div class="clear">
            <a href="<?=site_url('/paneluser/myaccount/')?>" class="link-2 fleft">Mi Cuenta</a>
            <a href="<?=site_url('/login/logout/')?>" class="link-2 fright">Salir</a>
        </div>
    </div>

<?php }else{
$login_error = $this->session->flashdata('message_login');
?>
    <form action="<?=site_url('/login/');?>" method="post" enctype="application/x-www-form-urlencoded">
        <div id="d1" <?php if( $login_error!='' ) echo 'class="hide"';?>>
            <div class="cell">
                <input type="text" name="txtLoginUser" class="input-login" value="Usuario" onblur="set_input(event, 'Usuario')" onfocus="clear_input(event)" tabindex="100" /><br />
                <label for="chkRemember"><input type="checkbox" name="chkRemember" id="chkRemember" value="1" tabindex="103" />&nbsp;No cerrar sesi&oacute;n</label>
            </div>
            <div class="cell">
                <input type="text" name="txtLoginPass" class="input-login" value="Contraseña" onblur="set_input(event, 'Contrase&ntilde;a', true)" onfocus="clear_input(event, true)" tabindex="101" /><br />
                <a href="<?=site_url('/olvidaste-tu-contrasenia/')?>" class="link-1" tabindex="104">¿Olvidaste tu contrase&ntilde;a?</a>
            </div>
            <div class="cell">
                <button type="submit" name="btnSubmit" class="button-small" tabindex="102">Entrar</button>
            </div>
        </div>
        <?php if( $login_error!='' ){?>
        <div id="d2" class="passincorrect">
            <?=$login_error?><br />
            <a href="javascript:void($('#d2').hide());void($('#d1').show())" class="link-2">Volver a ingresar</a>
        </div>
        <?php }?>

        <div class="rowbutton"><a class="btnlogin" href="<?=site_url('/registrate-gratis/')?>" tabindex="105">Registrate GRATIS</a></div>
    </form>
<?php }?>
</div>
<div class="header-flags">
    <img src="images/flag_spanish.png" alt="" width="24" height="24" />&nbsp;
    <img src="images/flag_english.png" alt="" width="24" height="24" />&nbsp;
    <img src="images/flag_italy.png" alt="" width="24" height="24" />
</div>
