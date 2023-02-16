<?php
if(function_exists('get_field') && class_exists('ReduxFramework'))
{
    add_action( 'wp_head', 'qloud_footer_dynamic_style' );
}

function qloud_footer_dynamic_style(){

    $page_id = get_queried_object_id();
    $qloud_option= get_option('qloud_options');
    $dynamic_css = array();

    if(get_field('acf_key_footer_switchdf', $page_id) != 'default') {
        if(get_field('acf_key_footer_switchdf') == 'no') {
            $dynamic_css[] = array(
                'elements'    => 'footer',
                'property'    => 'display',
                'value'       => 'none !important'
            );
        }
    }

    if(get_field('field_WGC', $page_id) != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
        if(get_field('field_WGC') == 'no') {
            $dynamic_css[] = array(
                'elements'    => '.footer-topbar',
                'property'    => 'display',
                'value'       => 'none !important'
            );
        }
    }

    if(get_field('field_WGCmid', $page_id) != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
        if(get_field('field_WGCmid') == 'no') {
            $dynamic_css[] = array(
                'elements'    => '.footer-top',
                'property'    => 'display',
                'value'       => 'none !important'
            );
        }
    }

    if(get_field('field_WGCbott', $page_id) != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
        if(get_field('field_WGCbott') == 'no') {
            $dynamic_css[] = array(
                'elements'    => '.copyright-footer',
                'property'    => 'display',
                'value'       => 'none !important'
            );
        }
    }



    
    if(count($dynamic_css) > 0){
        echo "<style type='text/css' id='umetric-dynamic-css".rand(10,100000)."'>\n\n";
            qloud_dynamic_style($dynamic_css);
        echo '</style>';
    }

}
