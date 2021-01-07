<?php
	//Read subscribed email addresses from address.txt
	if ( file_exists( dirname( __FILE__ ) . '/../../template/address.txt' ) ) {
		Redux_Functions::initWpFilesystem();
		global $wp_filesystem;
		
		$address_list = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/../../template/address.txt' );
	}
	
	$this->sections[] = array(
		'title'  => __( 'Subscribe', 'axis' ),
		'icon'   => 'el el-envelope',
		  'fields' => array(
		  
			//Title
			array(
				'id'       => 'subscribe_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'default'  => 'Notify Me When It\'s Ready',
			),
			
			//Email field label
			array(
				'id'       => 'subscribe_email_field_label',
				'type'     => 'text',
				'title'    => __( 'Email Field Label', 'axis' ),
				'default'  => 'Enter your email address',
			),
			
			//Button label
			array(
				'id'       => 'subscribe_button_label',
				'type'     => 'text',
				'title'    => __( 'Button Label', 'axis' ),
				'default'  => 'Send',
			),
			
			//Success message
			array(
				'id'       => 'subscribe_success_msg',
				'type'     => 'text',
				'title'    => __( 'Success Message', 'axis' ),
				'validate' => 'html',
				'default'  => 'Thank you! We will contact you once we launch the website!',
			),
			
			//Subscribers list
			array(
                'id'         => 'subscribe_addresses',
                'type'       => 'raw',
                'full_width' => false,
                'title'    => __('Subscribers List', 'axis'),
                'content'    => "<textarea readonly style='float: left; width: 25em;'>".$address_list."</textarea>",
            ),
			
			/*********************
			    - Mailschimp -
			*********************/
			array(
				'id'       => 'subscribe_use_mailchimp',
				'type'     => 'switch',
				'title'    => __( 'Use MailChimp?', 'axis' ),
				'subtitle' => __( 'Set to Yes if you want to use MailChimp to manage subscribers. If set to No the email addresses will be added to a simple text string.', 'axis' ),

			),
			
			 array(
				'id'       => 'mailchimp_section',
				'type'     => 'section',
				'title'    => __( 'Mailchimp Details', 'axis' ),
				'subtitle' => __( 'Follow the steps below to get the form data. 1 - Navigate to the Lists page. 2 - Click the drop-down menu to the right of the Stats button for the list you want to work with, then select Signup forms. 3 - Click Embedded forms. Data Values example = us0-123456789-00000000, 123456789 = is MailChimp User ID, 00000000 = is Mailchimp List ID, us0 = is your Mailchimp server', 'axis' ),
				'indent'   => true, // Indent all options below until the next 'section' option is set.
				'required' => array( 'subscribe_use_mailchimp', "=", 1 ),
			),
			
			//Mailchimp Username
			array(
				'id'       => 'mailchimp_your_name',
				'type'     => 'text',
				'title'    => __( 'Mailchimp Username', 'axis' ),
				'default'  => '',
			),
			
			//MailChimp User ID
			array(
				'id'       => 'mailchimp_your_id',
				'type'     => 'text',
				'title'    => __( 'MailChimp User ID', 'axis' ),
				'default'  => '',
			),
			
			//Mailchimp List ID
			array(
				'id'       => 'mailchimp_form_id',
				'type'     => 'text',
				'title'    => __( 'Mailchimp List ID', 'axis' ),
				'default'  => '',
			),

			//Choose your server
			array(
				'id'       => 'mailchimp_server',
				'type'     => 'select',
				'title'    => __( 'Mailchimp Server', 'axis' ),
				'subtitle' => __( 'Choose your server', 'axis' ),
				'options'  => array(
					'1' => 'us1',
					'2' => 'us2',
					'3' => 'us3',
					'4' => 'us4',
					'5' => 'us5',
					'6' => 'us6',
					'7' => 'us7',
					'8' => 'us8',
					'9' => 'us9',
					'10' => 'us10',
					'11' => 'us11',
					'12' => 'us12',
					'13' => 'us13',
					'14' => 'us14',
					'15' => 'us15',
					'16' => 'us16',
					'17' => 'us17',
					'18' => 'us18',
					'19' => 'us19',
					'20' => 'us20'					
				),
			),
			
			array(
				'id'       => 'mailchimp_section_end',
				'type'     => 'section',
			),
			
		),
	);
?>