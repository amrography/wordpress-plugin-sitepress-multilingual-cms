<?php
	$this->sections[] = array(
		'title'  => __( 'Contact Info', 'axis' ),
		'icon'   => 'el el-icon-phone',
		  'fields' => array(
		  
		  	//Visibility
			array(
				'id'        => 'contact_visibility',
				'type'      => 'switch',
				'title'     => __( 'Section Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable contact info section.', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),
		  
		  	//Parallax image
		  	array(
				'id'       => 'contact_image',
				'type'     => 'media',
				'subtitle' => __( 'Select the image you want in the background', 'axis' ),
				'title'    => __( 'Parallax Image', 'axis' ),
			),
		  
		  	//Phone
			array(
				'id'          => 'contact_phone',
				'type'        => 'section',
				'title'       => __('Phone'),
				'indent'      => true,
			),
			
			array(
				'id'	   =>'contact_phone_icon',
				'type' 	   => 'select',
				'title'    => __('Phone Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-phone'
			),
			
			array(
				'id'       => 'contact_phone_text',
				'type'     => 'text',
				'title'    => __( 'Phone Number', 'axis' ),
				'validate' => 'html',
				'default'  => "949-723-3012",
			),
			
			array(
				'id'     => 'contact_phone_end',
				'type'   => 'section',
				'indent' => false,
			),
			
			//Email address
			array(
				'id'          => 'contact_email',
				'type'        => 'section',
				'title'       => __('Email'),
				'indent'      => true,
			),
			
			array(
				'id'	   =>'contact_email_icon',
				'type' 	   => 'select',
				'title'    => __('Email Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-envelope'
			),
			
			array(
				'id'       => 'contact_email_text',
				'type'     => 'text',
				'title'    => __( 'Email Address', 'axis' ),
				'validate' => 'html',
				'default'  => "email@sitename.com",
			),
			
			array(
				'id'     => 'contact_email_end',
				'type'   => 'section',
				'indent' => false,
			),
			
			//Address
			array(
				'id'          => 'contact_address',
				'type'        => 'section',
				'title'       => __('Address'),
				'indent'      => true,
			),
			
			array(
				'id'	   =>'contact_address_icon',
				'type' 	   => 'select',
				'title'    => __('Address Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-map-marker'
			),
			
			array(
				'id'       => 'contact_address_text',
				'type'     => 'text',
				'title'    => __( 'Address', 'axis' ),
				'validate' => 'html',
				'default'  => "1628 Union Street, San Francisco, CA 94123‎",
			),
			
			array(
				'id'     => 'contact_address_end',
				'type'   => 'section',
				'indent' => false,
			),
			
		),
	);
?>