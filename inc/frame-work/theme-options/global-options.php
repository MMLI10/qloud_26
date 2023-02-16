<?php
/*
 * Global Options
*/
$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Global', 'qloud') ,
    'id' => 'editer-global',
    'icon' => 'el el-globe',
    'customizer_width' => '500px',
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Body Layout', 'qloud') ,
    'id' => 'site-global',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_general',
            'type' => 'info',
            'style' => 'custom',            
            'color' => sanitize_hex_color($color),
            'title' => __('Layout Options', 'qloud') ,
            'desc' => __('This Section Contain Option For Your Site Layout.','qloud'),
        ) ,

        array(
            'id' => 'section-general',
            'type' => 'section',            
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_site_layout_genaral',
            'type' => 'image_select',
            'desc' => __('<p>Choose From Above Suitable Option For Your Site.</p>','qloud'),
            'options' => array(
                '1' => array(
                    'title' => esc_html__('Boxed', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/style/boxed.png',
                ) ,
                '2' => array(
                    'title' => esc_html__('Full Width', 'qloud') ,
                    'img' => get_template_directory_uri() . '/assets/images/theme-option/style/full-width.png',
                ) ,

            ) ,
           

        ) ,
        array(
            'id' => 'info_general' . rand(0, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => esc_attr(sanitize_hex_color($color)),
            'desc' => __('This Section Contain Option For Your Grid Container Width.','qloud'),
            'title' => __('Grid Container Width', 'qloud') ,
        ) ,
        array(
            'id' => 'opt-slider-label',
            'type' => 'slider',
            'desc' => __('<p>Adjust Your Site Container Width Wtih Help Of Above Opiton.</p>','qloud'),            
            'min' => 960,
            'step' => 1,
            'max' => 1920,
            'display_value' => 'select',
            'default' => 1200
        ) ,       

        
        array(
            'id' => 'info_general_background',
            'type' => 'info',
            'style' => 'custom',
            'color' => esc_attr(sanitize_hex_color($color)),
            'desc' => __('<p>This Section Contain Optin For Your Page Body Background.</p>','qloud'),
            'title' => __('Body Background', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general-background',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_background_genaral',
            'type' => 'button_set',                        
            'desc' => __('Select Your Page Background Style', 'qloud') ,            
            'options' => array(
                '1' => 'Image',
                '2' => 'Color',
                '3' => 'none'
            ) ,
            'default' => '3'
        ) ,

        array(
            'id' => 'qloud_background_image',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('upload image', 'qloud') ,
            'read-only' => true,
            'default' => array (
                'url' =>  get_template_directory_uri() . '/assets/images/theme-option/style/07.png',
            ),
            'required' => array(
                'qloud_background_genaral',
                '=',
                '1'
            ) ,
            
        ) ,

        array(
            'id' => 'qloud_background_color',
            'type' => 'color',
            'title' => esc_html__('Set Background Color', 'qloud') ,
            
            'default' => '#ffffff',
            'mode' => 'background',
            'required' => array(
                'qloud_background_genaral',
                '=',
                '2'
            ) ,
            'transparent' => false
        ) ,

       

        

    )
));
//Favicon Option
Redux::setSection($opt_name, array(
    'title' => esc_html__('Favicon', 'qloud') ,
    'id' => 'site-favicon',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_general_favicon',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Favicon', 'qloud') ,
            'desc' => __('Upload .ico File For Favicon Icon', 'qloud')
        ) ,
        array(
            'id' => 'section-general-favicon',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_background_favicon',
            'type' => 'media',            
            'url' => true,
            'read-only' => false,
            

        ) ,
    )
));

