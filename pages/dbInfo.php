<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

function connect_database() {
	$fetchType = "array";
	$dbHost    = "localhost";
	$dbLogin   = "instamed_upi2";
	$dbPwd     = "instamed_upi2";
	$dbName    = "instamed_upi2";
	$con       = mysqli_connect($dbHost, $dbLogin, $dbPwd, $dbName);
	if (!$con) {
		die("Database Connection failes" . mysqli_connect_errno());
	}
	return ($con);
}

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'instamed_upi2');
define('DB_PASSWORD', 'instamed_upi2');
define('DB_NAME', 'instamed_upi2');
?>