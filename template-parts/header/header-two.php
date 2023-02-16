<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage qloud
* @since 1.0
* @version 1.0
*/
$qloud_option= get_option('qloud_options');
$qloud_options= get_option('qloud_options');
$sticky = '';
$header_class='';
if(isset($qloud_option['qloud_sticky_header_switch'])){
  $sticky =  $qloud_option['qloud_sticky_header_switch'];
}


if($sticky == "1"){
  $header_class .= ' has-sticky';
}


if(isset($qloud_option['qloud_header_variation'])){
  $header_class .= ' '.$qloud_option['qloud_header_variation'];
}

if(isset($qloud_option['header_back_opt_switch']) && $qloud_option['header_back_opt_switch'] == 3){
$header_class .=' header_transperent';
}

?>
<header class="header2 <?php echo esc_attr($header_class);  ?>" id="main-header">  
 <?php 
          if(isset($qloud_option['qloud_top_header_switch']) && $qloud_option['qloud_top_header_switch'])
          { ?>    
  <div class="sub-header">
    <div class="container">
      <?php
            get_template_part( 'template-parts/header/header', 'top' );
          ?>
         
    </div>
  </div>
  <?php  }
            
          ?>
    
      <div class="container main-header">
       
        <div class="row no-gutters">        
          <div class="col-sm-12">
            <div class="logo_block">
                <a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
                <?php  
                if(isset($qloud_option['qloud_logo_type']) && $qloud_option['qloud_logo_type'] == 1)
                {
                  if(isset($qloud_option['qloud_logo']['url']) && $qloud_option['qloud_logo']['url'] != '')
                  { 
                    $logo = $qloud_option['qloud_logo']['url'];                 

                  ?>
                    <img class="img-fluid logo" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                  <?php
                  } 
                  else 
                  { ?>
                    <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                    <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                  <?php }
                 
                
              }

              else if(isset($qloud_option['qloud_logo_type']) && $qloud_option['qloud_logo_type'] == 2)
              {
                if (isset($qloud_option['qloud_header_logo_text']) && $qloud_option['qloud_header_logo_text'] != '') 
                {
                   if(isset($qloud_option['qloud_header_logo_tag']))
                    {
                      $tag= $qloud_option['qloud_header_logo_tag'];
                    }

                    if(isset($qloud_option['header_logo_color']))
                    {
                      $style = "color:".sanitize_hex_color($qloud_option['header_logo_color'])."";
                    }
                    else {
                      $style = '';
                    }

                   echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo">'.esc_html($qloud_option['qloud_header_logo_text']).'</'.esc_attr($tag).'>'; 
                }
                
              }

              if(isset($qloud_option['qloud_logo_sticky_type']) && $qloud_option['qloud_logo_sticky_type'] == 1)
              {
                 
                 if(isset($qloud_option['qloud_header_logo_sticky']['url']) && $qloud_option['qloud_header_logo_sticky']['url'] != '')
                { 
                  $logo = $qloud_option['qloud_header_logo_sticky']['url'];                 

                ?>
                   <img class="img-fluid  logo-sticky" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                <?php
                } 
                
              }

              else if(isset($qloud_option['qloud_logo_sticky_type']) && $qloud_option['qloud_logo_sticky_type'] == 2)
              {
                
                if (isset($qloud_option['qloud_header_logo_sticky_text']) && $qloud_option['qloud_header_logo_sticky_text'] != '') 
                {
                   if(isset($qloud_option['qloud_header_logo_sticky_tag']))
                    {
                      $tag= $qloud_option['qloud_header_logo_sticky_tag'];
                    }

                    if(isset($qloud_option['header_logo_sticky_color']))
                    {
                      $style = "color:".sanitize_hex_color($qloud_option['header_logo_sticky_color'])."";
                    }
                    else {
                      $style = '';
                    }

                   echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo-sticky">'.esc_html($qloud_option['qloud_header_logo_sticky_text']).'</'.esc_attr($tag).'>'; 
                }
              }
              else 
              { 
              ?>
                <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> 
                
                
            <?php } ?>
              </a>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light menu">
            
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><span class="menu-btn d-inline-block" id="menu-btn">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                     </span></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if ( has_nav_menu( 'top' ) ) : ?>
											<?php wp_nav_menu( array(
												'theme_location' => 'top',
                        'menu_class'     => 'navbar-nav',
                        'menu_id'        => 'top-menu',
                        'container_id'   => 'iq-menu-container',
											) ); ?>
								<?php endif; ?>
              </div>									
              <div class="sub-main">
                <ul >
                <?php
                if(isset($qloud_option['header_display_button']))
                {
                $options = $qloud_option['header_display_button'];
                if($options == "yes")
                {
                ?>
                  
                    <?php if((!empty($qloud_option['qloud_download_link'])) && (!empty($qloud_option['qloud_download_title'])))
                    {
                        $dlink = $qloud_option['qloud_download_link']; 
                        $dtitle = $qloud_option['qloud_download_title']; 
                    ?>
                   
                    <li class="d-inline"><a href="<?php echo esc_url($dlink,'qloud'); ?>" class="login iq-button <?php echo esc_attr($qloud_option['select_button_style']); ?> <?php echo esc_attr($qloud_option['select_button_shape']);?>" target="_blank"><?php echo esc_attr($dtitle,'qloud'); ?></a></li>
                  
                  <?php
                  }
                }
              }
                ?>

                 <?php
                if(isset($qloud_option['header_display_signup_button']))
                {
                $options = $qloud_option['header_display_signup_button'];
                if($options == "yes")
                {
                ?>
                  
                   

                     <?php if((!empty($qloud_option['qloud_signup_link'])) && (!empty($qloud_option['qloud_signup_title'])))
                    {
                        $dlink1 = $qloud_option['qloud_signup_link']; 
                        $dtitle1 = $qloud_option['qloud_signup_title']; 
                    ?>
                    <li class="d-inline"><a href="<?php echo esc_url($dlink1,'qloud'); ?>" class="signup iq-button <?php echo esc_attr($qloud_option['select_button_style1']);?> <?php  echo esc_attr($qloud_option['select_button_shape1']);?>" target="_blank"><?php echo esc_attr($dtitle1,'qloud'); ?></a></li>
                    <?php } ?>
                  
                  <?php
                  }
                }
                ?>
                </ul>
              </div>
            </nav>         
          </div>
        </div>
      </div>
</header>
<div class="iq-height"></div>
