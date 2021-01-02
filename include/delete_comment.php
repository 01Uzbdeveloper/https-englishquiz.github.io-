<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbname = "test";
$conn = mysql_connect($hostname, $username, $password);
 
 if (!$conn){
	 die('Could not connect: ' . mysql_error());
 }
 mysql_select_db($dbname, $conn);

$deleteid=$_GET['id'];
mysql_query("DELETE FROM comments WHERE id ='$deleteid']' ");
header("Location:comments.php");
?>
