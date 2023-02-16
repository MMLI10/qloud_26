<?php
/*
 * Footer Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Footer', 'qloud' ),
    'id'    => 'footer-editor',
    'icon'  => 'el el-arrow-down',
    'customizer_width' => '500px',
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Option','qloud'),
    'id'    => 'footer-logo',
    'subsection' => true,
    
    'desc'  => esc_html__('This section contains options for footer.','qloud'),
    'fields'=> array(

        

       /*  array(
            'id'       => 'logo_footer',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Logo','qloud'),            
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload Footer Logo for your Website.','qloud'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/logo.png' ),
        ), */

        array(
            'id'       => 'footer_option',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Footer Option', 'qloud' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),


        array(
            'id'       => 'footer_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Footer Set Option', 'qloud' ),
            'required'  => array( 'footer_option', '=', '2' ),
            'subtitle' => esc_html__( 'Select this option for Background Type color and image.', 'qloud' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image',
            ),
            'default'  => '1'
        ),
        
        array(
            'id'       => 'footer_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Background Image','qloud'),
            'required'  => array( 'footer_type', '=', '2' ),
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload Footer image for your Website. Otherwise site title will be displayed in place of Logo.','qloud'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/footer-img.jpg' ),
        ), 

       /*  array(
            'id'       => 'footer_opacity',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Opacity Color', 'qloud' ),
            'required' => array( 
                array('footer_type','!=','1') 
            ),
            'subtitle' => esc_html__( 'Select this option for Background Opacity Color.', 'qloud' ),
            'options'  => array(
                '1' => 'None',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ), */

      /*   array(
            'id'            => 'footer_opacity_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Background Gradient Color', 'qloud' ),
            'required'  => array( 'footer_opacity', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose body Gradient background color', 'qloud' ),           
            'transparent'   => false
        ), */

        array(
            'id'            => 'footer_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Background Color', 'qloud' ),
            'subtitle'      => esc_html__( 'Choose Footer Background Color', 'qloud' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_heading_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Heading Color', 'qloud' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Text Color', 'qloud' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'footer_link_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Link Color', 'qloud' ),
            'required'  => array( 'footer_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

    )
));  

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Layout','qloud'),
    'id'    => 'footer-section',
    'subsection' => true,    
    'desc'  => esc_html__('This section contains options for footer.','qloud'),
    'fields'=> array(

        array(
            'id'        => 'qloud_footer_display',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer','qloud'),
            'subtitle' => esc_html__( 'Display Footer On All Pages', 'qloud' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

        
        array(
            'id'        => 'qloud_footer_width',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Footer Layout Type','qloud' ),
            'required'  => array( 'qloud_footer_display', '=', 'yes' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (1column, 2column and 3column) for your footer section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','qloud' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'One Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_first.png' ),
                                '2' => array( 'title' => esc_html__( 'Two Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_second.png' ),
                                '3' => array( 'title' => esc_html__( 'Three Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_third.png' ),
                                '4' => array( 'title' => esc_html__( 'Four Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),
                                '5' => array( 'title' => esc_html__( 'Five Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),  
                                '6' => array( 'title' => esc_html__( '4+3+3+2 Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),   
                                '7' => array( 'title' => esc_html__( '12/4+2+2+4 Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),
                                '8' => array( 'title' => esc_html__( '12/4+2+2+4 Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),    
				'9' => array( 'title' => esc_html__( '12/12 Column','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),                                   
                            ),
            'default'   => '4',
        ),

        array(
            'id'       => 'footer_one',
            'type'     => 'select',
            'title'    => esc_html__('Select 1 Footer Alignment', 'qloud'), 
            'required'  => array( 'qloud_footer_display', '=', 'yes' ),
            'options'  => array(
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_two',
            'type'     => 'select',
            'title'    => esc_html__('Select 2 Footer Alignment', 'qloud'), 
            'required'  => array( 'qloud_footer_display', '=', 'yes' ),
            'options'  => array(
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_three',
            'type'     => 'select',
            'title'    => esc_html__('Select 3 Footer Alignment', 'qloud'), 
            'required'  => array( 'qloud_footer_display', '=', 'yes' ),
            'options'  => array(
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_fore',
            'type'     => 'select',
            'title'    => esc_html__('Select 4 Footer Alignment', 'qloud'),
            'required'  => array( 'qloud_footer_display', '=', 'yes' ), 
            'options'  => array(
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_five',
            'type'     => 'select',
            'title'    => esc_html__('Select 5 Footer Alignment', 'qloud'),
            'required'  => array( 'qloud_footer_display', '=', 'yes' ), 
            'options'  => array(
                'text-left' => 'Left',
                'text-right' => 'Right',
                'text-center' => 'Center',
            ),
            'default'  => '1',
        ),

    )
));

Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Footer Copyright', 'qloud' ),
    'id'         => 'footer-copyright',
    'subsection' => true,
    
    'fields'     => array(

        array(
            'id'        => 'display_copyright',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer Copyright','qloud'),
            'subtitle' => esc_html__( 'Display Footer Copyright On All page', 'qloud' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

        array(
            'id'        => 'footer_copyright',
            'type'      => 'textarea',
            'required'  => array( 'display_copyright', '=', 'yes' ),
            'title'     => esc_html__( 'Copyright Text','qloud'),
            'default'   => esc_html__( 'Copyright 2019 qloud All Rights Reserved.','qloud'),
        ),

        array(
            'id'       => 'footer_copy_color',
            'type'     => 'button_set',
            'required'  => array( 'display_copyright', '=', 'yes' ),
            'title'    => esc_html__( 'Change Footer Copyright Color', 'qloud' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'footer_copyright_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Link Color', 'qloud' ),
            'required'  => array( 'footer_copy_color', '=', '2' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

    )) 
);

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Top Footer Option','qloud'),
    'id'    => 'qloud-footer-top-section',
    'subsection' => true,    
    'desc'  => esc_html__('This section contains options for footer.','qloud'),
    'fields'=> array(
        array(
            'id'        => 'qloud_footer_top_display',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Top Footer','qloud'),
            'subtitle' => esc_html__( 'Display Top Footer On All Pages', 'qloud' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),
        array(
            'id' => 'qloud_footer_top_background',
            'type' => 'button_set',                        
            'desc' => __('Select Footer Background Style', 'qloud') ,            
            'options' => array(
                '1' => 'Image',
                '2' => 'Color',
                '3' => 'Default'
            ) ,
            'default' => '3',

            'required' => array(
                'qloud_footer_top_display',
                '=',
                'yes'
            ) ,
        ) ,

        array(
            'id' => 'qloud_footer_top_image',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('upload image', 'qloud') ,
            'read-only' => true,
            'default' => array (
                'url' =>  get_template_directory_uri() . '/assets/images/theme-option/style/07.png',
            ),
            'required' => array(
                'qloud_footer_top_background',
                '=',
                '1'
            ) ,
            
        ) ,

        array(
            'id' => 'qloud_footer_top_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Color', 'qloud') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'qloud_footer_top_background',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,
    )
    ));
