<?php 

if(function_exists('get_field') && class_exists('ReduxFramework'))
{
    add_action( 'wp_head', 'qloud_banner_dynamic_style' );
}
function qloud_banner_dynamic_style()
{

    $qloud_option= get_option('qloud_options');
    
    $dynamic_css = array();
      
    	if(get_field('field_QnF1') != 'default') {
        	if(get_field('field_QnF1') == 'no')
        	{
        		$dynamic_css[] = array(
                    'elements'  =>  '.iq-breadcrumb-one',
                    'property'  =>  'display',
                    'value'     =>  'none !important'
				);
				
                $dynamic_css[] = array(
                    'elements'  =>  '.content-area .site-main',
                    'property'  =>  'padding',
                    'value'     =>  '0 !important'
                );
        	}
    	} else if(isset($qloud_option['display_banner'])) {
	    	 
	    	if($qloud_option['display_banner'] == 'no')
	    	{
				$dynamic_css[] = array(
		        'elements'  =>  '.iq-breadcrumb-one',
		        'property'  =>  'display',
		        'value'     =>  'none !important'
		    	);

                $dynamic_css[] = array(
                'elements'  =>  '.content-area .site-main',
                'property'  =>  'padding',
                'value'     =>  '0 !important'
                );
	    	}
	    }

    	$key = get_field('key_pjros');
    	if($key['display_title'] != 'default'  && $key['display_title'] == 'no' && get_field('field_QnF1') != 'default' )
    	{
    		$dynamic_css[] = array(
            'elements'  =>  '.iq-breadcrumb-one .title',
            'property'  =>  'display',
            'value'     =>  'none !important'
        	);
    	}
    	else if(isset($qloud_option['display_title']))
    	{
    	 
	    	if($qloud_option['display_title'] == 'no')
	    	{
				$dynamic_css[] = array(
	            'elements'  =>  '.iq-breadcrumb-one .title',
	            'property'  =>  'display',
	            'value'     =>  'none !important'
	        	);
	    	}
    	}
     
    	$key = get_field('key_pjros');
    	if($key['display_breadcumb'] != 'default'  && $key['display_breadcumb'] == 'no' && get_field('field_QnF1') != 'default' )
    	{
    		$dynamic_css[] = array(
            'elements'  =>  '.iq-breadcrumb-one .breadcrumb',
            'property'  =>  'display',
            'value'     =>  'none !important'
        	);
    	}
    	else if(isset($qloud_option['display_breadcumb']))
    	{
    	 
	    	if($qloud_option['display_breadcumb'] == 'no')
	    	{
				$dynamic_css[] = array(
            	'elements'  =>  '.iq-breadcrumb-one .breadcrumb',
            	'property'  =>  'display',
            	'value'     =>  'none !important'
        		);
	    	}
    	}

    $key = get_field('banner_back_option');

    if(isset($key['banner_background_type']) && $key['banner_background_type'] != 'default' && get_field('field_QnF1') != 'default')
    {
        if($key['banner_background_type'] == 'color')
        {
            $dynamic_css[] = array(
            'elements'  =>  '.iq-breadcrumb-one',
            'property'  =>  'background',
            'value'     =>  $key['banner_background_color']. ' !important'
            );
        }

        if($key['banner_background_type'] == 'image')
        {
            $dynamic_css[] = array(
            'elements'  =>  '.iq-breadcrumb-one',
            'property'  =>  'background',
            'value'     =>  'url('.$key['banner_background_image']['url'].') !important'
            );

            if(!empty($key['banner_background_size']))
            {
                $dynamic_css[] = array(
                'elements'  =>  '.iq-breadcrumb-one',
                'property'  =>  'background-size',
                'value'     =>  $key['banner_background_size']. ' !important'
                ); 
            }

            if(!empty($key['banner_background_repeat']))
            {
                $dynamic_css[] = array(
                'elements'  =>  '.iq-breadcrumb-one',
                'property'  =>  'background-repeat',
                'value'     =>  $key['banner_background_repeat']. ' !important'
                ); 
            }
        }
    }
    else if(isset($qloud_option['bg_type']))
    {    
		$opt = $qloud_option['bg_type'];
		if($opt == '1')
		{
			if(isset($qloud_option['bg_color']) && !empty($qloud_option['bg_color']))
			{
				$dynamic_css[] = array(
        		'elements'  =>  '.iq-breadcrumb-one',
	        	'property'  =>  'background',
	        	'value'     =>  $qloud_option['bg_color']. ' !important'
				);
			}
			
		}
		if($opt == '2')
		{
			if(isset($qloud_option['banner_image']['url']) && !empty($qloud_option['banner_image']['url']))
			{
				$dynamic_css[] = array(
	        	'elements'  =>  '.iq-breadcrumb-one',
	        	'property'  =>  'background',
	        	'value'     =>  'url('.$qloud_option['banner_image']['url'].') !important'
				);
			}
			
		}

		
    }
  
    if ( count( $dynamic_css ) > 0 ) 
    {
        echo "<style type='text/css' id='qloud-dynamic-css".rand(10,100000)."'>\n\n"; 
            qloud_dynamic_style( $dynamic_css );
        echo '</style>';
    }
}
