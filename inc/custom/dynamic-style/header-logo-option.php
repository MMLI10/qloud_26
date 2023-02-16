<?php
function qloud_logo_dispaly() {
    
    $qloud_option= get_option('qloud_options');
    $page_id = get_queried_object_id();
    $menu_style_key = get_field('key_header_variation');
    $stick_key = get_field('header_stick_logovariation');
    
    if(get_field('header_logovariation') != 'default' && get_field('header_menu_style') != 'default' ) {
        iq_get_acf_logo(get_field('header_logovariation'));
    } else {
        if(isset($qloud_option['qloud_logo_type'])){
            iq_get_redux_logo($qloud_option['qloud_logo_type']);
        } 
    }

    if(get_field('header_stick_logovariation') != 'default' && get_field('header_menu_style') != 'default' ) {
        iq_get_acf_stick_logo(get_field('header_stick_logovariation'));
    } else {
        if(isset($qloud_option['qloud_logo_sticky_type'])){
            iq_get_redu_stickx_logo($qloud_option['qloud_logo_sticky_type']);
        }    
    }

}

// ACF Normal Logo
function iq_get_acf_logo($logo = ''){

    $key = get_field('header_layout');
    $key = get_field('header_layout');
    $iq_logo_img = $key['header_as_logo']['url'];
    $iq_logo_text = $key['logo_as_text'];
    $iq_logo_tag = $key['logo_text_tag'];
    $iq_logo_color = $key['logo_color_text'];

    if($logo == '1') { ?>

		<img class="img-fluid logo" src="<?php echo esc_url($iq_logo_img); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> <?php

    } elseif($logo == '2') {

        $style = '';
		if(!empty($iq_logo_color)) {
			$style = 'style=color:'.sanitize_hex_color($iq_logo_color).'';
		}
        if(!empty($iq_logo_text)) {
			echo '<'.esc_attr($iq_logo_tag).' class="logo" '.esc_attr($style).'>'.esc_html($iq_logo_text).'</'.esc_attr($iq_logo_tag).'>'; 
        } else {
            echo '<'.esc_attr($iq_logo_tag).' class="logo" '.esc_attr($style).'>'.esc_html__('qloud','qloud').'</'.esc_attr($iq_logo_tag).'>'; 
        }
        
    }
}

// ACF Sticky Logo
function iq_get_acf_stick_logo($logo = ''){

    $key = get_field('header_stick_layout');
    $iq_logo_img = $key['header_stick_as_logo']['url'];
    $iq_logo_tag = $key['logo_stick_text_tag'];
    $iq_logo_text = $key['logo_stick_as_text'];
    $iq_logo_color = $key['logo_stick_color_text'];

    if($logo == '1') {?>

		<img class="img-fluid logo-sticky" src="<?php echo esc_url($iq_logo_img); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> <?php
        
    } elseif($logo == '2') {
        
        $style = '';
		if(!empty($iq_logo_color)) {
			$style = 'style=color:'.sanitize_hex_color($iq_logo_color).'';
		}
        if(!empty($iq_logo_text)) {
			echo '<'.esc_attr($iq_logo_tag).' class="logo-sticky" '.esc_attr($style).'>'.esc_html($iq_logo_text).'</'.esc_attr($iq_logo_tag).'>'; 
        } else {
            echo '<'.esc_attr($iq_logo_tag).' class="logo-sticky" '.esc_attr($style).'>'.esc_html__('qloud','qloud').'</'.esc_attr($iq_logo_tag).'>'; 
        }
        
    }

}

//Redux Nornal  Logo
function iq_get_redux_logo($logo = ''){

    if($logo == '1') {

        $qloud_option= get_option('qloud_options');

        if(isset($qloud_option['qloud_logo_type']) && $qloud_option['qloud_logo_type'] == 1) {
            if(isset($qloud_option['qloud_logo']['url']) && $qloud_option['qloud_logo']['url'] != '') { 
                $logo = $qloud_option['qloud_logo']['url']; ?>
                <img class="img-fluid logo" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>">  <?php
            } else { ?>
                <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>">  <?php 
            }
        }
        
    } elseif($logo == '2') {

        $qloud_option= get_option('qloud_options');

        if(isset($qloud_option['qloud_logo_type']) && $qloud_option['qloud_logo_type'] == 2) {
            if (isset($qloud_option['qloud_header_logo_text']) && $qloud_option['qloud_header_logo_text'] != '')  {
                if(isset($qloud_option['qloud_header_logo_tag'])) {
                    $tag= $qloud_option['qloud_header_logo_tag'];
                }
                if(isset($qloud_option['header_logo_color'])) {
                    $style = "color:".sanitize_hex_color($qloud_option['header_logo_color'])."";
                } else {
                    $style = '';
                }
                echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo">'.esc_html($qloud_option['qloud_header_logo_text']).'</'.esc_attr($tag).'>'; 
            } else {
                if(isset($qloud_option['qloud_header_logo_tag'])) {
                    $tag= $qloud_option['qloud_header_logo_tag'];
                }
                if(isset($qloud_option['header_logo_color'])) {
                    $style = "color:".sanitize_hex_color($qloud_option['header_logo_color'])."";
                } else {
                    $style = '';
                }
                echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo">'.esc_html__('qloud','qloud').'</'.esc_attr($tag).'>'; 
            }
        }

    }

}

//Redux Sticky Logo
function iq_get_redu_stickx_logo($logo = ''){

    if($logo == '1') {

        $qloud_option= get_option('qloud_options');

        if(isset($qloud_option['qloud_logo_sticky_type']) && $qloud_option['qloud_logo_sticky_type'] == 1) {
            if(isset($qloud_option['qloud_header_logo_sticky']['url']) && $qloud_option['qloud_header_logo_sticky']['url'] != '') { 
                $logo = $qloud_option['qloud_header_logo_sticky']['url']; ?>
                <img class="img-fluid  logo-sticky" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>">  <?php
            } else { ?>
                <img class="img-fluid  logo-sticky" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'qloud', 'qloud' ); ?>"> <?php
            } 
        }
        
    } elseif($logo == '2') {

        $qloud_option= get_option('qloud_options');

        if(isset($qloud_option['qloud_logo_sticky_type']) && $qloud_option['qloud_logo_sticky_type'] == 2) {
                
            if (isset($qloud_option['qloud_header_logo_sticky_text']) && $qloud_option['qloud_header_logo_sticky_text'] != '') {
                if(isset($qloud_option['qloud_header_logo_sticky_tag'])) {
                    $tag= $qloud_option['qloud_header_logo_sticky_tag'];
                }
                if(isset($qloud_option['header_logo_sticky_color'])) {
                  $style = "color:".sanitize_hex_color($qloud_option['header_logo_sticky_color'])."";
                } else {
                  $style = '';
                }
                echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo-sticky">'.esc_html($qloud_option['qloud_header_logo_sticky_text']).'</'.esc_attr($tag).'>'; 
            } else {
                if(isset($qloud_option['qloud_header_logo_sticky_tag'])) {
                    $tag= $qloud_option['qloud_header_logo_sticky_tag'];
                }
                if(isset($qloud_option['header_logo_sticky_color'])) {
                  $style = "color:".sanitize_hex_color($qloud_option['header_logo_sticky_color'])."";
                } else {
                  $style = '';
                }
                echo '<'.esc_attr($tag).' style='.esc_attr($style).' class="logo-sticky">'.esc_html__('qloud','qloud').'</'.esc_attr($tag).'>'; 
            }
        }

    }

}
