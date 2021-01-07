<?php
	$this->sections[] = array(
		'title'  => __( 'Countdown', 'axis' ),
		'icon'   => 'el el-calendar',
		  'fields' => array(

			//Visibility
			array(
				'id'        => 'countdown_visibility',
				'type'      => 'switch',
				'title'     => __( 'Section Visibility', 'axis' ),
				'desc'     => __( 'Enable/disable countdown', 'axis' ),
				'on'        => __( 'Enable', 'axis' ),
				'off'       => __( 'Disable', 'axis' ),
				'default'   => true
			),

			//Countdown date
			array(
				'id'       => 'countdown_date',
				'type'     => 'date',
				'title'    => __( 'Countdown Date', 'axis' ),
				'desc'     => __( 'mm/dd/yyyy', 'axis' ),
				'placeholder' => '12/25/2017'
			),

			//Countdown labels
			array(
				'id'=>'countdown_days_label',
				'type' => 'text',
				'title' => __('Days Label', 'axis'),
				'default' 	=> "days",
			),

			array(
				'id'=>'countdown_hours_label',
				'type' => 'text',
				'title' => __('Hours Label', 'axis'),
				'default' 	=> "hours",
			),

			array(
				'id'=>'countdown_minutes_label',
				'type' => 'text',
				'title' => __('Minutes Label', 'axis'),
				'default' 	=> "minutes",
			),

			array(
				'id'=>'countdown_seconds_label',
				'type' => 'text',
				'title' => __('Seconds Label', 'axis'),
				'default' 	=> "seconds",
			),

		),
	);
?>