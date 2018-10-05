<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","dropdown1");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>