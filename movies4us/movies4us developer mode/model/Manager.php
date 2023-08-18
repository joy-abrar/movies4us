<?php 
	class Manager 
	{ 
		protected function dbConnect() 
		{ 
			/*
			$host_name = 'db5000872357.hosting-data.io'; 
			$database = 'dbs767129'; 
			$user_name = 'dbu338893'; 
			$password = 'Allahuakbar_11'; 
			$db = null; 
			*/

			$host_name = 'localhost'; 
			$database = 'dbs767129'; 
			$user_name = 'root'; 
			$password = ''; 
			$db = null;
			try 
			{ 
				$db = new PDO("mysql:host=$host_name; dbname=$database", $user_name, $password);
				return $db; 
			} 
			catch (PDOException $e) 
			{ 
				echo "Erreur!: " . $e->getMessage() . "<br/>"; 
				die(); 
			} 
		} 
	}

