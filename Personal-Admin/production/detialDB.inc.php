<?php

$db_username = 'root';
$db_password = '';
$db_name = 'personaldb';
$db_host = '127.0.0.1'; 
$mysqli_conn= new mysqli($db_host, $db_username, $db_password,$db_name);
if ($mysqli_conn->connect_error)
	 {
   	 die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
	}