<?php
/*
 * Social Network Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Social Media', 'qloud' ),
    'id'               => 'social_link',
    'icon'             => 'eicon-social-icons',  
    'fields'           => array(
        array(
            'id' => 'info_' . rand(10, 1000) ,
            'type' => 'info',
            'style' => 'custom',
            'color' => sanitize_hex_color($color),
            'title' => __('Social Media Options', 'qloud') ,
        ) ,
        array(
            'id' => 'section-general'. rand(10, 1000) ,
            'type' => 'section',
            'indent' => true
        ) ,
        array(
            'id'        => 'qloud_display_social_media',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Social Media on Footer','qloud'),
            'options'   => array(
                            'yes' => esc_html__('Yes','qloud'),
                            'no' => esc_html__('No','qloud')
                        ),
            'default'   => esc_html__('no','qloud')
        ),
        array(
            'id'       => 'social-media-iq',
            'type'     => 'sortable',
            'title'    => esc_html__('Social Media Option', 'qloud'),
            'subtitle' => esc_html__('Enter social media url.', 'qloud'),
            'mode'     => 'text',
			'label'    => true,
            'options'  => array(
				'facebook'     => '',
				'twitter'        => '',
				'google-plus'  => '',
                'github'      	 => '',
				'instagram'      => '',
                'linkedin'       => '',
                'tumblr'         => '',
                'pinterest'      => '',
                'dribbble'       => '',
                'reddit'         => '',
                'flickr'         => '',
                'skype'          => '',
                'youtube-play'   => '',
                'vimeo'          => '',
                'soundcloud'     => '',
                'wechat'         => '',
                'renren'         => '',
                'weibo'          => '',
                'xing'           => '',
                'qq'             => '',
                'rss'            => '',
                'vk'             => '',
                'behance'        => '',
                'snapchat'       => '',
            ),
           
           
        ),
    ),
) );
