<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<base href="<?=base_url();?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="images/favicon.ico" rel="stylesheet icon" type="image/ico" />


<link href="css/style<?=$this->config->item('sufix_pack_css');?>.css" rel="stylesheet" type="text/css" />
<!--[if IE 7]>
<link href="css/styleIE7<?=$this->config->item('sufix_pack_css');?>.css" rel="stylesheet" type="text/css" />
<![endif]-->

<!--========== LIBRARIES ============-->
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/helpers/helpers<?=$this->config->item('sufix_pack_js');?>.js"></script>
<!--========== END LIBRARIES =======-->


<script type="text/javascript">
<!--
<?php $indexphp = index_page();if( !empty($indexphp) ) $indexphp.="/";?>
    var baseURI = $("base").attr("href")+"<?=$indexphp;?>";
-->
</script>

<!--[if IE 6]>
<script type="text/javascript">
    var IE6UPDATE_OPTIONS = {
        icons_path: "js/plugins/ie6update/ie6update/images/"
    }
</script>
<script type="text/javascript" src="js/plugins/ie6update/ie6update/ie6update.js"></script>
<![endif]-->

<!--[if IE 6]>
<script type="text/javascript" src="js/plugins/DD_belatedPNG.js"></script>
<![endif]-->