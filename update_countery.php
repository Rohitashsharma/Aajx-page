<?php
	include('conn.php');
	if(isset($_POST['edit'])){
		$id=$_POST['id'];
		$countery=$_POST['countery'];

		
		mysqli_query($conn,"update `country` set country_name='$countery' where country_id='$id'");
	}
?>