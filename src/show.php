<?php
	$conn = mysql_connect("localhost", "root", "") or die("couldnt connect to db");
	$db = mysql_select_db("wedding_management", $conn) or die("couldnt connect to db");
	$type=$_REQUEST['Type'];
	$query = "select * from vendor where Type='$type'";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
	echo $row['Vendor_Id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Type']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Contact_No']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Email_ID']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Address']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['Manager'];
	echo "<br>";
	}
	mysql_close($conn);
?>