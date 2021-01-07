<?php
	$this->sections[] = array(
		'title'  => __( 'SEO', 'axis' ),
		'icon'   => 'el el-link',
		  'fields' => array(
		  
			//Site title
			array(
				'id'       => 'site_title',
				'type'     => 'text',
				'title'    => __( 'Site Title', 'axis' ),
				'default'  => get_bloginfo('title'),
			),
			
			//Description
			array(
				'id'       => 'site_description',
				'type'     => 'text',
				'title'    => __( 'Site Description', 'axis' ),
				'default'  => get_bloginfo('description'),
			),
			
			//Keywords
			array(
				'id'=>'site_keywords',
				'type' => 'textarea',
				'title' => __('Site keywords', 'axis'),
				'validate' => 'no_html',
				'default' => '',
			),
			
			/**************************
			    - Webmaster tools -
			**************************/
			array(
				'id'       => 'webmaster_tools',
				'type'     => 'switch',
				'title'    => __( 'Webmaster Tools', 'axis' ),
				'subtitle' => __( 'You can use the boxes below to verify with the different Webmaster Tools, if your site is already verified, you can just forget about these. Enter the verify meta values for', 'axis' ),
				'indent' => true 
			),
		   
		    //Google Webmaster Tools
			array(
				'id'       => 'google_verify',
				'type'     => 'text',
				'title'    => __( '<a href="https://www.google.com/webmasters/verification/verification?hl=en&siteUrl='.get_bloginfo('url').'">Google Webmaster Tools</a>', 'axis' ),
				'default'  => '',
				'required' => array( 'webmaster_tools', "=", 1 ),
			), 
			
			//Bing Webmaster Tools
			array(
				'id'       => 'ms_verify',
				'type'     => 'text',
				'title'    => __( '<a href="http://www.bing.com/webmaster/?rfp=1#/Dashboard/?url='.get_bloginfo('url').'">Bing Webmaster Tools</a>', 'axis' ),
				'default'  => '',
				'required' => array( 'webmaster_tools', "=", 1 ),
			),
			
			//Pinterest
			array(
				'id'       => 'pin_verify',
				'type'     => 'text',
				'title'    => __( '<a href="https://help.pinterest.com/entries/22488487-Verify-with-HTML-meta-tags">Pinterest</a>', 'axis' ),
				'default'  => '',
				'required' => array( 'webmaster_tools', "=", 1 ),
			),
			
			//Yandex Webmaster Tools
			array(
				'id'       => 'yandex_verify',
				'type'     => 'text',
				'title'    => __( '<a href="http://help.yandex.com/webmaster/service/rights.xml#how-to">Yandex Webmaster Tools</a>', 'axis' ),
				'default'  => '',
				'required' => array( 'webmaster_tools', "=", 1 ),
			),
			
			array(
				'id'       => 'webmaster_tools_section_end',
				'type'     => 'section',
				'indent' => false,
			),
			
			/***********************
			    - Social tools -
			***********************/
			array(
				'id'       => 'social_tools',
				'type'     => 'switch',
				'title'    => __( 'Social Tools', 'axis' ),
				'subtitle' => __( 'It is a way for website owners to send structured data to search engine robots. helping them to understand your content and create well-presented search results.', 'axis' ),
			),
			
			//Google Author profile
			array(
				'id'       => 'site_author',
				'type'     => 'text',
				'title'    => __( 'Google Author profile', 'axis' ),
				'desc'     => __( "If you have a Google+ profile , add that URL here and link it on your Google+ profile's about page.", 'axis' ),
				'default'  => '',
				'validate' => 'url',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Google Publisher Page
			array(
				'id'       => 'site_publisher',
				'type'     => 'text',
				'title'    => __( 'Google Publisher Page', 'axis' ),
				'desc'     => __( "If you have a Google+ page for your business, add that URL here and link it on your Google+ page's about page.", 'axis' ),
				'default'  => '',
				'validate' => 'url',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook Page URL
			array(
				'id'       => 'fb_url',
				'type'     => 'text',
				'title'    => __( 'Facebook Page URL', 'axis' ),
				'default'  => '',
				'validate' => 'url',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook Page Title
			array(
				'id'       => 'fb_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'desc'     => __( 'This is the title used in the Open Graph meta tags on the front page of your site.', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook Description
			array(
				'id'       => 'fb_description',
				'type'     => 'text',
				'title'    => __( 'Description', 'axis' ),
				'desc'     => __( 'This is the  description used in the Open Graph meta tags on the front page of your site.', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook Image
			 array(
				'id'       => 'fb_image',
				'type'     => 'media',
				'title'    => __( 'Image', 'axis' ),
				'desc'     => __( 'This is the image used in the Open Graph meta tags on the front page of your site.', 'axis' ),
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook page ID
			array(
				'id'       => 'fb_page',
				'type'     => 'text',
				'title'    => __( 'Facebook page ID', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Facebook APP ID
			array(
				'id'       => 'fb_app',
				'type'     => 'text',
				'title'    => __( 'Facebook APP ID', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Twitter Username
			array(
				'id'       => 'tw_name',
				'type'     => 'text',
				'title'    => __( 'Twitter Username', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Twitter Title
			array(
				'id'       => 'tw_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'desc'     => __( 'Add title to Twitter card meta data.', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Twitter Description
			array(
				'id'       => 'tw_description',
				'type'     => 'text',
				'title'    => __( 'Description', 'axis' ),
				'desc'     => __( 'Add description to Twitter card meta data.', 'axis' ),
				'default'  => '',
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			//Twitter Image
			 array(
				'id'       => 'tw_image',
				'type'     => 'media',
				'title'    => __( 'Image', 'axis' ),
				'desc'     => __( 'Add image to Twitter card meta data.', 'axis' ),
				'required' => array( 'social_tools', "=", 1 ),
			),
			
			array(
				'id'       => 'social_tools_section_end',
				'type'     => 'section',
			),
			
		),
	);
?>