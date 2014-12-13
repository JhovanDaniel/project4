<html>
<head>
	<script src="updateMessagebox.js" type="text/javascript"></script>

	<link rel="stylesheet" type="text/css" rel="stylesheet" type="text/css" href="frames.css">
</head>
<body>


	<?php
			session_start();
			 $userName = $_SESSION["username"];

			$con = $con = new mysqli("localhost", "info2180", "cheapo", "usersDB");

			if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	

			if ($result = mysqli_query($con, "SELECT * FROM message_read WHERE reader_id LIKE '$userName' AND message_id LIKE 'unread'")){
			$row_cnt = $result->num_rows;
			echo ("<p>".$row_cnt. " new messages!");
		}
		else{
			echo "Meh";
		}
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






		<div class = "messages">
			<p> <img src="messagesBox.png" height="620" width="585"/></p>

			<div class="messagetable">

				<?php

				$con = mysql_connect("localhost", "info2180", "cheapo");

				if (!$con){
					die("Error with connecting:  " .mysql_error());
				}

				 $userName = $_SESSION["username"];

		mysql_query("CREATE DATABASE IF NOT EXISTS usersDB", $con);



		mysql_select_db("usersDB", $con);

		mysql_query("CREATE TABLE IF NOT EXISTS message(
			body varchar(900),
			subject varchar(30),
			user_id varchar(30),
			recipient_id varchar (30),
			ID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY (ID)
			)");




		mysql_query("CREATE TABLE IF NOT EXISTS Message_read(
			message_date varchar(900),
			reader_id varchar(30),
			message_id varchar (30),
			ID int NOT NULL AUTO_INCREMENT,
			PRIMARY KEY (ID)
			)");




		$select = "SELECT * FROM message WHERE recipient_id LIKE '$userName'" ;
				$results = mysql_query($select, $con);

				echo "<table border = 1>
				<tr>
				<th> Message ID </th>
				<th> Sender </th>
				<th> Subject </th>
				<th> Read </th>
				</tr>";

				while($record = mysql_fetch_array($results)){

					echo "<tr>";
					echo "<td>". $record['ID']. "</td>";
					echo "<td>". $record['user_id']. "</td>";
					echo "<td>". $record['subject']. "</td>";
	 				echo "<td><input type='radio' name='messageradio' class='messageradio' /></td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "";
			
				?>

			</div>
		</div>



		<div class = "mail">
			<p> <img src="mailBox.png" height="620" width="815"/></p>

		</div>

		<div class = "compose">
			<input type="submit" src="composeButton.png" name = "composeb" value = "Compose" id="composeb" onclick="window.location='messageCompose.php';" />
		</div>

			<input id="readb" type="submit" value="Read Message" class="readb"/>


</body>
</html>