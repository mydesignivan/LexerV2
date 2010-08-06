<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>


<form action="<?=site_url('/login/account_access/')?>" method="post" enctype="application/x-www-form-urlencoded">
    <p>Ahora usted ya completar sus datos personales entrando a su cuenta</p>

    <input type="submit" value="Entrar a mi cuenta" />

    <input type="hidden" name="p1" value="<?=$username?>" />
    <input type="hidden" name="p2" value="<?=$pass?>" />
</form>

