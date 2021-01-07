<?php
	$this->sections[] = array(
		'title'  => __( 'Google Maps', 'axis' ),
		'icon'   => 'el el-icon-map-marker',
		  'fields' => array(
		  
		  	//Visibility
			array(
				'id'        => 'map_visibility',
				'type'      => 'switch',
				'title'     => __( 'Section Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable map section.', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),
		  
		  	//Latitude
		  	array(
				'id'        => 'map_latitude',
				'type'      => 'text',
				'title'     => __( 'Latitude of a Point', 'axis' ),
				'desc'      => __( 'Example, 37.800976', 'axis' ),
				'default'   => '37.800976'
			),
			
			//Longitude
			array(
				'id'        => 'map_longitude',
				'type'      => 'text',
				'title'     => __( 'Longitude of a Point', 'axis' ),
				'desc'      => __( 'Example, -122.428502', 'axis' ),
				'default'   => '-122.428502'
			),
			
			//Zoom level
			array(
				'id'            => 'map_zoom_level',
				'type'          => 'slider',
				'title'         => __( 'Zoom Level', 'axis' ),
				'desc'          => __( 'Zoom level between 0 to 21', 'axis' ),
				'default'       => 10,
				'min'           => 0,
				'step'          => 1,
				'max'           => 21,
				'display_value' => 'text'
			),
			
			//API key
			array(
				'id'        => 'map_google_api',
				'type'      => 'text',
				'title'     => __( 'Google Maps JavaScript API Key', 'axis' ),
				'default'   => ''
			),
			
			//Map color
			array(
				'id'           => 'map_color',
				'type'         => 'color',
				'transparent'  => false,
				'title'        => __( 'Map Color', 'axis' ),
				'desc'         => __( 'Pick a color', 'axis' ),
				'default'      => '#ff5744'
			),
			
			//Marker image
			array(
				'id'        => 'map_marker',
				'type'      => 'media',
				'title'     => __( 'Marker Image', 'axis' ),
				'mode'      => false,
			),
			
			//Marker popup title
			array(
				'id'        => 'map_marker_popup_title',
				'type'      => 'text',
				'title'     => __( 'Marker Popup Title', 'axis' ),
				'default'   => __( 'San Francisco, United States', 'axis' )
			),
			
		),
	);
?>