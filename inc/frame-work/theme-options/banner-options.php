<?php
/*
 * Header Options my theme name is xamin
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Banner Setting','qloud'),
    'id'    => 'breadcrumbs-fevicon',
    'icon'  => 'eicon-banner',
    'desc'  => esc_html__('This section contains options for Breadcrumbs.','qloud'),
    'fields'=> array(

       array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Banner Layout Options', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'      => 'bg_image',
            'type'    => 'image_select',
            'title'   => esc_html__( 'Select Image', 'qloud' ),
            'subtitle' => esc_html__( 'A preview of the selected image will appear underneath the select box.', 'qloud' ),
            'options' => array(
                '1'      => array(
                    'alt' => 'Style1',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-1.jpg',
                ),
                '2'      => array(
                    'alt' => 'Style2',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-2.jpg',
                ),
                '3'      => array(
                    'alt' => 'Style3',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-3.jpg',
                ),
                '4'      => array(
                    'alt' => 'Style4',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-4.jpg',
                ),
                '5'      => array(
                    'alt' => 'Style5',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-5.jpg',
                ),
            ),
            'default' => '2'
        ),

        array(
            'id'        => 'display_banner',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Banner','qloud'),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

        array(
            'id'        => 'display_breadcrumbs',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Breadcrumbs on Banner','qloud'),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'required'  => array( 'display_banner', '=', 'yes' ),
         
                'default'   => esc_html__('yes','qloud')
        ),

        array(
            'id'        => 'display_title',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Title on Banner','qloud'),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'required'  => array( 'display_banner', '=', 'yes' ),
         
            'default'   => esc_html__('yes','qloud')
        ),

        array(
            'id'            => 'breadcrumbs_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

         array(
            'id'            => 'breadcrumbs_hover_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Breadcrumb Active Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),
        
        array(
            'id'            => 'bg_title_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Title Color', 'qloud' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'       => 'bg_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Option', 'qloud' ),
            'subtitle' => esc_html__( 'Select this option for Background Type color or image.', 'qloud' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image'
            ),
            'default'  => '1'
        ),

        array(
            'id'       => 'banner_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Set Body Image','qloud'),
            'read-only'=> false,
            'required'  => array( 'bg_type', '=', '2' ),
            'subtitle' => esc_html__( 'Upload Image for your body.','qloud'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/bg.jpg' ),
        ), 

        array(
            'id'            => 'bg_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Background Color', 'qloud' ),
            'subtitle'      => esc_html__( 'Choose Background Color', 'qloud' ),
            'required'  => array( 'bg_type', '=', '1' ),
            'mode'          => 'background',
            'transparent'   => false
        ),

       /*  array(
            'id'       => 'bg_video_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Your Video Path', 'qloud' ),
            'required'  => array( 'bg_type', '=', '3' ),
            'subtitle' => esc_html__( 'Upload video in media and paste video link over here.', 'qloud' ),
            'default'  => esc_html__('http://localhost/qloud/wordpress/wp-content/uploads/2019/08/SampleVideo.mp4','qloud' ),
        ), */

        array(
            'id'       => 'bg_opacity',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Opacity Color', 'qloud' ),
            'required' => array( 
                array('bg_type','!=','1') 
            ),
            'subtitle' => esc_html__( 'Select this option for Background Opacity Color.', 'qloud' ),
            'options'  => array(
                '1' => 'None',
                '2' => 'Dark',
                '3' => 'Custom'
            ),
            'default'  => '1'
        ),

        array(
            'id'            => 'opacity_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Background Gradient Color', 'qloud' ),
            'required'  => array( 'bg_opacity', '=', '3' ),
            'subtitle'      => esc_html__( 'Choose body Gradient background color', 'qloud' ),
            
            'transparent'   => false
        ),

    )
)); 
