<html>
<head>
</head>
<body>
<?php


//$con = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "comp2190SA", "2014Sem1");
$con = mysql_connect("localhost", "info2180", "cheapo");


if (!$con){
	die("Error with connecting:  " .mysql_error());
}

mysql_query("CREATE DATABASE IF NOT EXISTS CourseMgmtDB", $con)
	echo "DB created";


mysql_select_db("CourseMgmtDB", $con);

	$sql = "CREATE TABLE Courses(
		Discipline varchar(4),
		Code varchar(4),
		Title varchar(30),
		Level varchar (10),
		Credits int(1),
		Semester varchar(10),
		ID int NOT NULL AUTO_INCREMENT,
		PRIMARY KEY (ID)
		)";

mysql_query($sql, $con);
echo("Table Created");



mysql_close($con);

?>
</body>
</html>