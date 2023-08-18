<?php
	require_once('model/Manager.php');

	class UserManager extends Manager
	{
		public function homePage()
		{
			$db = $this -> dbConnect();

			$query4 = $db -> prepare('SELECT * FROM movies ORDER BY id DESC LIMIT 10');
			$query4 -> execute(array());

			$query = $db -> prepare('SELECT * FROM movies WHERE year = ? ORDER BY id DESC LIMIT 10');
			$query -> execute(array('2022'));


			$hollywoodMovies = $db -> prepare('SELECT * FROM movies WHERE hollywood = ? LIMIT 10');
			$hollywoodMovies -> execute(array( '1'));

			$bollywoodMovies = $db -> prepare('SELECT * FROM movies WHERE bollywood = ? LIMIT 10');
			$bollywoodMovies -> execute(array( '1'));

			$frenchMovies = $db -> prepare('SELECT * FROM movies WHERE french = ? LIMIT 10');
			$frenchMovies -> execute(array( '1'));

			$byYear2021Movies = $db -> prepare('SELECT * FROM movies WHERE year = ? LIMIT 10');
			$byYear2021Movies -> execute(array( '2021'));
			
			$byYear2020Movies = $db -> prepare('SELECT * FROM movies WHERE year = ? LIMIT 10');
			$byYear2020Movies -> execute(array( '2020'));

			$byYear2019Movies = $db -> prepare('SELECT * FROM movies WHERE year = ? LIMIT 10');
			$byYear2019Movies -> execute(array( '2019'));			

			$byYear2018Movies = $db -> prepare('SELECT * FROM movies WHERE year = ? LIMIT 10');
			$byYear2018Movies -> execute(array( '2018'));
			
			include('view/homePage/homePage.php');	
		}

		public function hollywood()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE hollywood = ?');
			$query -> execute(array('1'));
			return $query;
		}

		public function bollywood()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE bollywood = ?');
			$query -> execute(array('1'));
			return $query;
		}

		public function french()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE french = ?');
			$query -> execute(array('1'));
			return $query;
		}


		public function south()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE south = ?');
			$query -> execute(array('1'));
			return $query;
		}

		public function bangla()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE bangla = ?');
			$query -> execute(array('1'));
			return $query;
		}

		public function loginPage()
		{

			header('location:view/loginPage/loginPage.php');
		}
		
		public function loginCheck($email, $password)
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM admin');
			$query -> execute(array());
			return $query;
		}

		public function movieDetails($id)
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE id = ? ');
			$query -> execute(array($id));
			return $query;
		}
		
      	public function watchNow($id)
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE id = ? ');
			$query -> execute(array($id));
			return $query;
		}
      
		public function seeMoreOfLatest()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies ORDER BY id DESC LIMIT 50 ');
			$query -> execute(array());
			return $query;
		}	


		public function seeMoreOfRecent()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies ORDER BY id DESC LIMIT 20 ');
			$query -> execute(array());
			return $query;
		}	


		public function seeMoreOfHollywood()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE hollywood = ? ');
			$query -> execute(array('1'));
			return $query;
		}	


		public function seeMoreOfBollywood()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE bollywood = ? ');
			$query -> execute(array('1'));
			return $query;
		}	
	

		public function seeMoreOfFrench()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE french = ? ');
			$query -> execute(array('1'));
			return $query;
		}	
        
        public function seeMoreOf2021()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE year = ? ');
			$query -> execute(array('2021'));
			return $query;
		}

		public function seeMoreOf2020()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE year = ? ');
			$query -> execute(array('2020'));
			return $query;
		}
        
		public function seeMoreOf2019()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE year = ? ');
			$query -> execute(array('2019'));
			return $query;
		}        

		public function seeMoreOf2018()
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('SELECT * FROM movies WHERE year = ? ');
			$query -> execute(array('2018'));
			return $query;
		}

		public function moviesByYear($year)
		{
			$db = $this->dbConnect();
			$moviesByYear = $db -> prepare('SELECT * FROM movies WHERE year = ? ');
			$moviesByYear -> execute(array($year));
			return $moviesByYear;
		}
		public function movieNotWorks($movieId , $movieName , $description , $link)
		{
			$db = $this->dbConnect();
			$query = $db -> prepare('INSERT INTO reports (movieName, workingStatus) VALUES(? , ?) ');
			$query -> execute(array( $movieName , 'NO'));
			return $query;
		}	

	}


?>