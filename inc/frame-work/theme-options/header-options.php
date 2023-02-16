<?php
/*
 * Header Options
*/
$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header', 'qloud') ,
    'id' => 'header-editor',
    'icon' => 'eicon-arrow-up',
    'customizer_width' => '500px',
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Layout', 'qloud') ,
    'id' => 'header-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for header.', 'qloud') ,
    'fields' => array(

        array(
            'id'      => 'qloud_header_variation_style',
            'type'    => 'image_select',
            'title'   => esc_html__( 'Menu Style', 'qloud' ),
            'subtitle' => esc_html__( 'Select the design variation that you want to use for site menu.', 'qloud' ),
            'options' => array(
                '1'      => array(
                    'alt' => 'Style1',
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/header-1.png',
                ),
                '2'      => array(
                    'alt' => 'Style2',
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/header-2.png',
                ),
            ),
            'default' => '1'
        ),


        array(
            'id' => 'info_' . strtotime('now').rand(100, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Layout Options', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_header_variation',
            'type' => 'image_select',

            'options' => array(
                'header_default' => array(
                    'title' => esc_html__('Default', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/classic.png',
                ),
                'header_center' => array(
                    'title' => esc_html__('Logo center', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/stack-center.png',
                ) ,
                'header_split' => array(
                    'title' => esc_html__('Split menu logo center', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/split.png',
                ) ,

            ) ,
            'default' => 'header_default',
        ) ,

        array(
            'id' => 'header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Header Background Type', 'qloud') ,
            
            'options' => array(
                '0' => esc_html__('none', 'qloud') ,
                '1' => esc_html__('Image', 'qloud') ,
                '2' => esc_html__('Color', 'qloud'),
                '3' => esc_html__('Transparent', 'qloud')
            ) ,
            'default' => esc_html__('0', 'qloud')
        ) ,
        

        array(
            'id' => 'qloud_header_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Header background image', 'qloud') ,
            'read-only' => false,            
            
            'required' => array(
                'header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'qloud_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Header Color', 'qloud') ,            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'header_back_opt_switch',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,
    )
));

//Top Header Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Top Header', 'qloud') ,
    'id' => 'header-variation-top',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Top header.', 'qloud') ,
    'fields' => array(
        array(
            'id' => 'info_' .rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Top Header Setting', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general',
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id' => 'qloud_top_header_switch',
            'title' => esc_html__('Enable Top Header', 'qloud') ,
            'type' => 'switch',
            'default' => true,
        ) ,

        array(
            'id' => 'qloud_top_header_var',
            'type' => 'image_select',

            'options' => array(
                '1' => array(
                    'title' => esc_html__('Default', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-1.jpg',
                ) ,
                '2' => array(
                    'title' => esc_html__('Style 1', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-2.jpg',
                ) ,
                '3' => array(
                    'title' => esc_html__('Style 2', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-3.jpg',
                ) ,

                '4' => array(
                    'title' => esc_html__('Style 3', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-4.jpg',
                ) ,
                '5' => array(
                    'title' => esc_html__('Style 4', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-5.jpg',
                ) ,
                '6' => array(
                    'title' => esc_html__('Style 5', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/header/top-6.jpg',
                ) ,

            ) ,
            'required' => array(
                'qloud_top_header_switch',
                '=',
                true
            ) ,
            'default' => esc_html__('1', 'qloud')
        ) ,

        array(
            'id' => 'sticky_top_header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Top Header Background Type', 'qloud') ,
            
            'options' => array(
                '0' => esc_html__('none','qloud'),
                '1' => esc_html__('Image', 'qloud') ,
                '2' => esc_html__('color', 'qloud'),
                '3' => esc_html__('Transparent', 'qloud')
                
            ) ,
            'default' => esc_html__('0', 'qloud'),
            'required' => array(
                'qloud_top_header_switch',
                '=',
                true
            ) ,
        ) ,
        array(
            'id' => 'top_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Background Color', 'qloud') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'sticky_top_header_back_opt_switch',
                '=',
                '2'
            ) ,
        ) ,

        array(
            'id' => 'top_header_back_img',
            'type' => 'media',
            'title' => esc_html__('Image', 'qloud') ,
            
            'default' => '#ffffff',
            'url'=>true,
            'required' => array(
                'sticky_top_header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'top_header_text_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Color', 'qloud') ,            
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'qloud_top_header_switch',
                '=',
                true
            ) ,
        ) ,

        array(
            'id' => 'top_header_text_hover_color',
            'type' => 'color',
            'title' => esc_html__('Top Header Text Hover Color', 'qloud') ,           
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'qloud_top_header_switch',
                '=',
                true
            ) ,
        ) ,
    )
));

//Sticky Header Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Sticky Header', 'qloud') ,
    'id' => 'header-variation-sticky',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Sticky header.', 'qloud') ,
    'fields' => array(
        
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Sticky Header Settings', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

      /*   array(
            'id' => 'qloud_sticky_header_switch',
            'title' => esc_html__('Enable Sticky Header', 'qloud') ,
            'type' => 'switch',
            'default' => true,
        ) , */

        array(
            'id' => 'qloud_sticky_header_switch',
            'type'     => 'button_set',
            'title' => esc_html__('Enable Sticky Header', 'qloud') ,
            'options'  => array(
                'on' => 'on',
                'off' => 'off'
            ),
            'default'  => 'on'
        ),
        

        
        array(
            'id' => 'sticky_header_back_opt_switch',
            'type' => 'button_set',
            'title' => esc_html__('Sticky Header Background Type', 'qloud') ,
            
            'options' => array(
                '0' => esc_html__('none', 'qloud') ,
                '1' => esc_html__('Image', 'qloud') ,
                '2' => esc_html__('color', 'qloud'),
                '3' => esc_html__('Transparent', 'qloud')
            ) ,
            'default' => esc_html__('0', 'qloud'),
            'required' => array(
                'qloud_sticky_header_switch',
                '=',
                'on'
            ) ,
        ) ,
        

        array(
            'id' => 'qloud_sticky_header_back_img',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Sticky Header Background Image', 'qloud') ,
            'read-only' => false,            
            
            'required' => array(
                'sticky_header_back_opt_switch',
                '=',
                '1'
            ) ,
        ) ,

        array(
            'id' => 'qloud_sticky_header_back_color',
            'type' => 'color',
            'title' => esc_html__('Sticky Header Background Color', 'qloud') ,            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'sticky_header_back_opt_switch',
                '=',
                '2'
            ) ,
            'transparent' => true
        ) ,
    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Menu Color', 'qloud') ,
    'id' => 'default-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for Top Menu.', 'qloud') ,
    'fields' => array(

        //top menu start
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Top Header Menu Color Settings', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Menu Text Color', 'qloud') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'qloud_menu_hover_color',
            'type' => 'color',
            'title' => esc_html__('Set Menu Hover Text Color', 'qloud') ,  
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'qloud_submenu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sub Menu Text Color', 'qloud') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        array(
            'id' => 'qloud_sub_menu_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Sub Menu Background Color', 'qloud') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

        
        //Sticky menu start
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Sticky Menu Setting', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_sticky_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Menu Color Settings', 'qloud') , 
            'mode' => 'background',
            
            'transparent' => false
        ) ,

        array(
            'id' => 'qloud_menu_sticky_hover_color',
            'type' => 'color',
            'title' => esc_html__('Set Hover Sticky Menu Color', 'qloud') , 
            'mode' => 'background',            
            'transparent' => false
        ) ,

         array(
            'id' => 'qloud_sticky_sub_menu_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Sub Menu Color', 'qloud') , 
            'mode' => 'background',
            
            'transparent' => false
        ) ,

        array(
            'id' => 'qloud_sub_sticky_menu_back_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Sub Menu BackGround Color', 'qloud') ,
            'mode' => 'background',            
            'transparent' => false
        ) ,

        
    )
));   

Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Button', 'qloud') ,
    'id' => 'hader-button-variation',
    
    'subsection' => true,
    'desc' => esc_html__('This section contains options for button in header.', 'qloud') ,
    'fields' => array(

      array(
            'id'        => 'header_display_button',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Login Button','qloud'),
            'subtitle' => esc_html__( 'Turn on to display the Login and CTA button in top header.','qloud'),
            'options'   => array(
                            'yes' => esc_html__('On','qloud'),
                            'no' => esc_html__('Off','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),
       array(
            'id'       => 'select_button_style',
            'type'     => 'select',
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'title'    => esc_html__('Select Login Button Shape', 'qloud'), 
            'options'  => array(
                'iq-btn-flat'  =>  'Flat', 
                'iq-btn-outline' =>  'Outline',                  
                'iq-btn-link' => 'Link Button',                 
                'default' => 'Default',
            ),
            'default'  => 'default',
        ),

        array(
            'id'        => 'qloud_download_title',
            'type'      => 'text',
            'title'     => esc_html__( 'Button Title','qloud'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'default'   => 'Get Started',
            'desc'   => esc_html__('Change Title (e.g.Login).','qloud'),
        ),
        array(
            'id'        => 'qloud_download_link',
            'type'      => 'text',
            'title'     => esc_html__( 'Button Link','qloud'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'desc'   => esc_html__('Add download link.','qloud'),
        ),

        array(
            'id'       => 'he_button_color',
            'type'     => 'button_set',
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'title'    => esc_html__( 'Login Button Colors', 'qloud' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'header_button_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header  Button Background Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Background Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Hover Button Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Text Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_hover_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Text Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),
        array(
            'id'            => 'header_button_border_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Border Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_hover_border_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Border Color', 'qloud' ),
            'required'  => array( 'he_button_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

         array(
            'id'        => 'header_display_signup_button',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Sign up Button','qloud'),
            'subtitle' => esc_html__( 'Turn on to display the Login and CTA button in top header.','qloud'),
            'options'   => array(
                            'yes' => esc_html__('On','qloud'),
                            'no' => esc_html__('Off','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),
         array(
            'id'       => 'select_button_style1',
            'type'     => 'select',
            'required'  => array( 'header_display_signup_button', '=', 'yes' ),
            'title'    => esc_html__('Select Sign up Button Shape', 'qloud'), 
            'options'  => array(
                'iq-btn-flat'  =>  'Flat', 
                'iq-btn-outline' =>  'Outline',                  
                'iq-btn-link' => 'Link Button',                 
                'default' => 'Default',
            ),
            'default'  => 'default',
        ),

        array(
            'id'        => 'qloud_signup_title',
            'type'      => 'text',
            'title'     => esc_html__( 'Button Title','qloud'),
            'required'  => array( 'header_display_signup_button', '=', 'yes' ),
            'default'   => 'Get Started',
            'desc'   => esc_html__('Change Title (e.g.Signup).','qloud'),
        ),
        array(
            'id'        => 'qloud_signup_link',
            'type'      => 'text',
            'title'     => esc_html__( 'Button Link','qloud'),
            'required'  => array( 'header_display_signup_button', '=', 'yes' ),
            'desc'   => esc_html__('Add Signup link.','qloud'),
        ),

        array(
            'id'       => 'he_button_signup_color',
            'type'     => 'button_set',
            'required'  => array( 'header_display_signup_button', '=', 'yes' ),
            'title'    => esc_html__( 'Sign up Button Colors', 'qloud' ),
            'options'  => array(
                '1' => 'Default',
                '2' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'header_button_signup_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Background Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_signup_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Background Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Hover Button Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_signup_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Text Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_signup_hover_text_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Text Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Text Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),
        array(
            'id'            => 'header_button_signup_border_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Border Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Border Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'header_button_signup_hover_border_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Header Button Hover Border Color', 'qloud' ),
            'required'  => array( 'he_button_signup_color', '=', '2' ),
            'subtitle'      => esc_html__( 'Choose Header Button Border Hover Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        
    )
));
