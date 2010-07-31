<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!-- =============== TOP HEADER =============== -->
<div class="span-24 last"> 
    <h1 class="title_header">INGENIERIA TERMOMECANICA PRIOLO</h1>
    <a href="<?=$this->config->item('base_url');?>"><img src="images/logo.png" alt="Ingenieria Termomecanica Priolo" width="149" height="117" class="float-right" /></a>
</div>

<!-- =============== SLIDER =============== -->
<?php if( $this->uri->segment(1)!="panel" ) {?>
<div class="clear span-24 last"> 
    <div id="slider" class="header_slider">
        <img src="images/slider/0.jpg" alt="" width="918" height="316" />
        <img src="images/slider/1.jpg" alt="" width="918" height="316" />
        <img src="images/slider/2.jpg" alt="" width="918" height="316" />
        <img src="images/slider/3.jpg" alt="" width="918" height="316" />
        <img src="images/slider/4.jpg" alt="" width="918" height="316" />
    </div>
</div>
<?php }?>
<!-- =============== MENU =============== -->

<?php if( $this->session->userdata('logged_in') && $this->uri->segment(1)=="panel" ) {
    $page = $this->uri->segment(2);?>

<div class="clear span-24 last"> 
    <ul class="menu menu-header">
        <li><a href="<?=$this->config->item('base_url');?>">Home</a><div class="shadow"></div></li>
        <li <?php if( $page=="myaccount" ) echo 'class="current"';?>><a href="<?=site_url('/panel/myaccount/')?>">Mi Cuenta</a><div class="shadow"></div></li>
        <li <?php if( $page=="categories" ) echo 'class="current"';?>><a href="<?=site_url('/panel/categories/')?>">Categor&iacute;as</a><div class="shadow"></div></li>
        <li <?php if( $page=="products" ) echo 'class="current"';?>><a href="<?=site_url('/panel/products/')?>">Productos</a><div class="shadow"></div></li>
        <li <?php if( $page=="obras" ) echo 'class="current"';?>><a href="<?=site_url('/panel/obras/')?>">Obras</a><div class="shadow"></div></li>
        <li <?php if( $page=="proveedores" ) echo 'class="current"';?>><a href="<?=site_url('/panel/proveedores/')?>">Proveedores</a><div class="shadow"></div></li>
        <li <?php if( $page=="pages" ) echo 'class="current"';?>><a href="<?=site_url('/panel/pages/')?>">P&aacute;ginas</a><div class="shadow"></div></li>
        <li class="no-line <?php if( $page=="logout" ) echo 'current';?>"><a href="<?=site_url('/panel/logout/')?>">Logout</a><div class="shadow"></div></li>
    </ul>
</div>

<?php }else{
    $page = $this->uri->segment(1);?>

<div class="clear span-24 last"> 
    <ul class="menu">
        <li <?php if( $page=="" || $page=="index" ) echo 'class="current"';?>><a href="<?=$this->config->item('base_url');?>">Home</a><div class="shadow"></div></li>
        <li <?php if( $page=="empresa" ) echo 'class="current"';?>><a href="<?=site_url('/empresa/')?>">Empresa</a><div class="shadow"></div></li>
        <li <?php if( $page=="obras" ) echo 'class="current"';?>><a href="<?=site_url('/obras/')?>">Obras</a><div class="shadow"></div></li>
        <li <?php if( $page=="servicios" ) echo 'class="current"';?>><a href="<?=site_url('/servicios/')?>">Servicios</a><div class="shadow"></div></li>
        <li <?php if( $page=="productos" ) echo 'class="current"';?>><a href="<?=site_url('/productos/')?>">Productos</a><div class="shadow"></div></li>
        <li <?php if( $page=="trabaje-con-nosotros") echo 'class="current"';?>><a href="<?=site_url('/trabaje-con-nosotros/')?>">Trabaje con Nosotros</a><div class="shadow"></div></li>
        <li class="no-line <?php if( $page=="contacto" ) echo 'current';?>"><a href="<?=site_url('/contacto/')?>">Contacto</a><div class="shadow"></div></li>
    </ul>
</div>

<?php }?>