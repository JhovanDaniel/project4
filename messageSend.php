<?php

$con = mysql_connect("localhost", "info2180", "cheapo");

if (!$con){
	die("Error with connecting:  " .mysql_error());
}

	mysql_query("CREATE DATABASE IF NOT EXISTS usersDB", $con);

