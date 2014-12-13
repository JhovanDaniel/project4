<?php

if(isset($_POST['logoutb'])){

		session_start();
		$userName = $_SESSION["username"];

			$con = new mysqli("localhost", "info2180", "cheapo", "usersDB");

			if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	

			session_destroy();
			header("Location: LoginPage.php");

		}
?>
