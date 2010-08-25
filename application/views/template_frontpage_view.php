<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
    <title><?=TITLE_GLOBAL . @$tlp_title;?></title>
    <meta name="description" content="<?=META_DESCRIPTION_GLOBAL . @$tlp_meta_description;?>" />
    <meta name="keywords" content="<?=META_KEYWORDS_GLOBAL . @$tlp_meta_keywords;?>" />
    <meta name="robots" content="index,follow" />

    <?php require('includes/head_inc.php');?>
    <?php if( isset($tlp_script) && !empty($tlp_script) ) {
        if( !is_array($tlp_script) ) $tlp_script = array($tlp_script);
        foreach( $tlp_script as $file ){
            require('js/includes/'.$file.'_inc.php');
        }
    }?>
</head>

<body>

    <!-- =============== HEADER =============== -->
    <div class="header">
        <div class="bg-header">
            <div class="container"> 
            <?php require('includes/header_inc.php');?>
            </div>
        </div>
    </div>

    <div class="clear container">
        <div class="clear span-24 last main-container-top"></div>
        <div class="clear span-24 last main-container-middle">
            <!-- =============== MAIN CONTAINER =============== -->
            <div class="cont-search">
            <?php require('includes/search_inc.php');?>
            </div>

            <div class="clear content"> 
                <?php if( isset($tlp_title_section) ){?>
                <h1><?=$tlp_title_section?></h1>
                <?php }?>

                <?php require($tlp_section);?>
            </div>
            
            <!-- =============== SIDEBAR =============== -->
            <?php if( !isset($tlp_siderbar_off) ){?>
            <div class="sidebar"> 
                <?php require('includes/sidebar_vert_inc.php');?>
            </div>
            <?php }?>

        </div>
        <div class="clear span-24 last main-container-bottom"></div>
    </div>

    <!-- =============== FOOTER =============== -->
    <div class="footer">
        <div class="bg-footer">
            <div class="container"> 
            <?php require('includes/footer_inc.php');?>
            </div>
        </div>
    </div>

</body>
</html>