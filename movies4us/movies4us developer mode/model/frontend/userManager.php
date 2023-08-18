<?php
	require_once('model/Manager.php');

	class UserManager extends Manager
	{
		function adminConnectionPage()
		{
			header("location:view/adminConnectionPage/adminConnectionPage.php");
		}

		function login($mail, $pass)
		{
			$db = $this -> dbConnect();
			$queryEmail = $db -> prepare('SELECT email FROM admin WHERE email = ?');
			$queryEmail -> execute(array($mail));
			

			$emailFound = null;
			session_start();
			$_SESSION['logStatus'] = "out";


			while( $rowsEmail = $queryEmail -> fetch()) 
			{
				$emailFound = $rowsEmail['email'];
			}

			$queryPassword = $db -> prepare('SELECT password FROM admin WHERE password = ?');
			$queryPassword -> execute(array($pass));
			$passwordFound = null;
			
			while( $rowsPassword = $queryPassword -> fetch()) 
			{
				$passwordFound = $rowsPassword['password'];
			}
			

			if ($emailFound == $mail && $passwordFound == $pass) 
			{
				$_SESSION['logStatus'] = "in";
				header("location: view/dashboard/dashboard.php");

			}

			else 
			{
				echo "not logged in!";
			}
		}
	

		function uploadMovie()
		{
			header('location: view/uploadMovie/uploadMovie.php');
		}

		function publishMovie($movieTitle, $moviePoster, $movieLink, $movieDescription, $hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, 
			$crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year)
		{						

				$db = $this -> dbConnect();
				$queryPublish = $db -> prepare('INSERT INTO movies (movieName , moviePoster, movieDescription, movieLink, hollywood, bollywood, french, south, bangla, action, biopic, comedy, crime, drama, fantastic, horror, romantic, sci, suspense, thriller, adventure, sport, music, history, war, year) VALUES(?, ?, ?, ?, ?, ?, ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ?)');
				$queryPublish -> execute(array($movieTitle, $moviePoster, $movieDescription, $movieLink, $hollywood, $bollywood, $french, $south, $bangla, $action, $biopic, $comedy, $crime, $drama, $fantastic, $horror, $romantic, $sci, $suspense, $thriller, $adventure, $sport, $music, $history, $war, $year));

		}

		function editMovie()
		{
			header('location: view/editMovie/editMovie.php');
		}

		function editAllMovies()
		{
			$db = $this -> dbConnect();
			$getAllMovies = $db -> prepare('SELECT * FROM movies ORDER BY movieName ASC');
			$getAllMovies -> execute(array());
			return $getAllMovies;
		}

		function editSelectedMovie($editSelectedMovieId)
		{
			$db = $this -> dbConnect();
			$getSelectedMovies = $db -> prepare('SELECT * FROM movies WHERE id = ?');
			$getSelectedMovies -> execute(array($editSelectedMovieId));
			return $getSelectedMovies;
		}

		function deleteSelectedMovie($deleteSelectedMovieId)
		{
			$db = $this -> dbConnect();
			$getSelectedMovies = $db -> prepare('DELETE FROM movies WHERE id = ?');
			$getSelectedMovies -> execute(array($deleteSelectedMovieId));
		}


		function updateThisMovie($updatingMovieId,$movieName,$moviePoster,$movieDescription,$movieLink,$hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year)
		{ 
			$db = $this -> dbConnect();
			$updateSelectedMovies = $db -> prepare('UPDATE movies SET movieName=? , moviePoster=? , movieDescription=? , movieLink=? , hollywood=? , bollywood=? , french=?, south=? , bangla=? , action=? , comedy=? , crime=? , drama=? , sci=? , romantic=? , biopic=? , horror=? , thriller=? , suspense=? , fantastic=? , adventure=? , sport=? , music=? , history=? , war=? , year=? WHERE id = ?');
			$updateSelectedMovies -> execute(array($movieName, $moviePoster, $movieDescription, $movieLink, $hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year, $updatingMovieId));
			return $updateSelectedMovies;
		}


		function showReports()
		{
			$db = $this -> dbConnect();
			$getReports = $db -> prepare('SELECT * FROM reports');
			$getReports -> execute(array());
			return $getReports;
		}

		function showUnlinkedMovies()
		{
			$db = $this -> dbConnect();
			$getReports = $db -> prepare('SELECT * FROM movies WHERE movieLink = ? ORDER BY movieName ASC');
			$getReports -> execute(array("A"));
			return $getReports;
		}

		function repair($movieName)
		{
			$db = $this -> dbConnect();
			$getReports = $db -> prepare('SELECT * FROM movies WHERE movieName = ?');
			$getReports -> execute(array($movieName));
			return $getReports;
		}
		
		function solved($movieName)
		{
			$db = $this -> dbConnect();
			$getReports = $db -> prepare('DELETE FROM reports WHERE movieName = ?');
			$getReports -> execute(array($movieName));
			return $getReports;
		}

	}