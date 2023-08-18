<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"  content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>Movies4us-Home</title>
</head>
<body id="homeBackground">
	<div id="bodyWidth">
		<center>
			<h1 id="homeTitle"><u>Movies4Us.tv - Bollywood</u></h1>
			<h5 id="homeSubtitle">Bollywood , Hollywood, Bangla, South Indian etc... </h5>
		</center>

		<center>
			<div id="homeMenu">
				<a id="homeMenuBox" href="index.php?action=hollywood"><h4>HOLLYWOOD</h4></a>
				<a id="homeMenuBox" href="index.php?action=bollywood"><h4>BOLLYWOOD</h4></a>
				<a id="homeMenuBox" href="index.php?action=french"><h4>FRENCH</h4></a>
				<a id="homeMenuBox" href="index.php?action=south"><h4>SOUTH INDIAN</h4></a>
				<a id="homeMenuBox" href="index.php?action=bangla"><h4>BANGLA</h4></a>
			</div>
		</center>

		<!-- ---------------- HOLLYWOOD MOVIES --------------->
		<center>
			<h2>SOUTH INDIAN MOVIES</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows2 = $southMovies -> fetch())
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