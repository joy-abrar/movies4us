<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="icon" type="image/png" href="public/images/logo.png"/> 
	<link rel="stylesheet" type="text/css" href="public/css/style.css"/>
	<script type="text/javascript" src="public/jquery/jquery.min.js"></script> 
	<script type="text/javascript" src="view/homePage/main.js"></script>
	<title>Movies4us-Home</title>

	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<!--<link rel='stylesheet' href='public/css/fontAwesome.css'>-->
	<meta name="description" content="Watch Latest Hindi Full Movies Online Free, Dubbed in Hindi Movies, Indian Documentaries, TV Shows, Awards and more.">
	<meta name="keywords" content="bollywood movie, bollywood movies, hindi movie, hindi movies, watch online movies, watch hindi movies online, new 2020 movies, bollywood movies online hd, hindi hd movies, shah rukh khan movies, salman khan movies, movies4us, movies4us.info, best bollywood movies, best hollywood movies, bollywood movies watch online, recent hindi movies, recent relased hindi movies, recent bollywood movies, recently uploaded hindi movies, recently uploaded bollywood movies, bollywood movies watch online for free, free bollywood movies, free hindi movies, new free hindi movies, free hindi movies online, free bollywood movies online, watch bollywood movies full free hd, watch hindi serials online, hindi serial online watch for free, watch hindi seiral online, hindi series online, hindi series online for free, watch best bollywxood movies, best hindi movies, best hindi movies online, best hindi movies full free hd, best hd movies">
</head>
<body id="homeBackground">
		<div id="loader" class="center"></div>
		
		<center>
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
		
		<div id="yearCalendar">
			<div>
			<span id="yearcalendarTitle"><u id="underlineYear">YEAR CALENDAR</u></span>
			</div>
			<div id="table">
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2000">2000 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2001">2001 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2002">2002 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2003">2003 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2004">2004 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2005">2005 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2006">2006 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2007">2007 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2008">2008 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=209">2009 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2010">2010 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2011">2011 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2012">2012 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2013">2013 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2014">2014 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2015">2015 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2016">2016 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2017">2017 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2018">2018 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2019">2019 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2020">2020 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2021">2021 </a></span>
				<span id="yearGrid"> <a id="yearLink" href="index.php?action=moviesByYear&year=2022">2022 </a></span>
			</div>
		</div>
        
        
  <!-- ---------------- LATEST MOVIES --------------->
		<center>
			<h2>LATEST MOVIES</h2>
			<hr id="homeHr1">
				<div id="marqueeBloc">
				<?php
					while ($rows = $query -> fetch()) 
					{
				?>	
						<figure id="figBloc">
							<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows['id'] ?>">
								<img id="figImage" width="120" height="200" src="<?= $rows['moviePoster'] ?>">
								<figcaption><?= $rows['movieName'] ?></figcaption>
							</a>
						</figure>
				<?php	
					}
					
				?>
				</div>
				<a href="index.php?action=seeMoreOfLatest">See More...</a>
			<hr id="homeHr2">
		</center>
    <!-- ---------------- RECENTLY UPLOADED --------------->
		<center>
			<h2>RECENTLY UPLOADED</h2>
			<hr id="homeHr1">
				<div id="marqueeBloc">
				<?php
					while ($rows1 = $query4 -> fetch()) 
					{
				?>	
						<figure id="figBloc">
							<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows1['id'] ?>">
								<img id="" width="120rem" height="200rem" src="<?= $rows1['moviePoster'] ?>">
								<figcaption><?= $rows1['movieName'] ?></figcaption>
							</a>
						</figure>
				<?php	
					}
					
				?>
				</div>
			<center>
				<a href="index.php?action=seeMoreOfRecent">See More...</a>
			</center>
			<hr id="homeHr2">
		</center>
        

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
			<a href="index.php?action=seeMoreOfHollywood">See More...</a>
			<hr id="homeHr2">
		</center>
        
		<center>
			<h2>BOLLYWOOD MOVIES</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows3 = $bollywoodMovies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows3['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows3['moviePoster'] ?>">
							<figcaption><?= $rows3['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<a href="index.php?action=seeMoreOfBollywood">See More...</a>
			<hr id="homeHr2">
		</center>
  
  		<center>
			<h2>YEAR 2021</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows8 = $byYear2021Movies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows8['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows8['moviePoster'] ?>">
							<figcaption><?= $rows8['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<a href="index.php?action=seeMoreOf2021">See More...</a>
			<hr id="homeHr2">
		</center>

		<center>
			<h2>YEAR 2020</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows5 = $byYear2020Movies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows5['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows5['moviePoster'] ?>">
							<figcaption><?= $rows5['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<a href="index.php?action=seeMoreOf2020">See More...</a>
			<hr id="homeHr2">
		</center>





<!-- ---------------- 2019 MOVIES --------------->
		<center>
			<h2>YEAR 2019</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows6 = $byYear2019Movies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows6['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows6['moviePoster'] ?>">
							<figcaption><?= $rows6['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<a href="index.php?action=seeMoreOf2019">See More...</a>
			<hr id="homeHr2">
		</center>


<!-- ---------------- 2018 MOVIES --------------->
		<center>
			<h2>YEAR 2018</h2>
			<hr id="homeHr1">
			<div id="marqueeBloc">
				<?php
					while($rows7 = $byYear2018Movies -> fetch())
					{
				?>
					<figure id="figBloc">
						<a id="figLink" href="index.php?action=movieDetails&id=<?= $rows7['id'] ?>">
							<img id="" width="120rem" height="200rem" src="<?= $rows7['moviePoster'] ?>">
							<figcaption><?= $rows7['movieName'] ?></figcaption>
						</a>
					</figure>
				<?php		
					}
				?>
			</div>
			<a href="index.php?action=seeMoreOf2018">See More...</a>
			<hr id="homeHr2">
		</center>	


		<div id="footerMenu">
			<a id="footerItems" href="index.php?action=loginPage"><h4>Admin</h4></a>
          	<a id="footerItems" href="index.php?action=loginPage"><h4>Terms Of Conditions</h4></a>
          	<a id="footerItems" href="index.php?action=loginPage"><h4>About Us</h4></a>
          	<a id="footerItems" href="index.php?action=loginPage"><h4>Contact</h4></a>
		</div>
</body>
</html>