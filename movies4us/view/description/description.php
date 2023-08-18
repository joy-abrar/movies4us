<!DOCTYPE html>
<html>
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  	<link rel="icon" type="image/png" href="../../public/images/logo.png">
	<title><?= $_GET['name'] ?></title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<meta name="description" content="Watch Latest Hindi Full Movies Online Free, Dubbed in Hindi Movies, Indian Documentaries, TV Shows, Awards and more.">
	<meta name="keywords" content="bollywood movie, bollywood movies, hindi movie, hindi movies, watch online movies, watch hindi movies online, new 2020 movies, bollywood movies online hd, hindi hd movies, shah rukh khan movies, salman khan movies, movies4us, movies4us.info, best bollywood movies, best hollywood movies, bollywood movies watch online, recent hindi movies, recent relased hindi movies, recent bollywood movies, recently uploaded hindi movies, recently uploaded bollywood movies, bollywood movies watch online for free, free bollywood movies, free hindi movies, new free hindi movies, free hindi movies online, free bollywood movies online, watch bollywood movies full free hd, watch hindi serials online, hindi serial online watch for free, watch hindi seiral online, hindi series online, hindi series online for free, watch best bollywxood movies, best hindi movies, best hindi movies online, best hindi movies full free hd, best hd movies">
  </head>
<body id="homeBackground">

	<?php
		include_once("../../lib/topMenu.php");
	?>

	<div>
		<center>
			<h2><?= $_GET['name'] ?></h2>
			<hr id="homeHr1">
			<img id="descriptionMoviePoster" alt="<?= $_GET['name'] ?>" src="<?= $_GET['poster'] ?>"/>
			<br>
			<a id="watchNowButton" href="../../index.php?action=watchNow&id=<?= $_GET['id'] ?>">Watch Now</a>
			<br>
            
			<h2>Movie Description - <?= $_GET['name'] ?></h2>
			
			<div id="movieDescParam">
				<span style="color:white;"><?= $_GET['description'] ?></span>
			</div>
           
		</center>
	</div>

</body>
</html>