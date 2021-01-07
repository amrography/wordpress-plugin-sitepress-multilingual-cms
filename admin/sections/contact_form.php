<?php
	$this->sections[] = array(
		'title'  => __( 'Contact Form', 'axis' ),
		'icon'   => 'el el-envelope',
		  'fields' => array(
		  
		  	//Visibility
			array(
				'id'        => 'contact_form_visibility',
				'type'      => 'switch',
				'title'     => __( 'Section Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable contact form section.', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),
		  
		  	//Title
			array(
				'id'       => 'contact_form_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'default'  => 'Get in <span>Touch</span>',
			),
			
			//Info
			array(
				'id'       => 'contact_form_info',
				'type'     => 'editor',
				'title'    => __( 'Info', 'axis' ),
				'default'  => "Feel free to drop us a line! Morbi lectus ligula.<br />Placerat condimentum sapien et quam."
			),
			
			//Name field label
			array(
				'id'       => 'contact_form_name_field_label',
				'type'     => 'text',
				'title'    => __( 'Name Field Label', 'axis' ),
				'default'  => 'Name',
			),
			
			//Email field label
			array(
				'id'       => 'contact_form_email_field_label',
				'type'     => 'text',
				'title'    => __( 'Email Field Label', 'axis' ),
				'default'  => 'Email',
			),
			
			//Phone field label
			array(
				'id'       => 'contact_form_phone_field_label',
				'type'     => 'text',
				'title'    => __( 'Phone Field Label', 'axis' ),
				'default'  => 'Phone',
			),
			
			//Message field label
			array(
				'id'       => 'contact_form_message_field_label',
				'type'     => 'text',
				'title'    => __( 'Message Field Label', 'axis' ),
				'default'  => 'Message',
			),
			
			//Button label
			array(
				'id'       => 'contact_form_button_label',
				'type'     => 'text',
				'title'    => __( 'Button Label', 'axis' ),
				'default'  => 'Send Message',
			),
			
			//Target email address
			array(
				'id'        => 'contact_form_email',
				'type'      => 'text',
				'title'     => __( 'Target Email address', 'axis' ),
				'default'   => ''
			),
			
			//Email template
			array(
				'id'        => 'contact_form_template',
				'type'      => 'textarea',
				'title'     => __( 'Email Template', 'axis' ),
				'desc'      => __( 'Available tags &ndash; {from}, {email}, {phone}, {message}, {date}, {ip}', 'axis' ),
				'default'   => __( "Dear Administrator,\nYou have one message from {from} ({email}).\n\n{message}\n\n{date}\n{phone}", 'axis' )
			),
			
		),
	);
?>