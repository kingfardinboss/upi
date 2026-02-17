<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

function connect_database() {
	$fetchType = "array";
	$dbHost    = "sql.freedb.tech";
	$dbLogin   = "freedb_upilaskar";
	$dbPwd     = "E#hq8k%qB7jnd$c";
	$dbName    = "freedb_upilaskar";
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