//Loader Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Loader', 'qloud') ,
    'id' => 'site-loader-global',
    
    'subsection' => true,

    'fields' => array(
        array(
            'id' => 'info_general_favicon'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Loader Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general-favicon'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_loader_switch',
            'type' => 'button_set',
            'title' => __('', 'qloud') ,
            'subtitle' => __('', 'qloud') ,
            'desc' => __('', 'qloud') ,
            //Must provide key => value pairs for options
            'options' => array(
                '0' => esc_html__('none','qloud'),
                '1' => esc_html__('Image','qloud'),
                '2' => esc_html__('text', 'qloud'),
                
            ) ,
            'default' => esc_html__('0','qloud')
            
        ) ,


        array(
            'id' => 'qloud_background_loader',
            'type' => 'media',
            'title'    => __('Upload Loader Image', 'qloud'),               
            
            'desc' => 'upload gif image here',
            'url' => false,
            'read-only' => false,
            'required' => array(
                'qloud_loader_switch',
                '=',
                '1'
            ) ,
        ) ,   
          array(
            'id' => 'loader-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Sticky Header Logo (Width/Height) Option', 'qloud') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'qloud') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'qloud') ,
            'required' => array(
                'qloud_loader_switch',
                '=',
                '1'
            ) ,

        ) ,     
        array(
            'id'        => 'qloud_loader_text',
            'type'      => 'text',   
            'title'    => __('Enter Loader Text', 'qloud'),                      
            'default'   => esc_html__( 'Loading....','qloud' ),
            'desc' => esc_html__('Enter Text', 'qloud') ,
            'required' => array(
                'qloud_loader_switch',
                '=',
                '2'
            ) ,
        ),
        array(
            'id'       => 'qloud_loader_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'qloud'),             
            'desc'     => __('Select Tag For Loader Text.', 'qloud'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'qloud'),
                'h2' => esc_html__('h2', 'qloud'),
                'h3' => esc_html__('h3', 'qloud'),
                'h4' => esc_html__('h4', 'qloud'),
                'h5' => esc_html__('h5', 'qloud'),
                'h6' => esc_html__('h6', 'qloud'),
                
            ),
            'required' => array(
                'qloud_loader_switch',
                '=',
                '2'
            ) ,
            'default' => esc_html__('h2', 'qloud'),
        ),
        array(
            'id' => 'qloud_loader_back_color',
            'type' => 'color',   
            'title'    => __('Background Color', 'qloud'),                        
            'desc' => esc_html__('Choose Background Color For  Loader.', 'qloud') ,
            'default' => '#ffffff',
            'mode' => 'background',            
            'transparent' => false,
                
            
           
        ) ,

        array(
            'id' => 'qloud_loader_back_color_text',
            'type' => 'color', 
            'title'    => __('Choose Color Loader Text', 'qloud'),                                 
            'desc' => esc_html__('Choose Color For Loader Text .', 'qloud') ,
            'default' => '#ffffff',
            'mode' => 'background',            
            'transparent' => false,
            'required' => array(
                'qloud_loader_switch',
                '=',
                '2'
            ) ,

          
        ) ,
    )
));
// Back To Top Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Back To Top', 'qloud') ,
    'id' => 'site-back-to-top',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_'. rand(10,100),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Back To Top Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-sticky-header-logo',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'       => 'qloud_back_to_top',
            'type'     => 'button_set',          
            
            
            'options'  => array(
                'yes' => 'Yes',
                'no' => 'No'
            ),
            'default'  => 'yes'
        ),

       
    )
));


// Logo Options
Redux::setSection($opt_name, array(
    'title' => esc_html__('Logo', 'qloud') ,
    'id' => 'editer-logo',
    'icon' => 'eicon-logo',
    'customizer_width' => '500px',
));
Redux::setSection($opt_name, array(
    'title' => esc_html__('Header Logo', 'qloud') ,
    'id' => 'site-logo-global',
    
    'subsection' => true,
    'fields' => array(

        array(
            'id' => 'info_header_logo',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Header Logo Options', 'qloud') ,
        ) ,

        array(
            'id' => 'section-start',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_logo_type',
            'type' => 'button_set',
            'title' => __('Header Logo Type', 'qloud') ,            
            'desc' => __('', 'qloud') ,
            //Must provide key => value pairs for options
            'options' => array(
                '1' => esc_html__('Image','qloud'),
                '2' => esc_html__('text', 'qloud'),
                
            ) ,
            'default' => esc_html__('1','qloud')
            
        ) ,

        array(
            'id' => 'qloud_logo',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Image', 'qloud') ,
            'read-only' => false,
            'indent' => true,
            'required' => array(
                'qloud_logo_type',
                '=',
                '1'
            ) ,
            
        ) ,
        array(
            'id' => 'logo-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Header Logo (Width/Height) Option', 'qloud') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'qloud') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'qloud') ,
            'required' => array(
                'qloud_logo_type',
                '=',
                '1'
            ) ,

        ) ,

        array(
            'id' => 'qloud_header_logo_text',
            'type' => 'text',
            'title' => esc_html__('Header Logo Text', 'qloud') ,
            'required' => array(
                'qloud_logo_type',
                '=',
                '2'
            ) ,

        ) ,
         array(
            'id'       => 'qloud_header_logo_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'qloud'),             
            'desc'     => __('Select Tag For Text.', 'qloud'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'qloud'),
                'h2' => esc_html__('h2', 'qloud'),
                'h3' => esc_html__('h3', 'qloud'),
                'h4' => esc_html__('h4', 'qloud'),
                'h5' => esc_html__('h5', 'qloud'),
                'h6' => esc_html__('h6', 'qloud'),
                
            ),
            'required' => array(
                'qloud_logo_type',
                '=',
                '2'
            ) ,
            'default' => esc_html__('h2', 'qloud'),
        ),

       

        array(
            'id' => 'header_logo_color',
            'type' => 'color',
            'title' => esc_html__('Set Header Logo Color', 'qloud') ,
            'subtitle' => esc_html__('Choose Header Logo Color', 'qloud') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'qloud_logo_type',
                '=',
                '2'
            ) ,
        ) ,
      

        array(
            'id' => 'divider_' . rand(0, 999) ,
            'type' => 'divide'
        ) ,
       

        

    )
));

