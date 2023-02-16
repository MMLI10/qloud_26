<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage qloud
 * @since 1.0
 * @version 1.0
 */
$qloud_option = get_option('qloud_options'); 
$topfooter = '';
?>
</div><!-- #content -->
<!-- Footer start-->
<?php
if(isset($qloud_option['footer_type']) && $qloud_option['footer_type'] == "1" && $qloud_option['footer_option'] == '2')
{ 
	$f_color = 'iq-over-dark-90';
}
elseif(isset($qloud_option['footer_type']) && $qloud_option['footer_type'] == "2" && $qloud_option['footer_option'] == '2')
{ 
	if(isset($qloud_option['footer_image']['url'])){
		$bgurl = $qloud_option['footer_image']['url'];
	}
}

?>
<?php
if(isset($qloud_option['footer_opacity']) && $qloud_option['footer_opacity'] == "2" && $qloud_option['footer_option'] == '2')
{ 
	$op_color = 'iq-over-dark-90';
}

if(isset($qloud_option['qloud_footer_top_display']))
{
	if(!empty($qloud_option['qloud_footer_top_display'])) 
	{
		$topfooter = $qloud_option['qloud_footer_top_display'];
	}
}

?>
<footer id="contact" class=" <?php if(!empty($f_color)) { echo esc_attr($f_color); } ?> <?php if(!empty($op_color)) { echo esc_attr($op_color); } ?> <?php if(!empty($footer_class)) { echo esc_attr($footer_class); } ?>" <?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
<?php 
if($topfooter == "yes")
{

	if( is_active_sidebar( 'footer_top_area' ) ) { 
						
?>

<div class="footer-topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 ">
						<?php dynamic_sidebar( 'footer_top_area' ); ?>
					</div>
				</div>
			</div>
			
</div>

<?php } } 

		get_template_part( 'template-parts/footer/footer', 'widgets' );

		get_template_part( 'template-parts/footer/site', 'info' );
		
	?>
	
</footer>
  <!-- Footer stop-->

    </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php

if(isset($qloud_option['qloud_back_to_top']))
{
	$options = $qloud_option['qloud_back_to_top'];
	if($options == "yes")
	{
	?>
	<!-- === back-to-top === -->
	<div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
	</div>
	<!-- === back-to-top End === -->
	<?php 
	}
}
else 
{
?>
	<!-- === back-to-top === -->
	<div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
	</div>
	<!-- === back-to-top End === -->
<?php
}
?>

<?php wp_footer(); ?>
</body>
</html>
