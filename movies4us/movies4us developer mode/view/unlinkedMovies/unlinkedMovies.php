<!DOCTYPE html>
<html>
<head>
	<title>Unlinked Movies</title>
</head>
<body>
		<center>
			<?php
				while ($get = $getUnlinkedMovies -> fetch()) 
				{
			?>
					<h4><?= $get['movieName'] ?></h4>
					<a href="index.php?action=repair&movieName=<?= $get['movieName'] ?>">REPAIR</a>
					<hr>
			<?php
				}
			?>
		</center>

</body>
</html>