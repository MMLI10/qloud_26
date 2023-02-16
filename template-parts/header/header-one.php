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

$sticky = '';
$header_class='';

if(isset($qloud_option['qloud_sticky_header_switch'])){
  $sticky =  $qloud_option['qloud_sticky_header_switch'];
}

if(function_exists('get_field')) {

    $color = get_field('header_menu_color_style');

    if($color == 'dark' && get_field('header_menu_style') == '1') {
        $header_class .= ' iq-dark';
    }

}

if($sticky == "on"){

    $header_class .= ' has-sticky';
    
}

if(function_exists('get_field') && class_exists('ReduxFramework')) {
  
  $page_id = get_queried_object_id();
  $key = get_field('header_menu_style' , $page_id);

  if(isset($key) && get_field('header_menu_style' , $page_id) != 'default') {

      if(get_field('header_menu_style' , $page_id) == '1'){

          $header_class .= ' header-style-one';

      }

      if(get_field('header_menu_style' , $page_id) == '2'){

          $header_class .= ' header-style-two';
        
    }

  } elseif(isset($qloud_option['qloud_header_variation_style']) && $qloud_option['qloud_header_variation_style'] == '1') {

      $header_class .= ' header-style-one';

  } elseif(isset($qloud_option['qloud_header_variation_style']) && $qloud_option['qloud_header_variation_style'] == '2') {

      $header_class .= ' header-style-two';

  } else {

      $header_class .= ' header-style-one';

  }  

} else {

      $header_class .= ' header-style-one';

}

if(isset($qloud_option['qloud_header_variation'])){
  $header_class .= ' '.$qloud_option['qloud_header_variation'];
}

if(isset($qloud_option['header_back_opt_switch']) && $qloud_option['header_back_opt_switch'] == 3){
$header_class .=' header_transperent';
} ?>

<header class="header<?php echo esc_attr($header_class);  ?>" id="main-header"> <?php

    if(isset($qloud_option['qloud_top_header_switch']) && $qloud_option['qloud_top_header_switch']) { ?>    
        <div class="sub-header">
            <div class="container"> <?php
                get_template_part( 'template-parts/header/header', 'top' ); ?>
            </div>
        </div> <?php  
    } ?>
    
    <div class="container main-header">
        <div class="row no-gutters">     
            <div class="col-sm-12">
                

                <nav class="navbar navbar-expand-lg navbar-light">
                

                    <div class="logo_block">
                        <a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>"> <?php
                            if(function_exists('get_field') && class_exists('ReduxFramework') ) {
                            echo qloud_logo_dispaly();
                            } else {  ?>
                                <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                                <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud3' ); ?>"> <?php
                            } ?>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                        <span class="menu-btn d-inline-block" id="menu-btn">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                     </span>
                        </span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <?php 
                        if ( has_nav_menu( 'top' ) ) : ?> <?php 
                            wp_nav_menu( array(
                                'theme_location' => 'top',
                                'menu_class'     => 'navbar-nav',
                                'menu_id'        => 'top-menu',
                                'container_id'   => 'iq-menu-container',
                            ) ); ?> <?php 
                        endif; ?>
                        <div class="sub-main iq-mobile-main">
                            <ul> <?php

                                if(isset($qloud_option['header_display_button'])) {
                                    $options = $qloud_option['header_display_button'];
                                    if($options == "yes") { ?> <?php 
                                        if((!empty($qloud_option['qloud_download_link'])) && (!empty($qloud_option['qloud_download_title']))) {
                                            $dlink = $qloud_option['qloud_download_link']; 
                                            $dtitle = $qloud_option['qloud_download_title'];  ?>
                                            <li class="d-inline-block">
                                                <a href="<?php echo esc_url($dlink,'qloud'); ?>" class="login iq-button <?php echo esc_attr($qloud_option['select_button_style']); ?> <?php 
                                                    echo esc_attr($qloud_option['select_button_shape']);?>" target="_blank"><?php
                                                    echo esc_attr($dtitle,'qloud'); ?>
                                                </a>
                                            </li> <?php
                                        }
                                    }
                                } ?> <?php

                                if(isset($qloud_option['header_display_signup_button'])) {
                                    $options = $qloud_option['header_display_signup_button'];
                                    if($options == "yes") { ?> <?php
                                        if((!empty($qloud_option['qloud_signup_link'])) && (!empty($qloud_option['qloud_signup_title']))) {
                                            $dlink1 = $qloud_option['qloud_signup_link'];
                                            $dtitle1 = $qloud_option['qloud_signup_title'];  ?>
                                            <li class="d-inline-block iq-signup-main">
                                                <a href="<?php echo esc_url($dlink1,'qloud'); ?>" class="signup iq-button <?php echo esc_attr($qloud_option['select_button_style1']);?> <?php
                                                    echo esc_attr($qloud_option['select_button_shape1']);?>" target="_blank"><?php 
                                                    echo esc_attr($dtitle1,'qloud'); ?>
                                                </a>
                                            </li> <?php
                                        } ?> <?php
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="sub-main">
                        <ul> <?php
                            if(isset($qloud_option['header_display_button'])) {
                                $options = $qloud_option['header_display_button'];
                                if($options == "yes") { ?> <?php 
                                    if((!empty($qloud_option['qloud_download_link'])) && (!empty($qloud_option['qloud_download_title']))) {
                                        $dlink = $qloud_option['qloud_download_link']; 
                                        $dtitle = $qloud_option['qloud_download_title'];  ?>
                                        <li class="d-inline-block">
                                            <a href="<?php echo esc_url($dlink,'qloud'); ?>" class="login iq-button <?php echo esc_attr($qloud_option['select_button_style']); ?>" target="_blank"><?php
                                                echo esc_attr($dtitle,'qloud'); ?>
                                            </a>
                                        </li> <?php
                                    }
                                }
                            } ?> <?php

                            if(isset($qloud_option['header_display_signup_button'])) {
                                $options = $qloud_option['header_display_signup_button'];
                                if($options == "yes") { ?> <?php
                                    if((!empty($qloud_option['qloud_signup_link'])) && (!empty($qloud_option['qloud_signup_title']))) {
                                        $dlink1 = $qloud_option['qloud_signup_link'];
                                        $dtitle1 = $qloud_option['qloud_signup_title'];  ?>
                                        <li class="d-inline-block iq-signup-main">
                                            <a href="<?php echo esc_url($dlink1,'qloud'); ?>" class="signup iq-button <?php echo esc_attr($qloud_option['select_button_style1']);?> <?php
                                                echo esc_attr($qloud_option['select_button_shape1']);?>" target="_blank"><?php 
                                                echo esc_attr($dtitle1,'qloud'); ?>
                                            </a>
                                        </li> <?php
                                    } ?> <?php
                                }
                            } ?>
                        </ul>
                    </div>
                </nav>

          </div>
        </div>
    </div>

</header>
<div class="iq-height"></div>
