<base href="<?=base_url();?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<link href="images/favicon.ico" rel="stylesheet icon" type="image/ico" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!--[if IE]>
<link href="css/styleIE.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--========== LIBRARIES ============-->
<script type="text/JavaScript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/helpers.min.js"></script>
<script type="text/javascript" src="js/comun.js"></script>
<!--========== END LIBRARIES =======-->


<script type="text/javascript">
<!--
<?php 
    $indexphp = index_page();
    if( !empty($indexphp) ) $indexphp.="/";
?>
    var baseURI = $("base").attr("href")+"<?=$indexphp;?>";
-->
</script>

<!--========== CLASS ============-->
<script type="text/javascript" src="js/class.login.js"></script>
<!--======= END CLASS =======-->


<!--[if IE 6]>
<script type="text/javascript">
    /*Load jQuery if not already loaded*/ if(typeof jQuery == 'undefined'){ document.write("<script type=\"text/javascript\"   src=\"js/ie6update/jquery.min.js\"></"+"script>"); var __noconflict = true; }
    var IE6UPDATE_OPTIONS = {
        icons_path: "js/ie6update/ie6update/images/"
    }
</script>
<script type="text/javascript" src="js/ie6update/ie6update/ie6update.js"></script>
<![endif]-->

<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
<![endif]-->

<?php $execscript=true;?>