Redux::setSection($opt_name, array(
    'title' => esc_html__('Sticky Header Logo', 'qloud') ,
    'id' => 'site-sticky-logo-global',
    
    'subsection' => true,
    'fields' => array(
        array(
            'id' => 'info_sticky_header_logo',
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Sticky Header Logo Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-sticky-header-logo',
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id' => 'qloud_logo_sticky_type',
            'type' => 'button_set',
            'title' => __('Sticky Header Logo Type', 'qloud') ,
            
            //Must provide key => value pairs for options
            'options' => array(
                '1' => esc_html__('Image','qloud'),
                '2' => esc_html__('text', 'qloud'),
                
            ) ,
            'default' => esc_html__('1','qloud')
            
        ) ,

        array(
            'id' => 'qloud_header_logo_sticky',
            'type' => 'media',
            'url' => false,
            'title' => esc_html__('Image', 'qloud') ,
            'read-only' => false,
            'required' => array(
                'qloud_logo_sticky_type',
                '=',
                '1'
            ) ,
            'subtitle' => esc_html__('', 'qloud') ,
        ) ,
        array(
            'id' => 'sticky-logo-dimensions',
            'type' => 'dimensions',
            'units' => array(
                'em',
                'px',
                '%'
            ) , // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true', // Allow users to select any type of unit
            'title' => esc_html__('Sticky Header Logo (Width/Height) Option', 'qloud') ,
            'subtitle' => esc_html__('Allow your users to choose width, height, and/or unit.', 'qloud') ,
            'desc' => esc_html__('You can enable or disable any piece of this field. Width, Height, or Units.', 'qloud') ,
            'required' => array(
                'qloud_logo_sticky_type',
                '=',
                '1'
            ) ,

        ) ,

        array(
            'id' => 'qloud_header_logo_sticky_text',
            'type' => 'text',
            'title' => esc_html__('Sticky Header Logo Text', 'qloud') ,
            'required' => array(
                'qloud_logo_sticky_type',
                '=',
                '2'
            ) ,

        ) ,

         array(
            'id'       => 'qloud_header_logo_sticky_tag',
            'type'     => 'select',
            'title'    => __('Select Html Tag', 'qloud'),             
            'desc'     => __('Select Tag For Text.', 'qloud'),
            // Must provide key => value pairs for select options
            'options'  => array(
                'h1' => esc_html__('h1', 'qloud'),
                'h2' => esc_html__('h2', 'qloud'),
                'h3' => esc_html__('h3', 'qloud'),
                'h4' => esc_html__('h4', 'qloud'),
                'h5' => esc_html__('h5', 'qloud'),
                'h6' => esc_html__('h6', 'qloud'),
                
            ),
            'required' => array(
                'qloud_logo_sticky_type',
                '=',
                '2'
            ) ,
            'default' => esc_html__('2', 'qloud'),
        ),

       

        array(
            'id' => 'header_logo_sticky_color',
            'type' => 'color',
            'title' => esc_html__('Set Sticky Header Logo Color', 'qloud') ,
            'subtitle' => esc_html__('Choose Sticky Header Logo Color', 'qloud') ,
            'default' => '#ffffff',
            'mode' => 'background',
            'transparent' => false,
            'required' => array(
                'qloud_logo_sticky_type',
                '=',
                '2'
            ) ,
        ) ,
       
    )
));
