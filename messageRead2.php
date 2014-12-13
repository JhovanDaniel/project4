<html>
<head>
	<link rel="stylesheet" type="text/css" rel="stylesheet" type="text/css" href="frames.css">
</head>
<body>


		<div class = "userslist">
			<p> <img src="usersBox.png" height="620" width="320"/></p>

			<div class="usertable">
			<?php


			$con = mysql_connect("localhost", "info2180", "cheapo");

			if (!$con){
				die("Error with connecting:  " .mysql_error());
			}	


			mysql_select_db("usersDB", $con);

			$select = "SELECT * FROM users" ;
			$results = mysql_query($select, $con);

			echo "<table border = 1>
			<tr>
			<th> User ID </th>
			<th> First Name</th>
			<th> Last Name </th>
			<th> Username </th>
			</tr>";

			while($record = mysql_fetch_array($results)){

				echo "<tr>";
				echo "<td>". $record['ID']. "</td>";
				echo "<td>". $record['firstName']. "</td>";
				echo "<td>".$record['lastName']. "</td>";
				echo "<td>". $record['username']. "</td>";
				echo "</tr>";
			}
			echo "</table>";


			?>

		<div class = "messages">
			<p> <img src="messagesBox.png" height="620" width="585"/></p>

			<div class="messagetable">

			</div>
		</div>

		<div class = "mail">
			<p> <img src="mailBox.png" height="620" width="815"/></p>
		</div>

</body>