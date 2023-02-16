<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage qloud
* @since 1.0
* @version 1.0
*/

$qloud_option = get_option('qloud_options');
$row = "row";
$cflag = 1;
$sflag = 1;
$calign="";
$salign="";
if(isset($qloud_option['qloud_top_header_var']))
{
  $topopt = $qloud_option['qloud_top_header_var'];
  if($topopt == 1)
  {
    $row = "row";
    $cflag = 1;
    $sflag = 1;
    $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 2)
  {
    $row = "row";
    
    $cflag = 1;
    $sflag = 0;
      $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 3)
  {
    $row = "row";
    
    $cflag = 0;
    $sflag = 1;
    $calign="text-left";
    $salign="text-right";
  }
  if($topopt == 4)
  {
    $row = "row flex-row-reverse";
    
    $cflag = 1;
    $sflag = 1;
      $calign="text-right";
    $salign="text-left";
  }
  if($topopt == 5)
  {
    $row = "row flex-row-reverse";
    
    $cflag = 1;
    $sflag = 0;
      $calign="text-right";
    $salign="text-left";
  }
  if($topopt == 6)
  {
    $row = "row flex-row-reverse";    
    $cflag = 0;
    $sflag = 1;
      $calign="text-right";
    $salign="text-left";
  }

}

?>
<div class="<?php echo esc_attr($row); ?> ">
  
    <div class="col-lg-6 <?php echo esc_attr($calign); ?>">
    <?php 
    if($cflag == 1)
    {
  ?>
        <div class="top-contact">
                <ul class="list-inline">
                  <li class="list-inline-item">
                    <a href="mail:<?php echo esc_attr($qloud_option['email']) ?>"><i class="fa fa-envelope"></i>
                      <?php echo esc_html($qloud_option['email']); ?>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="tel:<?php echo esc_attr($qloud_option['phone']); ?>"><i class="fa fa-phone"></i>
                      <?php echo esc_html($qloud_option['phone']); ?>
                    </a>
                  </li>
                </ul>        
        </div>
        <?php } ?>

    </div>
    
    
    <div class="col-lg-6  <?php echo esc_attr($salign); ?>">
    <?php 
    if($sflag == 1)
    { 
    ?>
        <div class="top-social">
            <ul class="list-inline">
                <?php
                    $data = $qloud_option['social-media-iq'];
                    foreach ($data as $key=>$options )
					          { 
                        if($options) {
                            echo '<li class="list-inline-item"><a href="'.$options.'"><i class="fa fa-'.$key.'"></i></a></li>';
                        }
                    } 
                ?>
            </ul>
        </div>
        <?php } 
    ?>
    </div>
    
</div>
