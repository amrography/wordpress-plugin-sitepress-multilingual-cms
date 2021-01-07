<?php
	$this->sections[] = array(
		'title'  => __( 'Import / Export', 'axis' ),
		'desc'   => __( 'Import and Export your Axis settings from file, text or URL.', 'axis' ),
		'icon'   => 'el-icon-refresh',
		'fields' => array(
		
			//Import / Export
			array(
				'id'         => 'opt-import-export',
				'type'       => 'import_export',
				'title'      => __( 'Import Export', 'axis' ),
				'subtitle'   => __( 'Save and restore your Axis options', 'axis' ),
				'full_width' => false,
			),
		),
	);
?>