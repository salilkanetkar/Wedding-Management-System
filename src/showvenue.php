<?php
	$conn = mysql_connect("localhost", "root", "") or die("couldnt connect to db");
	$db = mysql_select_db("wedding_management", $conn) or die("couldnt connect to db");
	$venue=$_REQUEST['Type'];
	$query = "select * from client where Venue='$venue'";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
	echo $row['Client_Id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Contact_No']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Address']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Venue']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Band_DJ']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Photographer']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Decorater']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Caterer']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Plan']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Wedding_Date'];
	echo "<br>";
	}
	mysql_close($conn);
?>