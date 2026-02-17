<?php
error_reporting(0);

$host = "sql.freedb.tech";   // confirm exact host from panel
$user = "freedb_upilaskar";  // your DB username
$pass = "E#hq8k%qB7jnd$c";   // your DB password
$db   = "freedb_upilaskar";  // your DATABASE NAME (not password!)

$conn = mysqli_connect($host, $user, $pass, $db, 3306);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

$server = $_SERVER["SERVER_NAME"];
?>
