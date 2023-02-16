<?php
if ( !function_exists( 'qloud_create_dynamic_style' ) ) {
    
    function qloud_create_dynamic_style() {

        $qloud_dynamic_css = array();
        $qloud_dynamic_css_min_width_1200px = array();

        $qloud_option = get_option('qloud_options');
   
        if(!empty($qloud_option["logo-dimensions"]["width"])) { $logo_width = $qloud_option["logo-dimensions"]["width"]; }
       
        if(!empty($qloud_option["logo-dimensions"]["height"])) { $logo_height = $qloud_option["logo-dimensions"]["height"]; }

        if(!empty($qloud_option["sticky-logo-dimensions"]["width"])) { $sticky_logo_width = $qloud_option["sticky-logo-dimensions"]["width"]; }
        if(!empty($qloud_option["sticky-logo-dimensions"]["height"])) { $sticky_logo_height = $qloud_option["sticky-logo-dimensions"]["height"]; }

        if(!empty($qloud_option["loader-dimensions"]["width"])) {  $loader_width = $qloud_option["loader-dimensions"]["width"]; }
        if(!empty($qloud_option["loader-dimensions"]["height"])) { $loader_height = $qloud_option["loader-dimensions"]["height"]; }

        if(!empty($qloud_option["footerlogo-dimensions"]["width"])) { $footerlogo_width = $qloud_option["footerlogo-dimensions"]["width"]; }
        if(!empty($qloud_option["footerlogo-dimensions"]["height"])) { $footerlogo_height = $qloud_option["footerlogo-dimensions"]["height"]; }

        

        if(isset($qloud_option["body_font"]["font-family"])) { $body_family = $qloud_option["body_font"]["font-family"]; }
        if(isset($qloud_option["body_font"]["font-size"])){ $body_size = $qloud_option["body_font"]["font-size"]; }
        if(isset($qloud_option["body_font"]["font-weight"])){ $body_weight = $qloud_option["body_font"]["font-weight"]; }

        if(isset($qloud_option["primary_menu"]["font-family"])) { $primary_family = $qloud_option["primary_menu"]["font-family"]; }
        if(isset($qloud_option["primary_menu"]["font-size"])) { $primary_size = $qloud_option["primary_menu"]["font-size"]; }
        if(isset($qloud_option["primary_menu"]["font-weight"])) { $primary_weight = $qloud_option["primary_menu"]["font-weight"]; }

        if(isset($qloud_option["sub_menu"]["font-family"])) { $sub_family = $qloud_option["sub_menu"]["font-family"]; }
        if(isset($qloud_option["sub_menu"]["font-size"])) { $sub_size = $qloud_option["sub_menu"]["font-size"]; }
        if(isset($qloud_option["sub_menu"]["font-weight"])) { $sub_weight = $qloud_option["sub_menu"]["font-weight"]; }

        if(isset($qloud_option["h1_font"]["font-family"])) { $h1_family = $qloud_option["h1_font"]["font-family"]; }
        
        if(isset($qloud_option["h1_font"]["font-size"])) { $h1_size = $qloud_option["h1_font"]["font-size"]; }
        if(isset($qloud_option["h1_font"]["font-weight"])) { $h1_weight = $qloud_option["h1_font"]["font-weight"]; }

        if(isset($qloud_option["h2_font"]["font-family"])) { $h2_family = $qloud_option["h2_font"]["font-family"]; }
        if(isset($qloud_option["h2_font"]["font-size"])) { $h2_size = $qloud_option["h2_font"]["font-size"]; }
        if(isset($qloud_option["h2_font"]["font-weight"])) { $h2_weight = $qloud_option["h2_font"]["font-weight"]; }

        if(isset($qloud_option["h3_font"]["font-family"])) { $h3_family = $qloud_option["h3_font"]["font-family"]; }
        if(isset($qloud_option["h3_font"]["font-size"])) { $h3_size = $qloud_option["h3_font"]["font-size"]; }
        if(isset($qloud_option["h3_font"]["font-weight"])) { $h3_weight = $qloud_option["h3_font"]["font-weight"]; }

        if(isset($qloud_option["h4_font"]["font-family"])) { $h4_family = $qloud_option["h4_font"]["font-family"]; }
        if(isset($qloud_option["h4_font"]["font-size"])) { $h4_size = $qloud_option["h4_font"]["font-size"]; }
        if(isset($qloud_option["h4_font"]["font-weight"])) { $h4_weight = $qloud_option["h4_font"]["font-weight"]; }

        if(isset($qloud_option["h5_font"]["font-family"])) { $h5_family = $qloud_option["h5_font"]["font-family"]; }
        if(isset($qloud_option["h5_font"]["font-size"])) { $h5_size = $qloud_option["h5_font"]["font-size"]; }
        if(isset($qloud_option["h5_font"]["font-weight"])) { $h5_weight = $qloud_option["h5_font"]["font-weight"]; }

        if(isset($qloud_option["h6_font"]["font-family"])) { $h6_family = $qloud_option["h6_font"]["font-family"]; }
        if(isset($qloud_option["h6_font"]["font-size"])) { $h6_size = $qloud_option["h6_font"]["font-size"]; }
        if(isset($qloud_option["h6_font"]["font-weight"])) { $h6_weight = $qloud_option["h6_font"]["font-weight"]; }

        if(isset($qloud_option["page_title_font"]["font-family"])) { $page_title_family = $qloud_option["page_title_font"]["font-family"]; }
        if(isset($qloud_option["page_title_font"]["font-size"])) { $page_title_size = $qloud_option["page_title_font"]["font-size"]; }
        if(isset($qloud_option["page_title_font"]["font-weight"])) { $page_title_weight = $qloud_option["page_title_font"]["font-weight"]; }

        if(isset($qloud_option["page_desc_font"]["font-family"])) { $page_desc_family = $qloud_option["page_desc_font"]["font-family"]; }
        if(isset($qloud_option["page_desc_font"]["font-size"])) { $page_desc_size = $qloud_option["page_desc_font"]["font-size"]; }
        if(isset($qloud_option["page_desc_font"]["font-weight"])) { $page_desc_weight = $qloud_option["page_desc_font"]["font-weight"]; }
	
        if(!empty($loader_width) && preg_match('~[0-9]+~', $loader_width) ){

            $qloud_dynamic_css[] = array( 
                'elements'  =>  '#loading img',
                'property'  =>  'width',
                'value'     =>  $loader_width. '!important'
            );
        }	
        if(!empty($loader_height) && preg_match('~[0-9]+~', $loader_height)){
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#loading img',
                'property'  =>  'height',
                'value'     =>  $loader_height. '!important'
            );
        }

        // Logo height & width
        if(isset($logo_width)) {
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.navbar-brand img.logo',
                'property'  =>  'width',
                'value'     =>  $logo_width. '!important'
            );
        }
        if(isset($logo_height)) {    
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.navbar-brand img.logo',
                'property'  =>  'height',
                'value'     =>  $logo_height. '!important'
            );
        }    

        // sticky height & width
        if(isset($sticky_logo_width)) {    
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.navbar-brand img.logo-sticky',
                'property'  =>  'width',
                'value'     =>  $sticky_logo_width. '!important'
            );
        }
        if(isset($sticky_logo_height)) {    
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.navbar-brand img.logo-sticky',
                'property'  =>  'height',
                'value'     =>  $sticky_logo_height. '!important'
            );
        }    

        
        // Change font 1
        if(isset($qloud_option['qloud_change_font']) && $qloud_option['qloud_change_font'] == 1 ){

            // body
            $qloud_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-family',
                'value'     =>  $body_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-size',
                'value'     =>  $body_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-weight',
                'value'     =>  $body_weight. '!important'
            );

            // primary menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-family',
                'value'     =>  $primary_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-size',
                'value'     =>  $primary_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#primary-menu',
                'property'  =>  'font-weight',
                'value'     =>  $primary_weight. '!important'
            );

            // sub menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-family',
                'value'     =>  $sub_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-size',
                'value'     =>  $sub_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '#sub-menu',
                'property'  =>  'font-weight',
                'value'     =>  $sub_weight. '!important'
            );

            // h1 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-family',
                'value'     =>  $h1_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-size',
                'value'     =>  $h1_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-weight',
                'value'     =>  $h1_weight. '!important'
            );

            // h2 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-family',
                'value'     =>  $h2_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-size',
                'value'     =>  $h2_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-weight',
                'value'     =>  $h2_weight. '!important'
            );

            // h3 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-family',
                'value'     =>  $h3_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-size',
                'value'     =>  $h3_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-weight',
                'value'     =>  $h3_weight. '!important'
            );

            // h4 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-family',
                'value'     =>  $h4_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-size',
                'value'     =>  $h4_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-weight',
                'value'     =>  $h4_weight. '!important'
            );

            // h5 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-family',
                'value'     =>  $h5_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-size',
                'value'     =>  $h5_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-weight',
                'value'     =>  $h5_weight. '!important'
            );

            // h6 menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-family',
                'value'     =>  $h6_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-size',
                'value'     =>  $h6_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-weight',
                'value'     =>  $h6_weight. '!important'
            );

            // page_title menu
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-family',
                'value'     =>  $page_title_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-size',
                'value'     =>  $page_title_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.page_title',
                'property'  =>  'font-weight',
                'value'     =>  $page_title_weight. '!important'
            );

             // page_desc menu
             $qloud_dynamic_css[] = array(
                'elements'  =>  '.page_desc',
                'property'  =>  'font-family',
                'value'     =>  $page_desc_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.page_desc',
                'property'  =>  'font-size',
                'value'     =>  $page_desc_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-weight',
                'value'     =>  $page_desc_weight. '!important'
            );

            $qloud_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-family',
                'value'     =>  $page_desc_family. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-size',
                'value'     =>  $page_desc_size. '!important'
            );
            $qloud_dynamic_css[] = array(
                'elements'  =>  '.button',
                'property'  =>  'font-weight',
                'value'     =>  $page_desc_weight. '!important'
            );
            
            
        }
       // }

        // Start generating if related arrays are populated
        if ( count( $qloud_dynamic_css ) > 0 ) {
            echo "<style type='text/css' id='qloud-dynamic-css'>\n\n";
            
            // Basic dynamic CSS
            if ( count( $qloud_dynamic_css ) > 0 ) {
                qloud_dynamic_style( $qloud_dynamic_css );
            }            
            echo '</style>';
        }
    }
}
add_action( 'wp_head', 'qloud_create_dynamic_style' );
