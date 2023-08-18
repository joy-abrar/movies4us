<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<title>Movies4us-Admin</title>
</head>
<body id="homeBackground">
	<center>
		<h1 id="homeTitle"><u>Movies4Us.tv</u></h1>
		<h5 id="homeSubtitle">Bollywood , Hollywood, Bangla, South Indian etc... </h5>
	</center>

	<div id="homeMenu">
		<a id="homeMenuBox" href="../../index.php?action=hollywood"><h4>HOLLYWOOD</h4></a>
		<a id="homeMenuBox" href=""><h4>BOLLYWOOD</h4></a>
		<a id="homeMenuBox" href=""><h4>SOUTH INDIAN</h4></a>
		<a id="homeMenuBox" href=""><h4>BANGLA</h4></a>
	</div>

	<?php
			$id = $_GET['id'];
			$password = $_GET['password'];
	?>
</body>
</html>