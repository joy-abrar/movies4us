<!DOCTYPE html>
<html>
<head>
	<title>movies4us - Edit All Movies</title>
</head>
<body>
	<div>
	<?php
		while ($rows = $get -> fetch()) 
		{

	?>	
		<center>
			<h4><?= $rows['movieName'] ?></h4>
			<a href="index.php?action=editSelectedMovie&editSelectedMovieId=<?= $rows['id'] ?>">EDIT </a>
			<br>
			<a href="index.php?action=deleteSelectedMovie&deleteSelectedMovieId=<?= $rows['id'] ?>"> DELETE</a>
			<hr>
		</center>
	<?php		
		}
	?>
	</div>
</body>
</html>