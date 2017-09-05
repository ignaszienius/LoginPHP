<?php

$vardas = "";

#COOKIES

/*setcookie("username", "Ignas", time() + (86400 * 7), "/"); // 86400 = 1 day
if(isset($_COOKIE["username"])) {
	$vardas = $_COOKIE["username"];
} else {
	$vardas = "nežinomas";
}
*/
#SESSIONS
session_start();
//$_SESSION['username'] = "Antanas";
if(isset($_SESSION["username"])) {
	$vardas = $_SESSION["username"];
} else {
	$vardas = "nežinomas";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cookies and sessions</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row head bg-warning">
		<h1>Cookies and sessions</h1>
	</div>
	<div class="col">
		Mano vardas yra <?= $vardas; ?>.
	</div>
</div>
</body>
</html>
