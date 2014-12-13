
<?php

//$con = new PDO("mysql:dbname=CourseMgmtDB; host=localhost", "comp2190SA", "2014Sem1");
$con = mysql_connect("localhost", "info2180", "cheapo");

session_start();
$userName = $_SESSION["username"];


if(isset($_POST['sendmessage'])){

if (!$con){
	die("Error with connecting:  " .mysql_error());
}

mysql_select_db("usersDB", $con);

$today = date('m.d.y');


$send = "INSERT INTO message (body, subject, user_id, recipient_id)
VALUES ('$_POST[message]', '$_POST[msubject]', '$userName' , '$_POST[recipient]')";

$sendread = "INSERT INTO message_read (message_date, reader_id, message_id)
VALUES ('$today', '$_POST[recipient]', 'unread')";

mysql_query($send, $con);
mysql_query($sendread, $con);

echo "<br> insert complete";
echo $_SESSION["username"];
header("Location: messageRead.php");

mysql_close($con);
}


?>