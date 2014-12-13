<?php
 	
	session_start();
	$userName = $_SESSION["username"];


	$con = new mysqli("localhost", "info2180", "cheapo", "usersDB");

	if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	

	$selectm = $_GET['select'];

	if ($selectm < 1){
		$realSelect = 0;
	}
	else{
	$realSelect = $selectm - 1;
	}


	$sql = mysqli_query($con, "SELECT body FROM message WHERE recipient_id LIKE '$userName' LIMIT 1 OFFSET $realSelect");
	

	while($result = $sql->fetch_assoc()){

	echo $result['body'];
	}

	
		mysqli_close($con);

		
?>