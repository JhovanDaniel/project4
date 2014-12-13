
<?php


//$con = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "comp2190SA", "2014Sem1");
$con = mysql_connect("localhost", "info2180", "cheapo");

if(isset($_POST['makeuser'])){

if (!$con){
	die("Error with connecting:  " .mysql_error());
}

mysql_query("CREATE DATABASE IF NOT EXISTS usersDB", $con);
//echo "DB created";


mysql_select_db("usersDB", $con);

mysql_query("CREATE TABLE IF NOT EXISTS Users(
		firstName varchar(30),
		lastName varchar(30),
		username varchar(30),
		password varchar (30),
		ID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY (ID)
		)");
//echo("Table Created");


$insert = "INSERT INTO Users (firstName, lastName, username, password)
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[user]', '$_POST[password]')";


mysql_query($insert, $con);

header("Location: LoginPage.php");

//echo("insertion complete");


mysql_close($con);
}


?>
