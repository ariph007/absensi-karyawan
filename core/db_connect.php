<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "webdb";

// crearte connection
$connect = new Mysqli($servername, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
	die("Connection Failed : " . $connect->error);
} else {
	// echo "Successfully Connected";
}


?>
