<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
	<div class="row head bg-warning">
		<h1>Main page</h1>
	</div>
	<div class="col">
		<?php 
			echo "Sveiki, " .  $_SESSION['user']['username'];
		 ?>.
		 <a class="btn-sm btn-danger" href="?logout=true">Logout</a>
	</div>
	<div class="col">
			<pre><?php
			echo "POST";
			print_r($_POST);

			echo "SESSION";
			print_r($_SESSION);

			echo "COOKIE";
			print_r($_COOKIE);

			?><pre>
		</div>
</div>
</body>
</html>
