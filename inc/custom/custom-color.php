<?php
if(function_exists('get_field') && class_exists('ReduxFramework')) {
    add_action('wp_enqueue_scripts','qloud_primary_color', 20);
}

function qloud_primary_color() {

    $qloud_option = get_option('qloud_options');

    if(isset($qloud_option['qloud_color']) && $qloud_option['qloud_color'] == "2"){

        $color_var = '';

        $color_var .=':root{';

            if(!empty($qloud_option['primary_color'])) {
                $color = $qloud_option['primary_color'];
                $color_var .= '--primary-color: '.$color.' !important;';
            }

            if(!empty($qloud_option['primary_color'])) {
                $color = $qloud_option['secondary_color'];
                $color_var .= '--secondary-color: '.$color.' !important;';
            }

            if(!empty($qloud_option['title_color'])) {
                $color = $qloud_option['title_color'];                
                $color_var .= '--title-color: '.$color.' !important;';
            }

            if(!empty($qloud_option['tertiary_color'])) {
                $color = $qloud_option['tertiary_color'];
                $color_var .= '--tertiry-color: '.$color.' !important;';
            }

        $color_var .='}';

        $color = $qloud_option['title_color'];
        $color_var .= "
        .iq-tabs .nav-pills .nav-link .tab-title, .iq-testimonial .iq-testimonial-member .avtar-name .iq-lead, .iq-fancy-box.active .iq-fancy-title {
            color : $color !important;
        }";

        wp_add_inline_style('qloud-style', $color_var);

    }

}
