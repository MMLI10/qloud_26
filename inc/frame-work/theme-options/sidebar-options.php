<?php
/*
 * Header Options
*/


$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Sidebars', 'qloud') ,
    'id' => 'editer-sidebar',
    'icon' => 'eicon-sidebar',
    'customizer_width' => '500px',
));

// sidebar Page Settings
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Blog Sidebars','qloud'),
    'id'    => 'sidebar-section',
        
    'subsection' => true,
    'desc'  => wp_kses( __( 'Choose structures (No Sidebar , Right Sidebar, Left Sidebar) for your sidebar section.
            <br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','qloud' ), array( 'br' => array() ) ),            
    'fields'=> array(

        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Blog Page Sidebar Options', 'qloud') ,
            
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,       

        array(
            'id'        => 'qloud_blog_sidebar',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog Page','qloud' ),
            'subtitle'     => esc_html__( 'Choose Sidebar Option For Blog Page','qloud' ),
            
            'options'   => array(
                                '0' => array( 'title' => esc_html__( 'No Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Left Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Right Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                                
                                
                            ),
            'default'   => '0',
        ),

              

        // Single Blog Options
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Single Page Sider Options', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

        array(
            'id'        => 'qloud_blog_type',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog Singal Page Sidebar Setting','qloud' ),
            
            'options'   => array(


                '3' => array( 'title' => esc_html__( 'No Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Left Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Right Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                
                                
                            ),
            'default'   => '1',
        ),     
     

    )
    ));

// Archive Page
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Archive','qloud'),
    'id'    => 'sidebar-archive',
        
    'subsection' => true,
    'desc'  => wp_kses( __( 'Choose structures (No Sidebar , Right Sidebar, Left Sidebar) for your sidebar section.
            <br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','qloud' ), array( 'br' => array() ) ),            
    'fields'=> array(
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Archive Page Sidebar Options', 'qloud') ,           
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,       

        array(
            'id'        => 'qloud_single_blog_sidebar',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Archive Page','qloud' ),
            'subtitle'     => esc_html__( 'Choose Sidebar Option For Archive  Blog Page','qloud' ),
            
            'options'   => array(
                                '0' => array( 'title' => esc_html__( 'No Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/nosidebar.png' ), 
                                '1' => array( 'title' => esc_html__( 'Left Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/right-sidebar.png' ), 
                                '2' => array( 'title' => esc_html__( 'Right Sidebar','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/theme-option/style/left-sidebar.png' ), 
                                
                                
                            ),
            'default'   => '0',
        ),
    )
));
