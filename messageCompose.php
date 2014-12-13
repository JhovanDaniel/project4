<html>
<head>
	<script src="home.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" rel="stylesheet" type="text/css" href="frames.css">
</head>
<body>

			<?php
			session_start();
			 $userName = $_SESSION["username"];

			$con = new mysqli("localhost", "info2180", "cheapo", "usersDB");

			if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	

			if ($result = mysqli_query($con, "SELECT * FROM message_read WHERE reader_id LIKE '$userName'")){
			$row_cnt = $result->num_rows;
			echo ("<p>".$row_cnt. " new messages!");
		}
		else{
			echo "Meh";
		}

		mysqli_close($con);

			?>
		<div class = "userslist">
			<p> <img src="usersBox.png" height="620" width="320"/></p>

			<div class="usertable">
			<?php

			$con = new mysqli("localhost", "info2180", "cheapo", "usersDB");

			if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	


			$select = "SELECT * FROM users" ;
			$results = mysqli_query($con, $select);

			echo "<table border = 1>
			<tr>
			<th> User ID </th>
			<th> First Name</th>
			<th> Last Name </th>
			<th> Username </th>
			</tr>";

			while($record = $results->fetch_array(MYSQLI_ASSOC)){

				echo "<tr>";
				echo "<td>". $record['ID']. "</td>";
				echo "<td>". $record['firstName']. "</td>";
				echo "<td>".$record['lastName']. "</td>";
				echo "<td>". $record['username']. "</td>";
				echo "</tr>";
			}
			echo "</table>";


			?>
		</div>
	</div>

	<div class = "readbox">
			<p> <img src="readMessageBox.png" height="620" width="1349"/></p>

	<form id="compForm" action="sendMessage.php" method="post">
		<p> Compose </p>
		<hr>
		<fieldset>
		Recipient..: <input type="text" name="recipient" size="207"/><br/><br/>
		<hr>
		Subject..: <input type="text" name="msubject" size="207"/><br/><br/>
		<hr>
		Message..: <input type="text" name="message" size="207"/><br/><br/>

		<input name="sendmessage" type="submit" value="Send Message"/>
		</fieldset>
	</form>
	</div>


	<div class = "read">
			<input type="submit" src="messagesButton.png" name ="messagesb" id="messagesb" value="Messages" onclick="window.location='messageRead.php';" />
	</div>

																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					