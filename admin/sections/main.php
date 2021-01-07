<?php
	$this->sections[] = array(
		'title'  => __( 'Main Options', 'axis' ),
		'icon'   => 'el el-home',
		  'fields' => array(
	
		   	//Plugin mode
			array(
				'id'        => 'plugin_mode',
				'type'      => 'switch',
				'title'     => __( 'Plugin Mode', 'axis' ),
				'subtitle' => __( 'Choose the mode in which you want the plugin to operate in.', 'axis' ),
				'desc'     => __( '<ul><li><strong>Off</strong> - Axis will be switch off.</li><li><strong>Coming Soon Mode</strong> - <strong>JUST</strong> Visitors will see Axis while you work on your theme (Administrator can not see).</li>', 'axis' ),
				'on'        => __( 'Coming Soon Mode', 'axis' ),
				'off'       => __( 'Off', 'axis' ),
				'default'   => false
			),
					
			//Skin color
			array(
				'id'       => 'color',
				'type'     => 'select',
				'title'    => __( 'Skin Color', 'axis' ),
				'subtitle' => __( 'Choose your skin Color', 'axis' ),
				'options'  => array(
					'orange' => 'Orange',
					'green' => 'Green',	
					'blue' => 'Blue',				
					'purple' => 'Purple',
					'yellow' => 'Yellow',					
					'grey' => 'Grey'
				),
				'default'  => 'orange'	
			),
		  
		   	//Logo
			array(
				'id'       => 'logo',
				'type'     => 'media',
				'title'    => __( 'Logo', 'axis' ),
			),	
			
			//Favicon
			array(
				'id'       => 'favicon',
				'type'     => 'media',
				'title'    => __( 'Favicon', 'axis' ),
				'desc'     => __( 'Use a 16x16 .ico or .png file.', 'axis' ),
			),	
			
			//Loading text
			array(
				'id'       => 'loading_text',
				'type'     => 'text',
				'title'    => __( 'Loading Text', 'axis' ),
				'validate' => 'html',
				'default'  => "Loading...",
			),	
			
			//Title
			array(
				'id'       => 'title',
				'type'     => 'text',
				'title'    => __( 'Title', 'axis' ),
				'validate' => 'html',
				'default'  => "<span>Axis</span> Is Coming Soon",
			),
			
			
		),
	);
?>