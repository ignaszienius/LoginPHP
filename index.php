<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
	if($_POST['username'] == "Tomas" && $_POST['password'] == "slaptas") {
		#tinka username ir password
		$_SESSION['user']['username'] = $_POST['username'];
		$_SESSION['user']['level'] = "admin";

		if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on') {
                    $hour = date("h:i:sa");
                    setcookie('username', $_POST['username']);
                    setcookie('time', $hour);
        }

	} else {
		#netinka username is password
		$error = "Wrong username or password";
	}
} else {
	#prisijungimo duomenys nebuvo ivesti
	$error = "No login data!";
}

if (isset($_GET['logout'])) {
	session_destroy();
}

// Login (session) check (ar vartotojas prisijunges)

if (isset($_SESSION['user'])) {
	include "view/main.php";
} else {
	include "view/login.php";
}






