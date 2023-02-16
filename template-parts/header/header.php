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


?>
<header>

<?php 
     
  
    if(isset($qloud_option['top_bar_option']) && $qloud_option['top_bar_option'] === "yes" ){   

        if(isset($qloud_option['top_contact_option']) && $qloud_option['top_contact_option'] === "yes" ){  
             
        }   

        ?>
   

<?php } ?>
  
      
</header>
