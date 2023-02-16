<?php
   function qloud_display_header(){
   $qloud_option = get_option('qloud_options');
   if(!is_front_page()) {


   	if ( ( ( is_page() && ! qloud_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) {

   		$options = $qloud_option['bg_opacity'];

   		if($options == "1") {
            $bg_class = esc_html__('iq-bg-over black','qloud'); 
         } elseif($options == "2"){ 
            $bg_class = esc_html__('iq-bg-over iq-over-dark-80','qloud');
         } elseif($options == "3"){
            $bg_class = esc_html__('breadcrumb-bg breadcrumb-ui','qloud');
         } else{
            $bg_class = esc_html__('iq-bg-over iq-over-dark-80','qloud');
         } ?>

         <div class="text-left iq-breadcrumb-one 
            <?php if(!empty($bg_class)) { echo esc_attr($bg_class); } ?>"> <?php

      } else {

   		if(isset($qloud_option['bg_type']) && !empty($qloud_option['bg_type'] == "1")) {
            $bg_color = esc_html__('iq-bg-over black','qloud');
   		} elseif(isset($qloud_option['bg_type']) && !empty($qloud_option['bg_type'] == "2")) {

   			if(isset($qloud_option['banner_image']['url'])) {
   				$bgurl = $qloud_option['banner_image']['url'];
   			}

   			$options= $qloud_option['bg_opacity'];

   			if($options == "1") {
               $bg_class = esc_html__('iq-bg-over black','qloud'); 
            } elseif($options == "2") { 
               $bg_class = esc_html__('iq-bg-over iq-over-dark-80','qloud'); 
            } elseif($options == "3") { 
               $bg_class = esc_html__('breadcrumb-bg breadcrumb-ui','qloud'); 
            } else { 
               $bg_class = esc_html__('iq-bg-over iq-over-dark-80','qloud'); 
            }

   		} elseif(isset($qloud_option['bg_type']) && !empty($qloud_option['bg_type'] == "3")) {

   			$options= $qloud_option['bg_opacity'];

   			if($options == "1"){ 
               $bg_class = esc_html__('video-iq-bg-over','qloud'); 
            } elseif($options == "2") { 
               $bg_class = esc_html__('video-breadcrumb-bg breadcrumb-video','qloud'); 
            } elseif($options == "3") { 
               $bg_class = esc_html__('video-breadcrumb-bg breadcrumb-video','qloud'); 
            } else { 
               $bg_class = esc_html__('iq-bg-over iq-over-dark-80','qloud'); 
            }

   		} else {
   			$bg_class = esc_html__('iq-bg-over','qloud');
         } ?>

         <div class="text-left iq-breadcrumb-one 
            <?php if(!empty($qloud_option['bg_type'] == "1")) { echo esc_attr($bg_color); } ?>
            <?php if(!empty($bg_class)) { echo esc_attr($bg_class); } ?>"
            <?php if(!empty($bgurl)){ ?> style="background: url(
            <?php echo esc_url($bgurl); ?> );" 
            <?php } ?>> <?php
      } ?> <?php

      if(isset($qloud_option['bg_type']) && $qloud_option['bg_type'] == "3") {

      	if(isset($qloud_option['bg_video_link'])){
      		$videourl = $qloud_option['bg_video_link'];
         } ?>

            <video class="masthead-video" autoplay loop muted>
            <source src="
               <?php echo esc_url($videourl); ?>" type="video/mp4">
            <source src="
               <?php echo esc_url($videourl); ?>" type="video/webm">
         </video> <?php
      } ?>

      <div class="container"> <?php

         $options = '';
         if(isset($qloud_option['bg_image'])) {
            $options = $qloud_option['bg_image'];
         }
         
         if($options == '1') { ?>

            <div class="row align-items-center">
               <div class="col-sm-12">
                  <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two"> <?php
                     if(is_archive()){ ?>
                        <h2 class="title">
                           <?php the_archive_title();  ?>
                        </h2> <?php
                     } elseif(is_search()){
                        if ( have_posts() ) : ?>
                           <h2 class="title">
                              <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                                 <span>' . get_search_query() . '</span>' ); ?>
                           </h2> <?php 
                        else : ?>
                           <h2 class="title">
                              <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
                           </h2> <?php 
                        endif;
                     } elseif(is_404()){
                     
                        if(isset($qloud_option['qloud_fourzerofour_title'])){ ?>
                           <h2 class="title">
                              <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
                           </h2> <?php
                        } else { ?>
                           <h2 class="title">
                              <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
                           </h2> <?php 
                        }

                     } elseif(is_home()){ ?>
                        <h2 class="title">
                           <?php esc_html_e( 'Blog', 'qloud' ); ?>
                        </h2> <?php 
                     } else { ?>
                        <h2 class="title">
                           <?php single_post_title(); ?>
                        </h2> <?php 
                     } ?> <?php

                     if(isset($qloud_option['display_breadcrumbs'])) {
                        $options = $qloud_option['display_breadcrumbs'];
                        if($options == "yes") { ?>
                           <ol class="breadcrumb main-bg">
                              <?php echo qloud_custom_breadcrumbs(); ?>
                           </ol> <?php
                        }
                     } ?>
                  </nav>
               </div>
            </div> <?php 

         }  elseif($options == '2'){ ?>

            <div class="row align-items-center">
               <div class="col-lg-12 col-md-12 text-left align-self-center">
                  <nav aria-label="breadcrumb" class="text-left"> <?php
                        if(is_archive()){ ?>
                           <h2 class="title">
                              <?php the_archive_title();  ?>
                           </h2> <?php
                        } elseif(is_search()) {
                           if ( have_posts() ) : ?>
                              <h2 class="title">
                                 <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                                    <span>' . get_search_query() . '</span>' ); ?>
                              </h2> <?php 
                           else : ?>
                              <h2 class="title">
                                 <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
                              </h2> <?php 
                           endif;
                        } elseif(is_404()){
                           if(isset($qloud_option['qloud_fourzerofour_title'])){ ?>
                              <h2 class="title">
                                 <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
                              </h2> <?php
                           } else { ?>
                              <h2 class="title">
                                 <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
                              </h2> <?php 
                           }
                        } elseif(is_home()) { ?>
                           <h2 class="title">
                              <?php esc_html_e( 'Blog', 'qloud' ); ?>
                           </h2> <?php 
                        }
                        else { ?>
                     <h2 class="title">
                        <?php single_post_title(); ?>
                     </h2>
                     <?php } ?>
                     <?php
                        if(isset($qloud_option['display_breadcrumbs']))
                        {
                        $options = $qloud_option['display_breadcrumbs'];
                           if($options == "yes")
                           {
                        ?>
                     <ol class="breadcrumb main-bg">
                        <?php echo qloud_custom_breadcrumbs(); ?>
                     </ol>
                     <?php
                        }
                        }
                        ?>
                  </nav>
               </div>
      </div>
      <?php }  elseif($options == '3')
         {
         ?>
      <div class="row align-items-center">
         <div class="col-lg-12 col-md-12 text-left align-self-center">
            <nav aria-label="breadcrumb" class="text-right iq-breadcrumb-two">
               <?php
                  if(is_archive()){
                  ?>
               <h2 class="title">
                  <?php the_archive_title();  ?>
               </h2>
               <?php
                  }
                  elseif(is_search()){
                  if ( have_posts() ) : ?>
               <h2 class="title">
                  <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                     <span>' . get_search_query() . '</span>' ); ?>
               </h2>
               <?php else : ?>
               <h2 class="title">
                  <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
               </h2>
               <?php endif;
                  } elseif(is_404()){
                  
                  if(isset($qloud_option['qloud_fourzerofour_title'])){
                  ?>
               <h2 class="title">
                  <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
               </h2>
               <?php
                  } else{
                  ?>
               <h2 class="title">
                  <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
               </h2>
               <?php }
                  } elseif(is_home()){ ?>
               <h2 class="title">
                  <?php esc_html_e( 'Blog', 'qloud' ); ?>
               </h2>
               <?php }
                  else { ?>
               <h2 class="title">
                  <?php single_post_title(); ?>
               </h2>
               <?php } ?>
               <?php
                  if(isset($qloud_option['display_breadcrumbs']))
                  {
                  $options = $qloud_option['display_breadcrumbs'];
                  	if($options == "yes")
                  	{
                  ?>
               <ol class="breadcrumb main-bg">
                  <?php echo qloud_custom_breadcrumbs(); ?>
               </ol>
               <?php
                  }
                  }
                  ?>
            </nav>
         </div>
      </div>
      <?php }  elseif($options == '4')
         {
         ?>
      <div class="row align-items-center iq-breadcrumb-three">
         <div class="col-sm-6 mb-3 mb-lg-0 mb-md-0">
            <?php
               if(is_archive()){
               ?>
            <h2 class="title ext-lg-right text-md-right text-sm-left">
               <?php the_archive_title();  ?>
            </h2>
            <?php
               }
               elseif(is_search()){
               if ( have_posts() ) : ?>
            <h2 class="title">
               <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                  <span>' . get_search_query() . '</span>' ); ?>
            </h2>
            <?php else : ?>
            <h2 class="title">
               <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
            </h2>
            <?php endif;
               } elseif(is_404()){
               
               if(isset($qloud_option['qloud_fourzerofour_title'])){
               ?>
            <h2 class="title">
               <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
            </h2>
            <?php
               } else{
               ?>
            <h2 class="title">
               <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
            </h2>
            <?php }
               } elseif(is_home()){ ?>
            <h2 class="title">
               <?php esc_html_e( 'Blog', 'qloud' ); ?>
            </h2>
            <?php }
               else { ?>
            <h2 class="title">
               <?php single_post_title(); ?>
            </h2>
            <?php } ?>
         </div>
         <div class="col-sm-6 ext-lg-right text-md-right text-sm-left">
            <nav aria-label="breadcrumb" class="iq-breadcrumb-two">
               <?php
                  if(isset($qloud_option['display_breadcrumbs']))
                  {
                  $options = $qloud_option['display_breadcrumbs'];
                  	if($options == "yes")
                  	{
                  ?>
               <ol class="breadcrumb main-bg">
                  <?php echo qloud_custom_breadcrumbs(); ?>
               </ol>
               <?php
                  }
                  }
                  ?>
            </nav>
         </div>
      </div>
      <?php }  elseif($options == '5')
         {
         ?>
         <div class="row align-items-center iq-breadcrumb-three">
            <div class="col-sm-6 mb-3 mb-lg-0 mb-md-0">
               <nav aria-label="breadcrumb" class="text-left iq-breadcrumb-two">
                  <ol class="breadcrumb main-bg">
                     <?php echo qloud_custom_breadcrumbs(); ?>
                  </ol>
               </nav>
            </div>
            <div class="col-sm-6"> <?php
               if(is_archive()){ ?>
                  <h2 class="title text-lg-right text-md-right text-sm-left">
                     <?php the_archive_title();  ?>
                  </h2> <?php
               } elseif(is_search()){
               if ( have_posts() ) : ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                  <span>' . get_search_query() . '</span>' ); ?>
            </h2>
            <?php else : ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
            </h2>
            <?php endif;
               } elseif(is_404()){
               
               if(isset($qloud_option['qloud_fourzerofour_title'])){
               ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
            </h2>
            <?php
               } else{
               ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
            </h2>
            <?php }
               } elseif(is_home()){ ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php esc_html_e( 'Blog', 'qloud' ); ?>
            </h2>
            <?php }
               else { ?>
            <h2 class="title text-lg-right text-md-right text-sm-left">
               <?php single_post_title(); ?>
            </h2>
            <?php } ?>
         </div>
      </div>
      <?php } else
         {
         ?>
      <div class="row align-items-center">
         <div class="col-sm-12">
            <nav aria-label="breadcrumb" class="text-left iq-breadcrumb-two">
               <?php
                  if(is_archive()){
                  ?>
               <h2 class="title">
                  <?php the_archive_title();  ?>
               </h2>
               <?php
                  }
                  elseif(is_search()){
                  if ( have_posts() ) : ?>
               <h2 class="title">
                  <?php printf( esc_html__( 'Search Results for: %s', 'qloud' ), '
                     <span>' . get_search_query() . '</span>' ); ?>
               </h2>
               <?php else : ?>
               <h2 class="title">
                  <?php esc_html_e( 'Nothing Found', 'qloud' ); ?>
               </h2>
               <?php endif;
                  } elseif(is_404()){
                  
                  if(isset($qloud_option['qloud_fourzerofour_title'])){
                  ?>
               <h2 class="title">
                  <?php $four_title =  $qloud_option['qloud_fourzerofour_title']; echo esc_html($four_title);  ?>
               </h2>
               <?php
                  } else{
                  ?>
               <h2 class="title">
                  <?php esc_html_e( 'Oops! That page can not be found.', 'qloud' ); ?>
               </h2>
               <?php }
                  } elseif(is_home()){ ?>
               <h2 class="title">
                  <?php esc_html_e( 'Blog', 'qloud' ); ?>
               </h2>
               <?php }
                  else { ?>
               <h2 class="title">
                  <?php single_post_title(); ?>
               </h2>
               <?php } ?>
               <ol class="breadcrumb main-bg">
                  <?php echo qloud_custom_breadcrumbs(); ?>
               </ol>
            </nav>
         </div>
      </div>
      <?php } ?>
   </div>
</div>
<?php
}
}
