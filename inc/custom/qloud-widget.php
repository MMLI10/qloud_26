<?php	
// Add custom side bar start from here
function qloud_right_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__('Footer Area 1','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_1_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__('Footer Area 2','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_2_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__('Footer Area 3','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_3_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title ">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__('Footer Area 4','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_4_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title ">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__('Footer Area 5','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_5_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title ">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__('Footer Top Area','qloud'),
		'class'         => 'nav-list',
		'id'            => 'footer_top_area',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title ">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'qloud_right_widgets_init' );
