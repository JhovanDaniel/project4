<!DOCTYPE html>
<html>
<head>
	<title> CheapoMail Login</title>
	<link rel="stylesheet" type="text/css" rel="stylesheet" type="text/css" href="home.css">
	<script src="home.js" type="text/javascript"></script>
</head>

<body>

	<div class = "login">
			<img src="loginBox.png" height="750" width="924"/>
			<h1> Login </h1>
			<p> Welcome to CheapoMail! A fast, reliable mail delivery service, with style!<br>
			Please enter your username and password!</p>

			<form id="loginForm" method="post" action="LoginPage.php">
				<fieldset>
					Username........: <input size="35" type="text" name="user"/><br/><br/>
					Password........: <input size="35" type="text" name="password"/><br/><br/>
					<input type="submit" src="loginButton.png" alt="Submit Form" name="submit" id= "loginB"/> 

				</fieldset>
			</form>

			<div class = "logmessage">
			<?php



if(isset($_POST['submit'])){

//$con = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "comp2190SA", "2014Sem1");
$con = mysql_connect("localhost", "info2180", "cheapo");

session_start();

mysql_select_db("usersDB", $con);


$userName = $_POST['user'];
$password = $_POST['password'];

$idcheck = mysql_query("SELECT * FROM users WHERE username LIKE '$userName' AND password LIKE '$password'");

if(mysql_num_rows($idcheck) == 0){
	echo "Password or username is incorrect. Try again";
}

else{
	header("Location: HomePage.html");
}


$_SESSION["username"] = $userName;
$_SESSION["password"] = $password;

echo $_SESSION["username"];
echo $_SESSION["password"];

mysql_close($con);
}

?>


			</div>
	</div>

		<div class = "title">
			<p> <img src="title.png" height="100" width="500"/></p>
		</div>





</body>
</html>