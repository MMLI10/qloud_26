<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage qloud
 * @since 1.0
 * @version 1.0
 */
get_header();

$qloud_options = get_option('qloud_options');

$options = '';
if(isset($qloud_options['qloud_single_blog_sidebar'])) {
    $options = $qloud_options['qloud_single_blog_sidebar'];
} ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row"> <?php
 
                if($options == '0') { ?>
				    <div class="col-md-12 col-sm-12"> <?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post/content', get_post_format() );
							endwhile;
							qloud_pagination();
						else :
							get_template_part( 'template-parts/post/content', 'none' );
						endif; ?>
					</div> <?php

				} elseif($options == '1'){ ?> <?php 

					if ( is_active_sidebar('sidebar-1') ) { ?>		
						<div class="col-md-4 col-sm-12">
							<?php get_sidebar(); ?>
						</div> <?php 
					}
				
				    if ( ! is_active_sidebar('sidebar-1') ) { ?>
						<div class="col-md-12 col-sm-12"> <?php 
					} else { ?>
						<div class="col-md-8 col-sm-12"> <?php 
					} ?> <?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post/content', get_post_format() );
							endwhile;
							qloud_pagination();
						else :
							get_template_part( 'template-parts/post/content', 'none' );
						endif; ?>
					</div> <?php 

				} elseif($options == '2'){ ?> <?php 
				
				    if ( ! is_active_sidebar('sidebar-1') ) { ?>
						<div class="col-md-12 col-sm-12"> <?php 
					} else { ?>
						<div class="col-md-8 col-sm-12"> <?php 
					} ?> <?php
						if ( have_posts() ) : ?>
							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post/content', get_post_format() );
							endwhile;
							qloud_pagination();
						else :
							get_template_part( 'template-parts/post/content', 'none' );
						endif; ?>
					</div> <?php 
					if ( is_active_sidebar('sidebar-1') ) { ?>		
						<div class="col-md-4 col-sm-12">
							<?php get_sidebar(); ?>
						</div> <?php 
					}
					
				} ?>
			</div>			
		</div><!-- container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
