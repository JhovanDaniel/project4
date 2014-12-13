<?php
	
	session_start();

	$_SESSION['username'] = $_POST['user'];
	echo($_SESSION['username']);

?>