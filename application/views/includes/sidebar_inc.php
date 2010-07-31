<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="sidebar">
    <div class="top"></div>
    <div class="middle">

<?php foreach( $tlp_sidebar['listProv'] as $row ) {?>
        <h3><?=$row['name']?></h3>
        <div class="line"></div>

        <?php foreach( $tlp_sidebar['listGallery'][$row['proveedor_id']] as $row2 ){
            $img = '<img src="'. UPLOAD_DIR_PROV.$row2['thumb'] .'" alt="'. $row2['thumb'] .'" width="'. $row2['width'] .'" height="'. $row2['height'] .'" />';

            if( $row2['link']!='' ) echo '<a href="'.$row2['link'].'" target="_blank">'. $img .'</a>';
            else echo $img;

            echo '<br />';
        }?>
<?php }?>

    </div>
    <div class="bottom"></div>
</div>