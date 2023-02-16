<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'MailChimp Subscribe', 'qloud' ),
    'id'         => 'qloud-subscribe',
    'icon'       => 'el el-envelope',
    'fields'     => array(

        array(
            'id'        => 'qloud_subscribe',
            'type'      => 'text',
            'title'     => esc_html__( 'Subscribe Shortcode','qloud'),
            'subtitle'  => wp_kses( __( '<br />Put you Mailchimp for WP Shortcode here','qloud' ), array( 'br' => array() ) ),
        ),
     
    )) 
);
