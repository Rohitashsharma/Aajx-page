<?php
	include('conn.php');
	if(isset($_POST['add'])){
		$countery=$_POST['countery'];
		mysqli_query($conn,"insert into `country`(country_name) values ('$countery')");
	}
?>