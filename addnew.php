<?php
	//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","dropdown1");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
	if(isset($_POST['add'])){
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$state=$_POST['state'];
		$city=$_POST['city'];
		
		
		
		 $con=explode(",",$country);

//echo $stu[0]; 
 $c = $con[1];
//con=$stu[1];
  $state= $_POST['state'];
$sta=explode(",",$state);

//echo $stu[0]; 
 $s =  $sta[1];

 $city= $_POST['city'];
$cit=explode(",",$city);
 $ci =$cit[1];
		
		
		mysqli_query($conn,"INSERT INTO `student`(`FirstName`, `LastName`, `Email`, `country`, `state`, `city`) VALUES ('$fname','$lname','$email','$c','$s','$ci')");
	}
?>