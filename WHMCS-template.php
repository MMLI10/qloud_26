<?php
/**
 * Template Name: WHMCS Template
 *
 
 */
get_header();
    while ( have_posts() ) : the_post();       
        the_content();
    endwhile;
    wp_reset_query();
get_footer();
