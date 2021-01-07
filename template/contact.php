<?php
	if(!$_POST) exit;
	
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	
	global $axisConfig;
	
	//Error variable
	$error = "";
	
	//Form Fields
	$name = trim($_POST["name"]);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);
	$date = date('F j, Y, H:i (h:i A) (\G\M\T O)');
	$ip = $_SERVER['REMOTE_ADDR'];
	
	//Check name
	if(!$name) {
		$error .= __( 'Please enter your name.<br />', 'axis' );
	}
	
	//Check if email is valid
	if(empty($email)) {
		$error .= __( 'Please enter your e-mail.<br />', 'axis' );
	}
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error .= __( 'Please enter a valid email address.<br />', 'axis' );
	}
	
	//Check message
	if(get_magic_quotes_gpc()) {
		$message = stripslashes($message);
	}
	
	if(!$message) {
		$error .= __( 'Please enter the message.<br />', 'axis' );
	}
	
	//Result
	if(!$error) {
		$variables = array(	'{from}', 	'{email}', '{phone}', 	'{message}', 	'{date}', 	'{ip}');
		$values = array(	$name, 		$email, 	$phone, 	$message, 		$date, 		$ip);
		
		$text = trim( str_replace($variables, $values, $axisConfig['contact_form_template']));
		$headers = array('From: '.$name.' <'.$email.'>');

		if (!empty($axisConfig['contact_form_email'])) {
			if (wp_mail($axisConfig['contact_form_email'], __( 'A new message from', 'axis' ).' '.$name, $text, $headers)) {
				echo "ok";
			} else {
				$error .= __( 'Message sending error!', 'axis' );
			}
		}
	}
	
	if($error) {
		echo '<div class="notification_error">'.$error.'</div>';
	}
?>