<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("wedding_management", $conn);
$name=$_REQUEST['Name'];
$salary=$_REQUEST['Salary'];
$dob=$_REQUEST['DOB'];
$designation=$_REQUEST['Designation'];
$contact=$_REQUEST['Contact'];
$venue = "INSERT INTO employee VALUES('','$name','$salary','$dob','$designation','$contact')";
$result = mysql_query($venue);	//order executes
if($result>0){
echo("<br><b>Form submitted successfully");
} else{
echo("<br><b>Fields cannot be left empty");
}
?>