<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<form id="form1" action="<?=site_url('/account/create');?>" method="post" enctype="application/x-www-form-urlencoded">

    <div class="trow">
        <label for="cboIdUser">*Soy un</label>
        <select name="cboUserType">
            <option value="">Seleccione un tipo</option>
            <option value="<?=TBL_USERS_DEP?>">Deportista</option>
            <option value="<?=TBL_USERS_CLUB?>">Club</option>
            <option value="<?=TBL_USERS_REPR?>">Representante</option>
            <option value="<?=TBL_USERS_SPONSORS?>">Sponsors</option>
            <option value="<?=TBL_USERS_TRAINER?>">Entrenador</option>
            <option value="<?=TBL_USERS_PREPFIS?>">Preparador F&iacute;sico</option>
        </select>
    </div>

    <div class="trow">
        <label for="txtEmail"><span class="asterisco">*</span>Email</label>
        <input type="text" name="txtEmail" id="txtEmail" tabindex="2" />
    </div>

    <div class="trow">
        <label for="txtConfirmEmail"><span class="asterisco">*</span>Repite tu Email</label>
        <input type="text" id="txtConfirmEmail" tabindex="3" />
    </div>

    <div class="trow">
        <label for="txtPass"><span class="asterisco">*</span>Contrase&ntilde;a</label>
        <input type="password" name="txtPass" id="txtPass" tabindex="4" />
    </div>

    <div class="trow">
        <label for="txtConfirmPass"><span class="asterisco">*</span>Confirmaci&oacute;n de Contrase&ntilde;a</label>
        <input type="password" id="txtConfirmPass" tabindex="5" />
    </div>

    <div class="trow">
        <label>&nbsp;</label>
        <div class="fleft">
            <img id="imgCaptcha" src="<?=site_url('/captcha/index/'.md5(time()));?>" align="left" width="180" height="65" alt="" class="img-captcha" />
            <div class="fleft">
                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle" tabindex="5">
                    <param name="allowScriptAccess" value="sameDomain" />
                    <param name="allowFullScreen" value="false" />
                    <param name="movie" value="images/securimage_play.swf?audio=<?=site_url('/captcha/play/');?>&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
                    <param name="quality" value="high" />
                    <param name="bgcolor" value="#ffffff" />
                    <param name="wmode" value="transparent" />
                    <embed src="images/securimage_play.swf?audio=<?=site_url('/captcha/play/');?>&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="transparent" />
                </object><br />
                <a href="javascript:void($('#imgCaptcha').attr('src', '<?=str_replace(".html", "", site_url('/captcha/index/'));?>/'+Math.random()));" tabindex="-1" title="Mostrar otro"><img src="images/icon_refresh.gif" alt="Mostrar otro" onclick="this.blur()" align="bottom" width="22" height="20" /></a>
            </div>
        </div>
    </div>
    <div class="trow">
        <label class="label-form2 lbl-w4">*Ingrese C&oacute;digo:</label>
        <div class="float-left"><input type="text" id="txtCaptcha" maxlength="6" class="input-captcha" tabindex="7" /></div>
    </div>


    <div class="trow">
        <label>Deseo Recibir Novedades de LexerSports: <input type="checkbox" name="chkNewsletter" checked tabindex="8" value="1" /></label>
    </div>
    <div class="trow">
        <label><span class="asterisco">*</span>Acepto las pol&iacute;ticas de Privacidad de LexerSports: <input type="checkbox" name="chkPolitic" tabindex="9" /></label>
    </div>

    <div class="trow">
        <button type="submit" tabindex="10">Registrarme</button>
    </div>
</form>

<script type="text/javascript">
<!--
    Account.initializer();
-->
</script>