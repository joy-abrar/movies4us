<?php
	
	include('controller/controlAdmin.php');

	$control_admin = new ControlAdmin();


	if (isset($_GET['action'])) 
	{
		if ($_GET['action'] == 'login') 
		{
			$mail = $_POST['mail'];
			$pass = $_POST['pass'];
			$control_admin-> login($mail,$pass);
		}

		if ($_GET['action'] == 'uploadMovie') 
		{
			$control_admin-> uploadMovie();
		}


		if ($_GET['action'] == 'publishMovie') 
		{
			$movieTitle = $_POST['movieTitle'];
			$moviePoster = $_POST['moviePoster'];
			$movieLink = $_POST['movieLink'];
			$movieDescription = $_POST['movieDescription'];
			$year = $_POST['year'];

			// ---------------- CATEROGY---------------//
			$hollywood = 0;
			$bollywood = 0;
			$french = 0;
			$south = 0;
			$bangla = 0;

			$action = 0;
			$comedy = 0;
			$crime = 0;
			$drama = 0;
			$sci = 0;
			$romantic = 0;
			$biopic = 0;
			$horror = 0;
			$thriller = 0;
			$suspense = 0;
			$fantastic = 0;
			$adventure = 0;
			$sport = 0;
			$music = 0;
			$history = 0;
			$war = 0;

			if (isset($_POST['hollywood'])) 
			{
				$hollywood = 1;
			}

			if (isset($_POST['bollywood'])) 
			{
				$bollywood = 1;
			}

			if (isset($_POST['french'])) 
			{
				$french = 1;
			}

			if (isset($_POST['south'])) 
			{
				$south = 1;
			}

			if (isset($_POST['bangla'])) 
			{
				$bangla = 1;
			}



			if (isset($_POST['action'])) 
			{
				$action = 1;
			}

			if (isset($_POST['comedy'])) 
			{
				$comedy = 1;
			}

			if (isset($_POST['crime'])) 
			{
				$crime = 1;
			}

			if (isset($_POST['drama'])) 
			{
				$drama = 1;
			}

			if (isset($_POST['sci'])) 
			{
				$sci = 1;
			}

			if (isset($_POST['romantic'])) 
			{
				$romantic = 1;
			}

			if (isset($_POST['biopic'])) 
			{
				$biopic = 1;
			}

			if (isset($_POST['horror'])) 
			{
				$horror = 1;
			}

			if (isset($_POST['thriller'])) 
			{
				$thriller = 1;
			}

			if (isset($_POST['suspense'])) 
			{
				$suspense = 1;
			}

			if (isset($_POST['fantastic'])) 
			{
				$fantastic = 1;
			}

			if (isset($_POST['adventure'])) 
			{
				$adventure = 1;
			}

			if (isset($_POST['sport'])) 
			{
				$sport = 1;
			}

			if (isset($_POST['music'])) 
			{
				$music = 1;
			}

			if (isset($_POST['history'])) 
			{
				$history = 1;
			}

			if (isset($_POST['war'])) 
			{
				$war = 1;
			}															
						
			$control_admin-> publishMovie($movieTitle, $moviePoster, $movieLink, $movieDescription, $hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year);
		}		
		
		if ($_GET['action'] == 'editMovie') 
		{
			$control_admin-> editMovie();
		}

		if ($_GET['action'] == 'editAllMovies') 
		{
			$control_admin-> editAllMovies();
		}		

		if ($_GET['action'] == 'editSelectedMovie') 
		{
			$editSelectedMovieId = $_GET['editSelectedMovieId'];
			$control_admin-> editSelectedMovie($editSelectedMovieId);
		}	

		if ($_GET['action'] == 'deleteSelectedMovie') 
		{
			$deleteSelectedMovieId = $_GET['deleteSelectedMovieId'];
			$control_admin-> deleteSelectedMovie($deleteSelectedMovieId);
		}	

		if ($_GET['action'] == 'updateThisMovie') 
		{
			$updatingMovieId = $_GET['updatingMovieId'];
			
			$movieName = $_POST['movieTitle'];
			$moviePoster = $_POST['moviePoster']; 
			$movieDescription = $_POST['movieDescription'];
			$movieLink = $_POST['movieLink'];
			$year = $_POST['year'];

			$hollywood = 0;
			$bollywood = 0;
			$french = 0;
			$south = 0;
			$bangla = 0;

			$action = 0;
			$comedy = 0;
			$crime = 0;
			$drama = 0;
			$sci = 0;
			$romantic = 0;
			$biopic = 0;
			$horror = 0;
			$thriller = 0;
			$suspense = 0;
			$fantastic = 0;
			$adventure = 0;
			$sport = 0;
			$music = 0;
			$history = 0;
			$war = 0;

			if (isset($_POST['hollywood'])) 
			{
				$hollywood = 1;
			}
			
			if (isset($_POST['bollywood'])) 
			{
				$bollywood = 1;
			}

			if (isset($_POST['french'])) 
			{
				$french = 1;
			}

			if (isset($_POST['south'])) 
			{
				$south = 1;
			}

			if (isset($_POST['bangla'])) 
			{
				$bangla = 1;
			}


			if (isset($_POST['action'])) 
			{
				$action = 1;
			}

			if (isset($_POST['comedy'])) 
			{
				$comedy = 1;
			}

			if (isset($_POST['crime'])) 
			{
				$crime = 1;
			}

			if (isset($_POST['drama'])) 
			{
				$drama = 1;
			}

			if (isset($_POST['sci'])) 
			{
				$sci = 1;
			}

			if (isset($_POST['romantic'])) 
			{
				$romantic = 1;
			}

			if (isset($_POST['biopic'])) 
			{
				$biopic = 1;
			}

			if (isset($_POST['horror'])) 
			{
				$horror = 1;
			}

			if (isset($_POST['thriller'])) 
			{
				$thriller = 1;
			}

			if (isset($_POST['suspense'])) 
			{
				$suspense = 1;
			}

			if (isset($_POST['fantastic'])) 
			{
				$fantastic = 1;
			}


			if (isset($_POST['adventure'])) 
			{
				$adventure = 1;
			}


			if (isset($_POST['sport'])) 
			{
				$sport = 1;
			}


			if (isset($_POST['music'])) 
			{
				$music = 1;
			}


			if (isset($_POST['history'])) 
			{
				$history = 1;
			}


			if (isset($_POST['war'])) 
			{
				$war = 1;
			}												
			$control_admin-> updateThisMovie($updatingMovieId,$movieName,$moviePoster,$movieDescription,$movieLink,$hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year);
		}	

		if ($_GET['action'] == 'showReports') 
		{
			$control_admin-> showReports();
		}

		if ($_GET['action'] == 'showUnlinkedMovies') 
		{
			$control_admin-> showUnlinkedMovies();
		}
		
		if ($_GET['action'] == 'repair') 
		{
			$movieName = $_GET['movieName'];
			$control_admin-> repair($movieName);
		}

		if ($_GET['action'] == 'solved') 
		{
			$movieName = $_GET['movieName'];
			$control_admin-> solved($movieName);
		}						

	}

	else
	{
		$control_admin -> adminConnectionPage();
	}
?>