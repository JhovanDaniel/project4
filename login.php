<html>  
<head>
</head>
<body>
<?php


//$con = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "comp2190SA", "2014Sem1");
$con = mysql_connect("localhost", "info2180", "cheapo");

session_start();

mysql_select_db("usersDB", $con);


$userName = $_POST['user'];
$password = $_POST['password'];

$idcheck = mysql_query("SELECT * FROM users WHERE username LIKE '$userName' AND password LIKE '$password'");

if(mysql_num_rows($idcheck) == 0){
	echo "User does not Exists or sumn";
}

else{
	echo "Boom";
}


$_SESSION["username"] = $userName;
$_SESSION["password"] = $password;

echo $_SESSION["username"];
echo $_SESSION["password"];

mysql_close($con);
?>
</body>
</html>