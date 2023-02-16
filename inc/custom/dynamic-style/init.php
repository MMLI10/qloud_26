<?php
require_once get_template_directory() . '/inc/custom/dynamic-style/banner-options.php';
require_once get_template_directory() . '/inc/custom/dynamic-style/header-logo-option.php';
require_once get_template_directory() . '/inc/custom/dynamic-style/footer-options.php';

// Functions
function qloud_check_variable($var) {
	if(isset($var) && !empty($var)) {
		return $var;
	} else {
		return false;
	}
}
function qloud_check_variable_echo($var) {
	if(isset($var) && !empty($var)) {
		echo esc_html($var);
	} else {
		return '';
	}
}
