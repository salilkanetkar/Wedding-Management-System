<?php
//connecting 
$conn = mysql_connect("localhost", "root", "");
//selecting Database
mysql_select_db("wedding_management", $conn);
$name=$_REQUEST['Name'];
$contact_no=$_REQUEST['Contact_No'];
$address=$_REQUEST['Address'];
$venue=$_REQUEST['Venue'];
$band_dj=$_REQUEST['Band_DJ'];
$photographer=$_REQUEST['Photographer'];
$decorater=$_REQUEST['Decorater'];
$caterer=$_REQUEST['Caterer'];
$plan=$_REQUEST['Plan'];
$wedding_date=$_REQUEST['Wedding_Date'];
//pass a query for inserting element
$client = "INSERT INTO client VALUES('','$name','$contact_no','$address','$venue','$band_dj','$photographer','$decorater','$caterer','$plan','$wedding_date')";
$result = mysql_query($client);	//order executes
if($result>0){
echo("<br><b>Form submitted successfully");
} else{
echo("<br><b>Fields cannot be left empty");
}
?>
