<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<form action="<?=site_url('/login/');?>" method="post" enctype="application/x-www-form-urlencoded">
    <div class="fleft">
        <select name="cboCountry" class="select-search size-medium">
            <option>Pa&iacute;s</option>
        </select>

        <select name="cboSports" class="select-search size-medium">
            <option>Deporte</option>
        </select>

        <select name="cboCategorie" class="select-search size-medium">
            <option>Categor&iacute;a</option>
        </select>

        <input type="text" name="txtSearch" class="input-search size-medium" />
    </div>
    <div class="fright">
        <button type="submit" name="btnSubmit" class="button-small">Buscar</button>&nbsp;&nbsp;
        <a href="<?=site_url('/busqueda-avanzada/')?>">B&uacute;squeda avanzada</a>
    </div>
</form>