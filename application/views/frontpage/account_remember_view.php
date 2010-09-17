<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<?php if( $this->session->flashdata('status')=='error' ){?>
    <div class="error">
        <?=$this->session->flashdata('message')?>
    </div>
<?php }?>


<?php if( $this->session->flashdata('status')=='success' ){?>

<form id="form1" action="<?//=site_url('/account/rememberpassend');?>" method="post" enctype="application/x-www-form-urlencoded">
    <p>Muy bien, le hemos enviado la contrase&ntilde;a a su cuenta de email. Reviselo!</p>
    <p>Usted puede mantener esta pagina abierta mientras chequea su email. Si usted no recibe el email en el transcurso de un minuto o dos pruebe <a href="javascript:$('#form1').submit();">Reenviar el formulario</a></p>
    <input type="hidden" name="txtEmail" value="<?=$this->session->flashdata('email')?>" />
</form>

<?php }else{?>

    <form id="form1" action="<?//=site_url('/account/rememberpassend');?>" method="post" enctype="application/x-www-form-urlencoded">

        <p>Para iniciar el proceso de recuperación de contraseña, por favor, introduzca su dirección de email.</p>

        <div class="trow">
            <label for="txtEmail" class="label label-account">E-mail</label>
            <input type="text" id="txtEmail" name="txtEmail" class="input-account" />
        </div>

        <div class="tow">
            <label for="txtEmail" class="label label-account">&nbsp;</label>
            <button type="submit" tabindex="10">Enviar</button>
        </div>
    </form>

    <script type="text/javascript">
    <!--
        Account.initializer();
    -->
    </script>

<?php }?>
