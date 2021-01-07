<?php
	if(!$_POST) exit;
	
	$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
	require_once( $parse_uri[0] . 'wp-load.php' );
	
	global $axisConfig;
	
	//Variables
	$result = "ok";
	$msg = "";
	
	//Form Fields
	$email = trim($_POST["EMAIL"]);
	
	//Check if email is valid
	if (empty($email)) {
		$result = "error";
		$msg = __( 'Error! An email address is required', 'axis' );
		exit();
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = "error";
		$msg = __( 'You have entered an invalid e-mail address. Please try again.', 'axis' );
		exit();
	}
	
	//Write to text file
	$data = $email . ";";
	$ret = file_put_contents('address.txt', $data, FILE_APPEND | LOCK_EX);
	
	if($ret === false) {
		die(__( 'There was an error writing this file', 'axis' ));
	} else {
		$msg = $axisConfig['subscribe_success_msg'];
	}
	
	//JSON
	$arr = array(
		"result" => $result,
		"msg" => $msg
	);
	
    echo json_encode($arr);
?>