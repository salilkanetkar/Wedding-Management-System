<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("wedding_management", $conn);
$name=$_REQUEST['Name'];
$type=$_REQUEST['Type'];
$contact=$_REQUEST['Contact_No'];
$email=$_REQUEST['Email_Id'];
$address=$_REQUEST['Address'];
$manager=$_REQUEST['Manager'];
$vendor = "INSERT INTO vendor VALUES('','$name','$type','$contact','$email','$address','$manager')";
$result = mysql_query($vendor);	//order executes
if($result>0){
echo("<br><b>Form submitted successfully");
} else{
echo("<br><b>Fields cannot be left empty");
}
?>