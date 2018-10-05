<?php
	include('conn.php');
	if(isset($_POST['addstate'])){
	    $country= $_POST['country'];
        $state=$_POST['statename'];
		$r=mysqli_query($conn,"INSERT INTO `states`( `name`, `countryid`) VALUES ('$state',$country)");
	
	};

?>



					