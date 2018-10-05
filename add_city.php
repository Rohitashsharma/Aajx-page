<?php
	include('conn.php');
	// if(isset($_POST['add'])){
        $state=$_POST['state'];
        $city=$_POST['city'];
		mysqli_query($conn,"INSERT INTO `city`( `cityname`, `stateid`) VALUES ('$city','$state')
        ");
	// }
?>