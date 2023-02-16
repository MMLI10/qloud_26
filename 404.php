<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage qloud
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$qloud_option = get_option('qloud_options');

if(isset($qloud_option['qloud_404_banner_image']['url'])){
	$bgurl = $qloud_option['qloud_404_banner_image']['url'];
}
?>
<div <?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="error-404 not-found">
					<div class="page-content">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php  
									if(!empty($qloud_option['qloud_404_banner_image']['url'])) { ?>
									<div class="fourzero-image mb-5">
										<img src="<?php echo esc_url($qloud_option['qloud_404_banner_image']['url']); ?>" alt="<?php  esc_attr_e( '404', 'qloud' ); ?>"/>
									</div>	

								<?php } else { ?>
							
									<div class="big-text"><?php esc_html_e( '404', 'qloud' ); ?></div>

								<?php } ?>
								<h4>
									<?php 
										if(isset($qloud_option['qloud_four_description']) && !empty($qloud_option['qloud_four_description']))
										{
											$four_title = $qloud_option['qloud_fourzerofour_title']; 
											echo esc_html($four_title); 
										}
										else 
										{
											echo esc_html_e('404 Error', 'qloud');
										}
										
									?>
								</h4>
								<p class="mb-5">
									
									<?php 
										if(isset($qloud_option['qloud_four_description']) && !empty($qloud_option['qloud_four_description']))
										{
											$four_des = $qloud_option['qloud_four_description']; 
											echo esc_html($four_des); 
										}
										else 
										{
											echo esc_html_e('Oops! This Page is Not Found.', 'qloud');
										}
									?>
								</p>

								<div class="d-block">
									<a class="iq-button" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Back to Home', 'qloud'); ?></a>
								</div>
							</div>
						</div>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
</div>

<?php get_footer();
