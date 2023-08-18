<?php
	require_once('model/userManager.php');
	
	class ControlAdmin
	{
		function loginPage()
		{
			$userManager = new UserManager();
			$userManager -> loginPage();
		}	

		function loginCheck($email, $password)
		{
			$userManager = new UserManager();
			$result = $userManager -> loginCheck($email, $password);

			while ($rows = $result -> fetch()) 
			{
				$id = $rows['id'];
				$mail = $rows['email'];
				$pass = $rows['password'];
			}
			if ($email == $mail && $password == $pass) 
			{
				header('location:view/admin/admin.php?id='.$id.'&password='.$password);	
			}

			else
			{
				echo 'not Matched!';
			}
			
			

		}		
	}

?>