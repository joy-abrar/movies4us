<?php

	require_once('model/userManager.php');
	class ControlUser
	{

		function homePage()
		{
			$userManager = new userManager();
			$userManager -> homePage();
		}

		function hollywood()
		{
			$userManager = new userManager();
			$hollywoodMovies = $userManager -> hollywood();
			include('view/hollywood/hollywood.php');
		}

		function bollywood()
		{
			$userManager = new userManager();
			$bollywoodMovies = $userManager -> bollywood();
			include('view/bollywood/bollywood.php');
		}

		function french()
		{
			$userManager = new userManager();
			$frenchMovies = $userManager -> french();
			include('view/french/french.php');
		}


		function south()
		{
			$userManager = new userManager();
			$southMovies = $userManager -> south();
			include('view/south/south.php');
		}

		function bangla()
		{
			$userManager = new userManager();
			$banglaMovies = $userManager -> bangla();
			include('view/bangla/bangla.php');
		}

		function movieDetails($id)
		{
			$userManager = new userManager();
			$movieDetails = $userManager -> movieDetails($id);
			
			while ($rows = $movieDetails -> fetch()) 
			{
				$movieId = $rows['id'];
				$movieName = $rows['movieName'];
				$movieDescription = $rows['movieDescription'];
				$moviePoster = $rows['moviePoster'];
			}
			

			header("location: view/description/description.php?id=".$movieId."&name=".$movieName."&description=".$movieDescription."&poster=".$moviePoster);

		}

		function watchNow($id)
		{
			$userManager = new userManager();
			$watchNow = $userManager -> watchNow($id);
			
			while ($rows = $watchNow -> fetch()) 
			{
				$movieId = $rows['id'];
				$movieName = $rows['movieName'];
				$movieDescription = $rows['movieDescription'];
				$movieLink = $rows['movieLink'];
				$moviePoster = $rows['moviePoster'];
			}
			header("location: view/movie/movie.php?id=".$movieId."&name=".$movieName."&link=".$movieLink);
		}

		function seeMoreOfLatest()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOfLatest();
			include('view/seeMore/seeMore.php');
		}
		

		function seeMoreOfRecent()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOfRecent();
			include('view/seeMore/seeMore.php');
		}		
	

		function seeMoreOfHollywood()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOfHollywood();
			include('view/seeMore/seeMore.php');
		}		
	
		function seeMoreOfBollywood()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOfBollywood();
			include('view/seeMore/seeMore.php');
		}

		function seeMoreOfFrench()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOfFrench();
			include('view/seeMore/seeMore.php');
		}

		function seeMoreOf2021()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOf2021();
			include('view/seeMore/seeMore.php');
		}
		
		function seeMoreOf2020()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOf2020();
			include('view/seeMore/seeMore.php');
		}
        
		function seeMoreOf2019()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOf2019();
			include('view/seeMore/seeMore.php');
		}        

		function seeMoreOf2018()
		{
			$userManager = new userManager();
			$seeMore = $userManager -> seeMoreOf2018();
			include('view/seeMore/seeMore.php');
		}

		function moviesByYear($year)
		{
			$userManager = new userManager();
			$seeMore = $userManager -> moviesByYear($year);
			include('view/seeMore/seeMore.php');
		}

		function movieNotWorks($movieId , $movieName , $description , $link)
		{
			$userManager = new userManager();
			$notWorks = $userManager -> movieNotWorks($movieId , $movieName , $description , $link);
			header("location: view/description/description.php?id=".$movieId."&name=".$movieName."&description=".$description."&link=".$link);
		}		
	}

?>