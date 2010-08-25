<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="span-7 prepend-top"><a href="<?=$this->config->item('base_url');?>"><img src="images/logo.png" alt="LexerSports" width="279" height="150" /></a></div>

<img src="images/slogan.png" alt="Te conecta con todo el mundo deportivo" width="324" height="37" class="slogan" />

<!-- =============== LOGIN (LOGOUT) =============== -->
<div class="login">
    <form action="<?=site_url('/login/');?>" method="post" enctype="application/x-www-form-urlencoded">
        <div class="cell">
            <input type="text" name="txtLoginUser" class="input-login" value="Usuario" onblur="set_input(event, 'Usuario')" onfocus="clear_input(event)" /><br />
            <label for="chkRemember"><input type="checkbox" name="chkRemember" id="chkRemember" value="1" />&nbsp;No cerrar sesi&oacute;n</label>
        </div>
        <div class="cell">
            <input type="text" name="txtLoginPass" class="input-login" value="Contraseña" onblur="set_input(event, 'Usuario')" onfocus="clear_input(event)" /><br />
            <a href="" class="link-1">¿Olvidaste tu contrase&ntilde;a?</a>
        </div>
        <div class="cell">
            <button type="submit" name="btnSubmit">Entrar</button>
        </div>

        <div class="rowbutton"><a class="btnlogin" href="<?=site_url('/registrate-gratis/')?>">Registrate GRATIS</a></div>
    </form>
</div>

