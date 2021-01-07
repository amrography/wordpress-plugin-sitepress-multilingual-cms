<?php
	$this->sections[] = array(
		'title'  => __( 'Footer Options', 'axis' ),
		'icon'   => 'el el-icon-chevron-down',
		  'fields' => array(

		  	//Copyright
		  	array(
				'id'        => 'copyright_text',
				'type'      => 'editor',
				'title'     => __( 'Copyright Text', 'axis' ),
				'desc'      => __( 'You can use the shortcodes in your footer text', 'axis' ),
				'default'   => __( 'Copyright &copy; 2017 <a href="#" target="_blank">Axis</a>', 'axis' )
			),

			//Disable social links
			array(
				'id'        => 'social_links_visibility',
				'type'      => 'switch',
				'title'     => __( 'Social links Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable social links section.', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),

			//Social link
			array(
			'id'=>'social_link',
			'type' => 'social',
			'title' => __('Social Links', 'axis'),
			'options' => AxisFontAwesomeIcons(),
			'default_show' => false,
			'default' => array(
					0 => array(
						'title' => 'Twitter',
						'select' => 'fa-twitter',
						'url' => '#',
						'sort' => 0
						),
					1 => array(
						'title' => 'Facebook',
						'url' => '#',
						'select' => 'fa-facebook',
						'sort' => 1
						),
					2 => array(
						'title' => 'Instagram',
						'url' => '#',
						'select' => 'fa-instagram',
						'sort' => 2
						),
				)
			),

		),
	);
?>