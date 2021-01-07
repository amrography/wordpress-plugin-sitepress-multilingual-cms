<?php
	$this->sections[] = array(
		'title'  => __( 'Background', 'axis' ),
		'icon'   => 'el el-picture',
		  'fields' => array(
		  
			//Background type
			array(
				'id'       => 'bg_type',
				'type'     => 'radio',
				'title'    => __('Background Type', 'redux-framework-demo'), 
				'options'  => array(
					'1' => 'Single Image', 
					'2' => 'Image Slideshow', 
					'3' => 'Youtube Background'
				),
				'default' => '1'
			),
			
			//Single image
			array(
				'id'       => 'single_image_section',
				'type'     => 'section',
				'indent'   => true,
				'required' => array( 'bg_type', "=", 1 ),
			),
			
			array(
				'id'       => 'single_image',
				'type'     => 'media',
				'subtitle' => __( 'Select the image you want in the background', 'axis' ),
				'title'    => __( 'Single image', 'axis' ),
			),	
			
			array(
				'id'       => 'single_image_section_end',
				'type'     => 'section',
				'indent'   => false,
			),
			
			//Image slideshow
			array(
				'id'       => 'image_slideshow_section',
				'type'     => 'section',
				'indent'   => true,
				'required' => array( 'bg_type', "=", 2 ),
			),
			
			array(
				'id'       => 'image_slideshow',
				'type'     => 'gallery',
				'title'    => __( 'Image Slideshow', 'axis' ),
				'subtitle' => __( 'Select images you want in the background', 'axis' ),
			),	
			
			array(
				'id'       => 'fade',
				'type'     => 'text',
				'title'    => __( 'Fade', 'axis' ),
				'default'  => '750',
			),
			
			array(
				'id'       => 'duration',
				'type'     => 'text',
				'title'    => __( 'Duration', 'axis' ),
				'default'  => '3000',
			),
			
			array(
				'id'       => 'image_slideshow_section_end',
				'type'     => 'section',
				'indent'   => false,
			),
			
			//Youtube background
			array(
				'id'       => 'youtube_bg_section',
				'type'     => 'section',
				'indent'   => true,
				'required' => array( 'bg_type', "=", 3 ),
			),
			
			array(
				'id'       => 'youtube_video_id',
				'type'     => 'text',
				'title'    => __( 'Youtube Video ID', 'axis' ),
				'desc'    => __( 'Example: R_odAWTEtMQ<br />https://www.youtube.com/watch?v=<b>R_odAWTEtMQ</b>', 'axis' ),
				'default'  => '',
			),
			
			array(
				'id'       => 'youtube_bg_section_end',
				'type'     => 'section',
				'indent'   => false,
			),
			
		),
	);
?>