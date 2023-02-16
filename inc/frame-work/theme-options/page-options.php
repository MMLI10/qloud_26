<?php
/*
 * Header Options
*/


$opt_name;
Redux::setSection($opt_name, array(
    'title' => esc_html__('Page', 'qloud') ,
    'id' => 'editer-page',
    'icon' => 'eicon-product-pages',
    'customizer_width' => '1000px',
));

// Blog Page Settings
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Blog Page Settings','qloud'),
    'id'    => 'blog-section',
    
    
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for Pages.','qloud'),
    'fields'=> array(
        array(
            'id' => 'info_general'.rand(10,1000),
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),

            'title' => __('Blog Page Options', 'qloud') ,
        ) ,

        array(
            'id' => 'section-general'.rand(10,1000),
            'type' => 'section',
            'indent' => true
        ) ,

      /*   array(
            'id'       => 'qloud_blog_banner_image',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Blog Page Default Banner Image','qloud'),
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','qloud'),
        ), */

        array(
            'id'       => 'blog_btn',
            'type'     => 'text',
            'title'    => esc_html__( 'Blog Button Name', 'qloud' ),
            'subtitle' => esc_html__( 'Change Blog Button Name in blog page and singal blog page', 'qloud' ),
            'default'  => esc_html__('Read More','qloud' ),
        ),

        array(
            'id'        => 'qloud_blog',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog page Setting','qloud' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar, 1column, 2column and 3column) for your blog section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','qloud' ), array( 'br' => array() ) ),            
            'options'   => array(
                                
                                '1' => array( 'title' => esc_html__( 'One Columns','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/one-column.png' ), 
                                '2' => array( 'title' => esc_html__( 'Two Columns','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/two-column.png' ), 
                                '3' => array( 'title' => esc_html__( 'Three Columns','qloud' ), 'img' => get_template_directory_uri() . '/assets/images/backend/three-column.png' ),                                
                            ),
            'default'   => '1',
        ),

        array(
            'id'        => 'qloud_display_pagination',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Previous/Next Pagination','qloud'),
            'subtitle' => esc_html__( 'Turn on to display the previous/next post pagination for blog page.','qloud'),
            'options'   => array(
                            'yes' => esc_html__('On','qloud'),
                            'no' => esc_html__('Off','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

        array(
            'id'        => 'qloud_display_image',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Featured Image on Blog Archive Page','qloud'),
            'subtitle' => esc_html__( 'Turn on to display featured images on the blog or archive pages.','qloud'),
            'options'   => array(
                            'yes' => esc_html__('On','qloud'),
                            'no' => esc_html__('Off','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

       

        array(
            'id'        => 'qloud_display_comment',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Comments','qloud'),
            'subtitle' => esc_html__( 'Turn on to display comments.','qloud'),
            'options'   => array(
                            'yes' => esc_html__('On','qloud'),
                            'no' => esc_html__('Off','qloud')
                        ),
            'default'   => esc_html__('yes','qloud')
        ),

       /*  array(
            'id'       => 'comment_btn',
            'type'     => 'text',
            'title'    => esc_html__( 'Comment Button Name', 'qloud' ),
            'subtitle' => esc_html__( 'Change Comment Button Name in singal blog page', 'qloud' ),
            'default'  => esc_html__('Read More','qloud' ),
        ), */

    )
    ));
Redux::setSection( $opt_name, array(
        'title' => esc_html__('404','qloud'),
        'id'    => 'fourzerofour-section',
        
        'subsection' => true,
        'desc'  => esc_html__('This section contains options for 404.','qloud'),
        'fields'=> array(
            array(
                'id' => 'info_general'.rand(10,1000),
                'type' => 'info',
                'style' => 'custom',
                'color' => sanitize_hex_color($color),
    
                'title' => __('404 Page Options', 'qloud') ,
            ) ,
    
            array(
                'id' => 'section-general'.rand(10,1000),
                'type' => 'section',
                'indent' => true
            ) ,
    
            array(
                'id'       => 'qloud_404_banner_image',         
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( '404 Page Default Banner Image','qloud'),
                'read-only'=> false,
                'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','qloud'),
            ),
    
            array(
                'id'        => 'qloud_fourzerofour_title',
                'type'      => 'text',
                'title'     => esc_html__( '404 Page Title','qloud'),
                'default'   => esc_html__( '404 Error','qloud' )
            ),
            array(
                'id'        => 'qloud_four_description',
                'type'      => 'textarea',
                'title'     => esc_html__( '404 Page Description','qloud'),
                'default'   => esc_html__( 'Oops! This Page is Not Found.','qloud' )
            ),
        )) 
    );   
