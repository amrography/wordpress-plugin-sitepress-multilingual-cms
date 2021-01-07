<?php
	$this->sections[] = array(
		'title'  => __( 'Services', 'axis' ),
		'icon'   => 'el el-website',
		  'fields' => array(

		  	//Visibility
			array(
				'id'        => 'service_visibility',
				'type'      => 'switch',
				'title'     => __( 'Section Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable services section.', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),

		  	//Title
			array(
				'id'       => 'service_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'default'  => 'What We <span>Do</span>',
			),

			//Info
			array(
				'id'       => 'service_info',
				'type'     => 'editor',
				'title'    => __( 'Info', 'axis' ),
				'default'  => "We design and develop web sites. At vero eos.<br />Accusamus et iusto odios un dignissimos."
			),

			//Box 1
			array(
				'id'          => 'box_1',
				'type'        => 'section',
				'title'       => __('Box 1'),
				'indent'      => true,
			),

			array(
				'id'	   =>'box_1_icon',
				'type' 	   => 'select',
				'title'    => __('Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-flask'
			),

			array(
				'id'       => 'box_1_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'validate' => 'html',
				'default'  => "Strategy & Consulting",
			),

			array(
				'id'       => 'box_1_desc',
				'type'     => 'textarea',
				'title'    => __( 'Description', 'axis' ),
				'validate' => 'html',
				'rows'     => 2,
				'default'  => "Proin scelerisque enim eget pulvinar ullamcorper, quisque feugiat ultricies risus vel vestibulum, sed imperdiet urna ligula varius.",
			),

			array(
				'id'     => 'box_1_end',
				'type'   => 'section',
				'indent' => false,
			),

			//Box 2
			array(
				'id'          => 'box_2',
				'type'        => 'section',
				'title'       => __('Box 2'),
				'indent'      => true,
			),

			array(
				'id'	   =>'box_2_icon',
				'type' 	   => 'select',
				'title'    => __('Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-magic'
			),

			array(
				'id'       => 'box_2_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'validate' => 'html',
				'default'  => "Web Design & Development",
			),

			array(
				'id'       => 'box_2_desc',
				'type'     => 'textarea',
				'title'    => __( 'Description', 'axis' ),
				'validate' => 'html',
				'rows'     => 2,
				'default'  => "Proin scelerisque enim eget pulvinar ullamcorper, quisque feugiat ultricies risus vel vestibulum, sed imperdiet urna ligula varius.",
			),

			array(
				'id'     => 'box_2_end',
				'type'   => 'section',
				'indent' => false,
			),

			//Box 3
			array(
				'id'          => 'box_3',
				'type'        => 'section',
				'title'       => __('Box 3'),
				'indent'      => true,
			),

			array(
				'id'	   =>'box_3_icon',
				'type' 	   => 'select',
				'title'    => __('Icon', 'axis'),
				'options'  => AxisFontAwesomeIcons(),
				'class'    => 'font-awesome-icons',
				'default'  => 'fa-rocket'
			),

			array(
				'id'       => 'box_3_title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'validate' => 'html',
				'default'  => "Product Marketing",
			),

			array(
				'id'       => 'box_3_desc',
				'type'     => 'textarea',
				'title'    => __( 'Description', 'axis' ),
				'validate' => 'html',
				'rows'     => 2,
				'default'  => "Proin scelerisque enim eget pulvinar ullamcorper, quisque feugiat ultricies risus vel vestibulum, sed imperdiet urna ligula varius.",
			),

			array(
				'id'     => 'box_3_end',
				'type'   => 'section',
				'indent' => false,
			),

		),
	);
?>