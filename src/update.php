<?php
$conn = mysql_connect("localhost", "root", "") or die("couldnt connect to db");
$db = mysql_select_db("wedding_management", $conn) or die("couldnt connect to db");
$name=$_REQUEST['Name'];
$address=$_REQUEST['Address'];
$query = "UPDATE vendor set Address='$address' where Name='$name'";
$result = mysql_query($query);
if($result>0){
echo("<br><b>Updation successfully");
} else{
echo("<br><b>Fields cannot be left empty");
}
mysql_close($conn);
?>