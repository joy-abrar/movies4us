<!DOCTYPE html>
<html>
<head>
	<title>Reports</title>
</head>
<body>
		<center>
			<?php
				while ($get = $getData -> fetch()) 
				{
			?>
					<h4><?= $get['movieName'] ?></h4>
					<a href="index.php?action=repair&movieName=<?= $get['movieName'] ?>">REPAIR</a>
					<a href="index.php?action=solved&movieName=<?= $get['movieName'] ?>">SOLVED</a>
					<hr>
			<?php
				}
			?>
		</center>

</body>
</html>