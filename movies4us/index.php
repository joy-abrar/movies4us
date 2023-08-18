<?php
	include('controller/controlUser.php');
	include('controller/controlAdmin.php');

	$control_user = new ControlUser();
	$control_admin = new ControlAdmin();

	if (isset($_GET['action'])) 
	{
		if ($_GET['action'] == 'hollywood') 
		{
			$control_user-> hollywood();
		}

		if ($_GET['action'] == 'bollywood') 
		{
			$control_user-> bollywood();
		}

		if ($_GET['action'] == 'french') 
		{
			$control_user-> french();
		}

		if ($_GET['action'] == 'south') 
		{
			$control_user-> south();
		}

		if ($_GET['action'] == 'bangla') 
		{
			$control_user-> bangla();
		}		

		if ($_GET['action'] == 'loginPage') 
		{
			$control_admin-> loginPage();
		}

		if ($_GET['action'] == 'loginCheck') 
		{
			$email = $_POST['email'];
			$password = $_POST['password'];
			$control_admin-> loginCheck($email, $password);
		}

		if ($_GET['action'] == 'movieDetails') 
		{
			$id = $_GET['id'];
			$control_user -> movieDetails($id);
		}
      
		if ($_GET['action'] == 'watchNow') 
		{
			$id = $_GET['id'];
			$control_user -> watchNow($id);
		}
      
		if ($_GET['action'] == 'seeMoreOfLatest') 
		{
			$control_user -> seeMoreOfLatest();
		}
		
		if ($_GET['action'] == 'seeMoreOfRecent') 
		{
			$control_user -> seeMoreOfRecent();
		}


		if ($_GET['action'] == 'seeMoreOfHollywood') 
		{
			$control_user -> seeMoreOfHollywood();
		}		

		if ($_GET['action'] == 'seeMoreOfBollywood') 
		{
			$control_user -> seeMoreOfBollywood();
		}		

		if ($_GET['action'] == 'seeMoreOfFrench') 
		{
			$control_user -> seeMoreOfFrench();
		}

		if ($_GET['action'] == 'seeMoreOf2021') 
		{
			$control_user -> seeMoreOf2021();
		}
        
		if ($_GET['action'] == 'seeMoreOf2020') 
		{
			$control_user -> seeMoreOf2020();
		}        

		if ($_GET['action'] == 'seeMoreOf2019') 
		{
			$control_user -> seeMoreOf2019();
		}

		if ($_GET['action'] == 'seeMoreOf2018') 
		{
			$control_user -> seeMoreOf2018();
		}

		if ($_GET['action'] == 'moviesByYear') 
		{
			$year = $_GET['year'];

			$control_user -> moviesByYear($year);
		}
        
		if ($_GET['action'] == 'movieNotWorks') 
		{
			$movieName = $_GET['movieName'];
			$movieId = $_GET['movieId'];
			$description = $_GET['description'];
			$link = $_GET['link'];
			$control_user -> movieNotWorks($movieId,$movieName,$description,$link);
		}						
		
	}

	else
	{
		$control_user -> homePage();
	}
?>