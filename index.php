<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	if($_POST['username'] == "Ignas" && $_POST['password'] == "slaptas") {
		#tinka username is password
		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = "admin";
	} else {
		#netinka username is password
		$error = "Wrong username or password";
	}
} else {
	#prisijungimo duomenys nebuvo ivesti
	$error = "No login data!";
}

// Login check (ar vartotojas prisijunges)

if (isset($_SESSION['user'])) {
	include "view/main.php";
} else {
	include "view/login.php";
}






