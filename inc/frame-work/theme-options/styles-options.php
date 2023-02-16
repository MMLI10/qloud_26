<?php
/*
 * Styles Options
 */
global $opt_name;

Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Typography','qloud' ),
    'id'    => 'default-style-section',
    'icon'  => 'eicon-typography',
    'desc'  => esc_html__('This section contains typography related options.','qloud'),
    'fields'=> array(

        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Typography Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

    	array(
                'id'        => 'qloud_change_font',
                'type'      => 'switch',
                'title'     => esc_html__( 'Do you want to change fonts?','qloud' ),
                'default'   => esc_html__( '0','qloud' ),
                'on'    	=> esc_html__( 'Yes','qloud' ),
                'off'   	=> esc_html__( 'No','qloud' )
        ),

    	array(
                'id'        => 'body_font',
                'type'      => 'typography',
                'title'     => esc_html__( 'Body Font','qloud' ),
                'subtitle'  => esc_html__( 'Select the font.','qloud' ),
                'desc'      => esc_html__( 'Poppins is default font.','qloud' ),
                'required'  => array( 'qloud_change_font', '=', '1' ),
                'google'    => true,
                'font-style'    => true,
                'font-weight'   => true,
                'font-size'     => true,
                'line-height'   => false,
                'color'         => false,
                'text-align'    => false,            
                'default'       => array(
                    'font-family' => esc_html__( 'Poppins','qloud' ),
                    'google'      => true
                )
        ),

        array(
                'id'        => 'primary_menu',
                'type'      => 'typography',
                'title'     => esc_html__( 'Primary Menu','qloud' ),
                'subtitle'  => esc_html__( 'Select the font.','qloud' ),
                'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
                'required'  => array( 'qloud_change_font', '=', '1' ),
                'google'    => true,
                'font-style'    => true,
                'font-weight'   => true,
                'font-size'     => true,
                'line-height'   => false,
                'color'         => false,
                'text-align'    => false,            
                'default'       => array(
                    'font-family' => esc_html__( 'PT+Sans','qloud' ),
                    'google'      => true
                )
        ),
        array(
            'id'        => 'sub_menu',
            'type'      => 'typography',
            'title'     => esc_html__( 'Submenu Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),

        array(
            'id'        => 'h1_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h2_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h3_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h4_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h5_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'h6_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'page_title_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'Page Title Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
        array(
            'id'        => 'page_desc_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'Page Description Font','qloud' ),
            'subtitle'  => esc_html__( 'Select the font.','qloud' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','qloud' ),
            'required'  => array( 'qloud_change_font', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','qloud' ),
                'google'      => true
            )
        ),
    )
));
