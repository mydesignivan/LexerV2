<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')!='' ){?>
    <div class="<?=$this->session->flashdata('status')?>">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>

<form id="form1" action="<?=site_url('/account/save');?>" method="post" enctype="application/x-www-form-urlencoded" onsubmit="return Account.save();">
    <div class="trow">
        <label for="cboIdUser">Soy un</label>
        <select name="cboIdUser" id="cboIdUser">
            <option value="deportista">Deportista</option>
            <option value="club">Club</option>
            <option value="representante">Representante</option>
            <option value="sponsor">Sponsor</option>
            <option value="entrenador">Entrenador</option>
            <option value="prepfisico">Preparador F&iacute;sico</option>
        </select>
    </div>

    <div class="trow">
        <label for="txtEmail"><span class="asterisco">*</span>txtEmail</label>
        <input type="text" name="txtEmail" id="txtEmail" />
    </div>

    <div class="trow">
        <label for="txtConfirmEmail"><span class="asterisco">*</span>Repite tu Email</label>
        <input type="text" name="txtConfirmEmail" id="txtConfirmEmail" />
    </div>

    <div class="trow">
        <label for="txtPass"><span class="asterisco">*</span>Contrase&ntilde;a</label>
        <input type="password" name="txtPass" id="txtPass" />
    </div>

    <div class="trow">
        <label for="txtConfirmPass"><span class="asterisco">*</span>Confirmaci&oacute;n de Contrase&ntilde;a</label>
        <input type="password" name="txtConfirmPass" id="txtConfirmPass" />
    </div>

    <div class="trow">
        <label>&nbsp;</label>
        <div class="fleft">
            <img id="imgCaptcha" src="<?=site_url('/captcha/index/'.md5(time()));?>" align="left" width="180" height="65" alt="" class="img-captcha" />
            <div class="fleft">
                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
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
        <div class="float-left"><input type="text" name="txtCaptcha" maxlength="6" class="input-captcha validate" tabindex="12" /></div>
    </div>


    <div class="trow">
        <label>Deseo Recibir Novedades de LexerSports: <input type="checkbox" name="chkNewsletter" checked /></label>
    </div>
    <div class="trow">
        <label><span class="asterisco">*</span>Acepto las pol&iacute;ticas de Privacidad de LexerSports: <input type="checkbox" name="chkPolitic" /></label>
    </div>

    <div class="trow">
        <button type="submit">Registrarme</button>
    </div>
</form>

<script type="text/javascript">
<!--
    Account.initializer();
-->
</script>