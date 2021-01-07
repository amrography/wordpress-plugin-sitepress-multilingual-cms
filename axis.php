<?php
	/*
	Plugin Name: Axis
	Plugin URI: https://codecanyon.net/item/axis-responsive-coming-soon-wordpress-plugin/19576948
	Description: Axis - Responsive Coming Soon WordPress Plugin
	Author: AthenaStudio
	Version: 1.7.1
	Author URI: https://themeforest.net/user/athenastudio
	*/

	add_action( 'plugins_loaded', 'axis_textdomain' );
	function axis_textdomain() {
		load_plugin_textdomain( 'axis', false,  dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/admin/redux-framework/ReduxCore/framework.php' ) ) {
		require_once( dirname( __FILE__ ) . '/admin/redux-framework/ReduxCore/framework.php' );
		require_once( plugin_dir_path(__FILE__) . '/admin/social/social.php' );
	}

	if ( !isset( $axisConfig ) && file_exists( dirname( __FILE__ ) . '/admin/config.php' ) ) {
		require_once( dirname( __FILE__ ) . '/admin/config.php' );
	}

	function axis_coming_soon_wp() {
		global $axisConfig;

		if(!$axisConfig['plugin_mode']) {
			return;
		} else if($axisConfig['plugin_mode']) {
			if ( current_user_can( 'manage_options' ) ) {
				return;
			} else {
				include( dirname( __FILE__ ) . '/template/functions.php');
				include( dirname( __FILE__ ) . '/template/index.php');
				die();
			}
		}
	}
	add_action( 'template_redirect', 'axis_coming_soon_wp' );

	function increase_upload( $bytes ) {
		return 33554432; //32 megabytes
	}
	add_filter( 'upload_size_limit', 'increase_upload' );
?>