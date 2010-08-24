<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="span-7 prepend-top"><a href="<?=$this->config->item('base_url');?>"><img src="images/logo.png" alt="LexerSports" width="279" height="150" /></a></div>

<!-- =============== LOGIN (LOGOUT) =============== -->
<div class="login">
    <a href="" class="btnlogin">Registrate GRATIS</a>
    <div class="bg">
        <form action="<?=site_url('/login/');?>" method="post" enctype="application/x-www-form-urlencoded">
            <div class="form">
                <input type="text" name="txtLoginUser" class="input-login" /><br />
                <input type="password" name="txtLoginPass" class="input-login" /><br />
                <a href="" class="link-1">¿Olvidaste tu contrase&ntilde;a?</a>
            </div>
            <div class="fbg">
                <a href="" class="link-2">ingresar &gt;</a>
            </div>
        </form>
    </div>
</div>

