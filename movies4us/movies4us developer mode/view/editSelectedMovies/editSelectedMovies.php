<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<title>editSelectedMovies</title>
</head>
<body>

	<?php
		while ($rows = $get -> fetch()) 
		{
	?>

	<center>
		<h1>EDIT THIS MOVIE</h1>
		<div id="uploadForm">
			<form method="POST" action="index.php?action=updateThisMovie&updatingMovieId=<?= $rows['id'] ?>">
				
				<h2>Movie Title:</h2>
				<input id="publishFormBoxes" type="text" name="movieTitle" placeholder="Enter Your Movie Title..." value="<?= $rows['movieName'] ?>">
				<br>
				
				<h2>Movie Poster:</h2>
				<input id="publishFormBoxes" type="text" name="moviePoster" placeholder="Enter Your Movie Poster Link..." value="<?= $rows['moviePoster'] ?>">
				<br>
				
				<h2>Movie Link:</h2>
				<input id="publishFormBoxes" type="text" name="movieLink" placeholder="Enter Your Movie Link..." value="<?= $rows['movieLink'] ?>">
				<br>

				<h2>Movie Description:</h2>
				<input id="publishFormDescBoxes" type="text" name="movieDescription" placeholder="Enter Your Movie Description..." value="<?= $rows['movieDescription'] ?>">
				<br>

				<h2>Movie Country:</h2>
				<span>Hollywood</span><input id="publishFormBoxes" type="checkbox" name="hollywood" value="hollywood">
				<span>Bollywood</span><input id="publishFormBoxes" type="checkbox" name="bollywood" value="bollywood">
				<span>French</span><input id="publishFormBoxes" type="checkbox" name="french" value="french">
				<span>South Indian</span><input id="publishFormBoxes" type="checkbox" name="south" value="south">
				<span>Bangla</span><input id="publishFormBoxes" type="checkbox" name="bangla" value="bangla">
				<br>
				
				<h2>Movie Category:</h2>
				
				<span>Action</span><input id="publishFormBoxes" type="checkbox" name="action" value="action">
				
				<span>Comedy</span><input id="publishFormBoxes" type="checkbox" name="comedy" value="comedy">

				<span>Crime</span><input id="publishFormBoxes" type="checkbox" name="crime" value="crime">

				<span>Drama</span><input id="publishFormBoxes" type="checkbox" name="drama" value="drama">

				<span>Sci-fi</span><input id="publishFormBoxes" type="checkbox" name="sci" value="sci">

				<span>Romantic</span><input id="publishFormBoxes" type="checkbox" name="romantic" value="romantic">

				<span>Biopic</span><input id="publishFormBoxes" type="checkbox" name="biopic" value="biopic">

				<span>Horror</span><input id="publishFormBoxes" type="checkbox" name="horror" value="horror">

				<span>Thriller</span><input id="publishFormBoxes" type="checkbox" name="thriller" value="thriller">

				<span>Suspense</span><input id="publishFormBoxes" type="checkbox" name="suspense" value="suspense">

				<span>Fantastic</span><input id="publishFormBoxes" type="checkbox" name="fantastic" value="fantastic">

				<span>Adventure</span><input id="publishFormBoxes" type="checkbox" name="adventure" value="adventure">

				<span>Sport</span><input id="publishFormBoxes" type="checkbox" name="sport" value="sport">

				<span>Music</span><input id="publishFormBoxes" type="checkbox" name="music" value="music">

				<span>History</span><input id="publishFormBoxes" type="checkbox" name="history" value="history">

				<span>War</span><input id="publishFormBoxes" type="checkbox" name="war" value="war">

				<br>
				<span>Year</span><input id="publishFormBoxes" type="number" name="year" value="year">
	
				<br>
				<input id="publishFormBoxes" class="subButton" type="submit" name="publish" value="PUBLISH">
			</form>
		</div>
	</center>
	<?php
		}
	?>

</body>
</html>