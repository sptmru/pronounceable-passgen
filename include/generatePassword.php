<?php

include_once('config.php');
include "../classes/PasswordController.php";

if(isset($_GET['action'])) {
	$username = $_GET['username'];
	$date = $_GET['date'];
	$date = str_replace("/","",$date);
	$passwordController = new PasswordController;
	$password = $passwordController->generatePassword($username,$date);
	echo $password;
}

?>
