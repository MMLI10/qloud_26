<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php $qloud_option = get_option('qloud_options'); ?>
	<div class="iq-blog-box">
		<div class="iq-blog-image clearfix"> <?php 

			if(isset($qloud_option['qloud_display_image'])) {
			    $iq_image = $qloud_option['qloud_display_image'];
			    if($iq_image == "yes"){
					the_post_thumbnail();
				}
			}		

			if(has_post_thumbnail())
				{
				?>
				<?php  $postcat = get_the_category();
                               if ($postcat) { ?>
                               <ul class="iq-blogtag">
                         			<?php  foreach($postcat as $cat) { ?>
                                    <li><a href="<?php echo esc_url(get_category_link( $cat->cat_ID ));?>"><?php echo esc_html($cat->name); ?></a></li>
                                       <?php  } ?>
                                </ul>
                        <?php  } 
                  }?>
		
				</div>
					<div class="iq-blog-detail">
						<div class="iq-blog-meta">
							<ul class="iq-postdate">
								<?php 
								//post date
								$archive_year  = get_the_time('Y',$wp_query->ID);
								$archive_month = get_the_time('m',$wp_query->ID); 
								$archive_day   = get_the_time('d',$wp_query->ID);
								$date=date_create($wp_query->post_date); ?>
								<li class="list-inline-item">	
									<i class="fa fa-calendar mr-2"></i>
										<?php echo sprintf("%s",qloud_time_link()); ?>	
								</li>
							</ul>
							
						</div>
						<?php
						if(!is_single()){ 
						?>
						<div class="blog-title">
							<a href="<?php echo sprintf("%s",esc_url(get_permalink($wp_query->ID)));?>">
							<h5 class="mb-3"><?php echo sprintf("%s",esc_html(get_the_title( $wp_query->ID ))); ?></h5>
							</a>
						</div>
					<?php } ?>
				<div class="blog-content">
				<?php 
					if(is_single()){
						the_content();
					}else{
						the_excerpt();
					}

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'qloud' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
					?>
			</div>

			<?php if(!is_single()){ ?>
						
						
						<div class="blog-button">
						<?php               
						
                                        if(!empty($qloud_option['blog_btn']))
                                        {  													
                                        ?><a class="iq-btn-link" href="<?php echo sprintf("%s",esc_url(get_permalink($wp_query->ID)));?>"><?php echo sprintf("%s",esc_attr($qloud_option['blog_btn']) );?><i class="ion-ios-arrow-right ml-2"             ></i></a><?php
                                        }
                                        else
                                        { ?><a class="iq-btn-link" href="<?php echo sprintf("%s",esc_url(get_permalink($wp_query->ID)));?>"><?php echo sprintf("%s",esc_attr('Read More', 'qloud'));?><i class="ml-2 ion-ios-arrow-right"             ></i></a>
                                    <?php
                                        }
                                        ?>
                           </div>
                           <?php 	} 

						?>
					</div>
			</div>
	<?php 
	$qloud_option = get_option('qloud_options');
	if(isset($qloud_option['qloud_display_comment']))
	{
		$options = $qloud_option['qloud_display_comment'];
		if($options == "yes")
		{
			if(is_single()){
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				qloud_pagination();
			}
		}
	}
	else {
		if(is_single()){
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			qloud_pagination();
		}
		
	}
	?>
</article><!-- #post-## -->
