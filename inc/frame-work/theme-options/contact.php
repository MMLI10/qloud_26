<?php
// -> START Contact
    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Contact', 'qloud' ),
        'id'    => 'Contact', 
        'icon'  => 'eicon-map-pin',
        'desc'  => esc_html__( '', 'qloud' ),
		'fields'           => array(
            array(
                'id'       => 'address',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Address', 'qloud' ),
                'subtitle' => esc_html__( 'Subtitle', 'qloud' ),
                'desc'     => esc_html__( 'Field Description', 'qloud' ),
                'default'  => esc_html__('1234 North Avenue Luke Lane, South Bend, IN 360001','qloud' ),
            ),
			array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'qloud' ),
                'subtitle' => esc_html__( 'Subtitle', 'qloud' ),
                'desc'     => esc_html__( 'Field Description', 'qloud' ),
                'preg' => array(
                    'pattern' => '/[^0-9_ -+()]/s', 
                    'replacement' => ''
                ),
                'default'  => esc_html__('+0123456789','qloud' ),
            ),
			
			array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'qloud' ),
                'desc'     => esc_html__( 'Field Description', 'qloud' ),
                'validate' => 'email',
                'msg'      => esc_html__('custom error message','qloud' ),
                'default'  => esc_html__('support@iqnonicthemes.com','qloud' ),
            ),
						
        )
        
    ) );
