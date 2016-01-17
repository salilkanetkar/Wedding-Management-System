<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("wedding_management", $conn);
$name=$_REQUEST['Name'];
$capacity=$_REQUEST['Capacity'];
$contact=$_REQUEST['Contact'];
$manager=$_REQUEST['Manager'];
$location=$_REQUEST['Location'];
$air=$_REQUEST['Air'];
$venue = "INSERT INTO venue VALUES('','$name','$capacity','$contact','$manager','$location','$air')";
$result = mysql_query($venue);	//order executes
if($result>0){
echo("<br><b>Form submitted successfully");
} else{
echo("<br><b>Fields cannot be left empty");
}
?>