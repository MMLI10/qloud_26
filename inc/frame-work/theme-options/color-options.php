<?php
/*
 * Color Options
 */
global $opt_name;

Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Color Attribute','qloud' ),
    'id'    => 'color-section',
    'icon'  => 'eicon-paint-brush',
    'desc'  => esc_html__('This section change the site default color.','qloud'),
    'fields'=> array(
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Color Scheme Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'qloud_color',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Color Scheme Settings', 'qloud' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'primary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Primary Singal Color', 'qloud' ),
            'required'  => array( 'qloud_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose primary color for main theme color and main background color.', 'qloud' ),
            'default'       =>'#0d1e67',
            'mode'          => 'background',
            'transparent'   => false
        ),

        /* array(
            'id'            => 'primary_color_rgba',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Primary Gradient Color', 'qloud' ),
            'required'  => array( 'qloud_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose primary gradient color for main theme color and main background color.', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ), */

        array(
            'id'            => 'secondary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Secondary Color', 'qloud' ),
            'required'  => array( 'qloud_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose secondary color for dark title and background.', 'qloud' ),
            'default'       =>'#007bfc',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'title_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Title Color', 'qloud' ),
            'required'  => array( 'qloud_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose title color for main theme color.', 'qloud' ),
            'default'       =>'#142149',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'tertiary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Tertiary Color', 'qloud' ),
            'required'  => array( 'qloud_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose tertiary color for description color and border colors', 'qloud' ),
            'default'       =>'#5e7290',
            'mode'          => 'background',
            'transparent'   => false
        ),
       
    )
));
