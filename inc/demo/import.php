<?php
function qloud_import_files() { 
    return array(
        array(
            'import_file_name'             => esc_html__('Demo','qloud'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/master-demo/qloud_xml.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/master-demo/qloud_wie.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/master-demo/qloud_dat.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/master-demo/qloud_json.json',
                    'option_name' => 'qloud_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/master-demo/preview_import_image.jpg',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'qloud' ),
            'preview_url'                  => 'https://wordpress.iqonic.design/qloud/',
        ),
       
    );
}
add_filter( 'pt-ocdi/import_files', 'qloud_import_files' );

function qloud_after_import_setup($selected_import) {
    

    // Assign menus to their locations.
    $locations = get_theme_mod( 'nav_menu_locations' ); // registered menu locations in theme
    $menus = wp_get_nav_menus(); // registered menus
    
    if($menus) {				
        foreach($menus as $menu) { // assign menus to theme locations
            
            if( $menu->name == 'Main Menu' || $menu->name == 'main menu' ) {
                $locations['top'] = $menu->term_id;
            }
            
            if( $menu->name == 'Footer Menu' || $menu->name == 'footer menu' || $menu->name == 'Menu' ) {
                $locations['social'] = $menu->term_id;
            }

            if( $menu->name == 'About Us' || $menu->name == 'about us' ) {
                $locations['social'] = $menu->term_id;
            }

            if( $menu->name == 'Useful links' || $menu->name == 'useful links' ) {
                $locations['social'] = $menu->term_id;
            }

        }
    }
    
    set_theme_mod( 'nav_menu_locations', $locations ); // set menus to locations 
           
        if ( 'Demo' === $selected_import['import_file_name'] ) {
                $front_page_id = get_page_by_title( 'Home 1' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $front_page_id->ID );
            update_option( 'page_for_posts', $blog_page_id->ID );

        }
            
        //Import Revolution Slider
        if ( class_exists( 'RevSlider' ) ) {
            $slider_array = array(
                get_template_directory()."/inc/demo/slider/qloud1.zip",
                get_template_directory()."/inc/demo/slider/qloud21.zip",
                get_template_directory()."/inc/demo/slider/qloud3.zip",
                get_template_directory()."/inc/demo/slider/qloud4.zip",
                get_template_directory()."/inc/demo/slider/qloud5.zip",
                get_template_directory()."/inc/demo/slider/Home-6.zip",
                get_template_directory()."/inc/demo/slider/Home-7.zip",
                get_template_directory()."/inc/demo/slider/slider-1.zip",
                get_template_directory()."/inc/demo/slider/qloud-host-2.zip",
                get_template_directory()."/inc/demo/slider/qloud2-1.zip",
                get_template_directory()."/inc/demo/slider/voice-service.zip",
                get_template_directory()."/inc/demo/slider/qloud1-1.zip",
                get_template_directory()."/inc/demo/slider/qloud3-1.zip",
            );
            $slider = new RevSlider();
            foreach($slider_array as $filepath){
                $slider->importSliderFromPost(true,true,$filepath);  
            }
        }

        // remove default post
        wp_delete_post(1);

}
add_action( 'pt-ocdi/after_import', 'qloud_after_import_setup' );
