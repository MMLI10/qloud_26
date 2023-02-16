<?php
/**
* Displays footer widgets if assigned
*
* @package WordPress
* @subpackage qloud
* @since 1.0
* @version 1.0
*/
?>
<?php
if( class_exists( 'ReduxFramework' ) )
{
    $qloud_option = get_option('qloud_options');
    if(!empty($qloud_option['qloud_footer_display']))
    {
        $options = $qloud_option['qloud_footer_display'];
        if($options == "yes"){ ?>
    <?php
    if ( is_active_sidebar( 'footer_1_sidebar' ) ||
    is_active_sidebar( 'footer_2_sidebar' )  ||
    is_active_sidebar( 'footer_3_sidebar' )  ||
    is_active_sidebar( 'footer_4_sidebar' )  ||
    is_active_sidebar( 'footer_5_sidebar' )  ) :
    ?>
    <!-- Address -->
    <div class="footer-top">
         <div class="container">
             <div class="row"> <?php


                $qloud_options = get_option('qloud_options');
                $options= $qloud_options['qloud_footer_width'];

                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
                    if(get_field('acf_footer_options') == '1') {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-12 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php  }
                    }
                } elseif($options == 1) {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-12 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php  }
                }

                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
                    if(get_field('acf_footer_options') == '2') {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-6 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php }
                    }
                } elseif($options == 2) {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_two']); ?>">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                }


                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
                    if(get_field('acf_footer_options') == '3') {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-md-5 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                    }
                } elseif($options == 3) {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-md-5 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                }


                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
                    if(get_field('acf_footer_options') == '4') {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                                <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                            </div>
                        <?php }
                    }
                } elseif($options == 4) {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                }


                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {
                    if(get_field('acf_footer_options') == '5') {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                         if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                                <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_5_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_five']); ?>">
                                <?php dynamic_sidebar( 'footer_5_sidebar' ); ?>
                            </div>
                        <?php }
                    }
                } elseif($options == 5) {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                     if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_5_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_five']); ?>">
                            <?php dynamic_sidebar( 'footer_5_sidebar' ); ?>
                        </div>
                    <?php }
                }

                if(function_exists('get_field') && get_field('acf_footer_options') != 'default' && get_field('acf_key_footer_switchdf', $page_id) != 'default') {} 
                else {    

                    if($options == 6)
                    {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                                <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                            </div>
                        <?php }
                    }

                    if($options == 7)
                    {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_5_sidebar' ) ) { ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                                <?php dynamic_sidebar( 'footer_5_sidebar' ); ?>
                            </div>
                        <?php }
                    }

                    if($options == 8)
                    {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-5 col-md-6 col-sm-6 <?php echo esc_html($qloud_options['footer_one']); ?>">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0 <?php echo esc_html($qloud_options['footer_two']); ?>">
                                <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                            <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_three']); ?>">
                                <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                            </div>
                        <?php }
                        if( is_active_sidebar( 'footer_5_sidebar' ) ) { ?>
                            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4 <?php echo esc_html($qloud_options['footer_fore']); ?>">
                                <?php dynamic_sidebar( 'footer_5_sidebar' ); ?>
                            </div>
                        <?php }
                    }

                    if($options == 9)
                    {
                        if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                            <div class="row justify-content-center footer-subscribe">
                                <div class="col-lg-8 footer-box">
                                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                                </div>
                            </div>
                        <?php   }
                        if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                            <div class="col-lg-12">
                                <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                            </div>
                        <?php   }
                    }
                }    

                if(empty($options))
                {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                }
            ?>
             </div>
         </div>
    </div>
    <?php endif; ?>
    <?php
        }
    }
}
else
{
if ( is_active_sidebar( 'footer_1_sidebar' ) ||
is_active_sidebar( 'footer_2_sidebar' )  ||
is_active_sidebar( 'footer_3_sidebar' )  ||
is_active_sidebar( 'footer_4_sidebar' )  ||
is_active_sidebar( 'footer_5_sidebar' )  ) :
?>
<!-- Address -->
<div class="footer-top">
    <div class="container">
    <div class="row">

                <?php
                if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                    </div>
                <?php   }
                if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                    </div>
                <?php }
                if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                    </div>
                <?php }
                if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                    </div>
                <?php } ?>                
    </div>
</div>
</div>
<?php endif;
}
