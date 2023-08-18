<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"  content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Movies4us-Home</title>
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<meta name="description" content="Watch Latest Hindi Full Movies Online Free, Dubbed in Hindi Movies, Indian Documentaries, TV Shows, Awards and more.">
	<meta name="keywords" content="bollywood movie, bollywood movies, hindi movie, hindi movies, watch online movies, watch hindi movies online, new 2020 movies, bollywood movies online hd, hindi hd movies, shah rukh khan movies, salman khan movies, movies4us, movies4us.info, best bollywood movies, best hollywood movies, bollywood movies watch online, recent hindi movies, recent relased hindi movies, recent bollywood movies, recently uploaded hindi movies, recently uploaded bollywood movies, bollywood movies watch online for free, free bollywood movies, free hindi movies, new free hindi movies, free hindi movies online, free bollywood movies online, watch bollywood movies full free hd, watch hindi serials online, hindi serial online watch for free, watch hindi seiral online, hindi series online, hindi series online for free, watch best bollywxood movies, best hindi movies, best hindi movies online, best hindi movies full free hd, best hd movies">
</head>
<body id="homeBackground">
	<center>
			<!--<h1 id="homeTitle"><u>Movies4Us.tv</u></h1>-->
			<div id="homeTitleBLoc">
			<a href="index.php"><img id="titleLogo" src="public/images/logo.png"></a>
				<div id="homeMenu">
					<a id="homeMenuBox" href="index.php"><h4><i class="fa fa-home"></i></h4></a>
					<a id="homeMenuBox" href="index.php?action=hollywood"><h4>HOLLYWOOD</h4></a>
					<a id="homeMenuBox" href="index.php?action=bollywood"><h4>BOLLYWOOD</h4></a>
					<a id="homeMenuBox" href="index.php?action=french"><h4>FRENCH</h4></a>
					<a id="homeMenuBox" href="index.php?action=south"><h4>SOUTH INDIAN</h4></a>
					<a id="homeMenuBox" href="index.php?action=bangla"><h4>BANGLA</h4></a>
				</div>
			</div>
		</center>

		<div id="searchBoxBloc">
			<input id="searchBox" type="searchBox" name="searchBox">
			<input id="searchButton" type="submit" name="searButton" value="SEARCH">
		</div>

		<!-- ---------------- HOLLYWOOD MOVIES --------------->
		<center>
			<h2>HOLLYWOOD MOVIES</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows2 = $hollywoodMovies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows2['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows2['moviePoster'] ?>">
							<figcaption><?= $rows2['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<hr id="homeHr2">
		</center>	
	</div>

		<div id="footerMenu">
			<a id="" href="index.php?action=loginPage"><h4>Admin</h4></a>
		</div>
</body>
</html>