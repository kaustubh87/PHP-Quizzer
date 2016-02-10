<?php


$db_host ="127.0.0.1";
$db_username = 'admin';
$db_password = 'password';
$db_name = 'quizzer';

$mysqli = new mysqli($db_host,$db_username,$db_password,$db_name);

if($mysqli->connect_error)
{
	printf("Connection Failed: %s\n", $mysqli->connect_error);
	exit();
}


?>