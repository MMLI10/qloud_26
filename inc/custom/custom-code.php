<?php
global $qloud_options;
// TGM plugin activation
require_once get_template_directory() . '/inc/tgm/qloud-required-plugins.php';
// Breadcrumbs
require_once get_template_directory() . '/inc/custom/breadcrumbs.php';
// Demo import

require_once get_template_directory() . '/inc/demo/import.php';
// Header Breadcrumbs
require_once get_template_directory() . '/inc/custom/qloud-breadcrumbs.php';
// Comment
require_once get_template_directory() . '/inc/custom/qloud-comment.php';
// Pagination
require_once get_template_directory() . '/inc/custom/qloud-pagination.php';
// Widget
require_once get_template_directory() . '/inc/custom/qloud-widget.php';
// Dynamic Style
require_once get_template_directory() . '/inc/custom/qloud-dynamic-style.php';
require_once get_template_directory() . '/inc/custom/color-style.php';
require_once get_template_directory() . '/inc/custom/custom-color.php';

require_once get_template_directory() . '/inc/custom/dynamic-style/init.php';

function qloud_custom_fonts_url()
{
	$fonts_url = '';

	/* Translators: If there are characters in your language that are not

	* supported by Roboto, translate this to 'off'. Do not translate
	* into your own language.
	*/


	$roboto = _x('on', 'Roboto font: on or off', 'qloud');

	/* Translators: If there are characters in your language that are not
	* supported by Nunito, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$poppins = _x('on', 'Poppins font: on or off', 'qloud');

	if ('off' !== $roboto || 'off' !== $poppins) {
		$font_families = array();

		if ('off' !== $roboto) {
			$font_families[] = 'Roboto:400,400i,500,500i,700,700i,900,900';
		}

		if ('off' !== $poppins) {
			$font_families[] = 'Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
		}



		$query_args = array(
			'family' => urlencode(implode('|', $font_families)),
			'subset' => urlencode('latin,latin-ext'),
		);

		$fonts_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	}

	return esc_url_raw($fonts_url);
}

function qloud_load_js_css()
{
	$qloud_option = get_option('qloud_options');

	/* Custom JS */
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
	wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), '1.0', true);
	wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/appear.js', array(), '1.0', true);
	wp_enqueue_script('jquery-count', get_template_directory_uri() . '/assets/js/jquery.countTo.js', array('jquery'), '1.0', true);
	wp_enqueue_script('jquery-magnific', get_template_directory_uri() . '/assets/js/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0', true);
	wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.3.0', true);
	wp_enqueue_script('qloud-custom', get_template_directory_uri() . '/assets/js/qloud-custom.js', array(), '1.0', true);

	/* Custom CSS */
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
	wp_enqueue_style('ionicons', get_template_directory_uri() . '/assets/css/ionicons.min.css', array(), '2.0.0', 'all');
	wp_enqueue_style('typicon', get_template_directory_uri() . '/assets/css/typicon.min.css', array(), '2.0.0', 'all');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '3.5.2', 'all');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '3.5.2', 'all');
	wp_enqueue_style('wow', get_template_directory_uri() . '/assets/css/wow.css', array(), '3.7.0', 'all');
	wp_enqueue_style('qloud-style', get_template_directory_uri() . '/assets/css/qloud-style.css', array(), '1.0', 'all');
	wp_enqueue_style('qloud-responsive', get_template_directory_uri() . '/assets/css/qloud-responsive.css', array(), '1.0', 'all');

	if (class_exists('Mega_Menu')) :
		wp_enqueue_style('qloud-megamenu', get_template_directory_uri() . '/assets/css/megamenu.css', array(), '1.0', 'all');
	endif;
}
add_action('wp_enqueue_scripts', 'qloud_load_js_css');

function qloud_searchfilter($query)
{
	if (!is_admin()) {
		if ($query->is_search) {
			$query->set('post_type', 'post');
		}
		return $query;
	}
}
add_filter('pre_get_posts', 'qloud_searchfilter');


if (!function_exists('qloud_dynamic_style')) {

	function qloud_dynamic_style($qloud_css_array)
	{
		foreach ($qloud_css_array as $css_part) {
			if (!empty($css_part['value'])) {
				echo esc_attr($css_part['elements']) . "{\n";
				echo esc_attr($css_part['property']) . ":" . esc_attr($css_part['value']) . ";\n";
				echo "}\n\n";
			}
		}
	}
}

add_action('admin_head', 'qloud_custom_style');

function qloud_custom_style()
{
	echo '<style>
  .redux-container .ui-button{
    display: inline-flex !important;
} 
  </style>';
}

function qloud_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
