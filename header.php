<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage qloud
 * @since 1.0
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<!-- Required meta tags -->
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $qloud_option = get_option('qloud_options');
  
    if ( ! function_exists( 'has_site_icon' ) || ! wp_site_icon() ) {
      if( !empty($qloud_option['qloud_background_favicon']['url']) ) { ?>
        <link rel="shortcut icon" href="<?php echo esc_url($qloud_option['qloud_background_favicon']['url']); ?>" />
        <?php 
      }
      else {
        ?>
        <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri().'/assets/images/favicon.ico'); ?>" />
        <?php 
      }
    }
   
wp_head(); ?>
</head> <?php

$iq_hide_breadcrumb = '';

if(function_exists('get_field')) {

  if(get_field('field_QnF1') == 'no') {

    if(get_field('banner_remove_options') == 'full-remove') {
        $iq_hide_breadcrumb .= 'iq-hide-breadcrumb';
    }

    if(get_field('banner_remove_options') == 'with-padding') {
      $iq_hide_breadcrumb .= 'iq-hide-with-pdt-breadcrumb';
    }

  }



} ?>

<body data-spy="scroll" data-offset="80" <?php body_class(); ?> id="<?php echo esc_attr($iq_hide_breadcrumb);  ?>">
<?php wp_body_open(); ?>
<?php
if(isset($qloud_option['qloud_loader_switch']))
{
  $options= $qloud_option['qloud_loader_switch'];
}
else {
  $options = '';
}

if($options != 0 || isset($qloud_option['qloud_loader_switch']) ) { ?>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center"> <?php
            if($options == 1) {
                if(!empty($qloud_option['qloud_background_loader']['url'])){
                  $bgurl = $qloud_option['qloud_background_loader']['url']; ?>
                  <div class="load-img" >
                      <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','qloud'); ?>">
                  </div> <?php
                }
            } else if($options == 2) {
                if(isset($qloud_option['qloud_loader_tag'])) {
                    $tag= $qloud_option['qloud_loader_tag'];
                } else {
                    $tag = "2";
                }
                if(isset($qloud_option['qloud_loader_back_color_text'])) {
                    $style = "color:".$qloud_option['qloud_loader_back_color_text']."";
                } else {
                    $style = '';
                }
                echo '<'.esc_attr($tag).' style='.esc_attr($style).'>'.esc_html($qloud_option['qloud_loader_text']).'</'.esc_attr($tag).'>';
            } ?>
        </div>
    </div>
    <!-- loading End --> <?php 
} else {
  $bgurl = get_template_directory_uri().'/assets/images/loader.gif'; ?>
  <div id="loading">
      <div id="loading-center">
          <div class="load-img">
              <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','qloud'); ?>">
         </div>
      </div>
  </div> <?php 
} ?>

<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html__( 'Skip to content', 'qloud' ); ?></a> <?php

      get_template_part( 'template-parts/header/header', 'one' );   

          if(isset($qloud_option['display_banner'])) {
              $opt = $qloud_option['display_banner'];
              if($opt == "yes") {
                  qloud_display_header(); 
              }
          } else {
              qloud_display_header(); 
          } ?>

  <div class="site-content-contain">
    <div id="content" class="site-content">
      