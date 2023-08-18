<?php

	require_once('model/frontend/userManager.php');
	class ControlAdmin
	{
		function adminConnectionPage()
		{
			$userManager = new UserManager();
			$userManager -> adminConnectionPage();
		}

		function login($mail, $pass)
		{
			$userManager = new UserManager();
			$userManager -> login($mail, $pass);
		}
	
		function uploadMovie()
		{
			$userManager = new UserManager();
			$userManager -> uploadMovie();
		}

		function publishMovie($movieTitle, $moviePoster, $movieLink, $movieDescription, $hollywood, $bollywood, $french, $south, $bangla, $action, $comedy,
			$crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year)
		{
			$userManager = new UserManager();
			$userManager -> publishMovie($movieTitle, $moviePoster, $movieLink, $movieDescription, $hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year);
			header('location:view/dashboard/dashboard.php');
		}

		function editMovie()
		{
			$userManager = new UserManager();
			$userManager -> editMovie();
		}
		

		function editAllMovies()
		{
			$userManager = new UserManager();
			$get = $userManager -> editAllMovies();
			require('view/editAllMovies/editAllMovies.php');
		}

		function editSelectedMovie($editSelectedMovieId)
		{
			$userManager = new UserManager();
			$get = $userManager -> editSelectedMovie($editSelectedMovieId);
			require('view/editSelectedMovies/editSelectedMovies.php');
		}

		function deleteSelectedMovie($deleteSelectedMovieId)
		{
			$userManager = new UserManager();
			$get = $userManager -> deleteSelectedMovie($deleteSelectedMovieId);	
			header('location:view/dashboard/dashboard.php');
		}

		function updateThisMovie($updatingMovieId,$movieName,$moviePoster,$movieDescription,$movieLink,$hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year)
		{
			$userManager = new UserManager();
			$get = $userManager -> updateThisMovie($updatingMovieId,$movieName,$moviePoster,$movieDescription,$movieLink,$hollywood, $bollywood, $french, $south, $bangla, $action, $comedy, $crime, $drama, $sci, $romantic, $biopic, $horror, $thriller, $suspense, $fantastic, $adventure, $sport, $music, $history, $war, $year);
			header('location:index.php?action=editAllMovies');
		}

		function showReports()
		{
			$userManager = new UserManager();
			$getData = $userManager -> showReports();
			include('view/reports/reports.php');
		}

		function showUnlinkedMovies()
		{
			$userManager = new UserManager();
			$getUnlinkedMovies = $userManager -> showUnlinkedMovies();
			include('view/unlinkedMovies/unlinkedMovies.php');
		}		

		function repair($movieName)
		{
			$userManager = new UserManager();
			$get = $userManager -> repair($movieName);
			include('view/repairSelectedMovies/repairSelectedMovies.php');
		}		
		
		function solved($movieName)
		{
			$userManager = new UserManager();
			$solved = $userManager -> solved($movieName);
			//include('view/reports/reports.php');
		}		
		
	}