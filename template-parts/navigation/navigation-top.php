<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage qloud
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'qloud' ); ?>">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
		<?php
		echo qloud_get_svg( array( 'icon' => 'bars' ) );
		echo qloud_get_svg( array( 'icon' => 'close' ) );
		esc_attr_e( 'Menu', 'qloud' );
		?>
	</button>

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

	<?php if ( ( qloud_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header() ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo qloud_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php esc_html_e( 'Scroll down to content', 'qloud' ); ?></span></a>
	<?php endif; ?>
</nav><!-- #site-navigation -->
