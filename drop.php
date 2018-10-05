<?php
	//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","dropdown1");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
<?php 

if(isset($_POST['country_id']))
{
$country=$_POST['country_id'];

$query=mysqli_query($conn,"select * from states where countryid='$country'");
?>
<option value=''>select the state</option>
<?php
while($arr=mysqli_fetch_array($query))
   {
	   echo '<option value="'.$arr['state_id'].','.$arr['name'].'">'.$arr['name'].'</option>';
   }
}
 
 if(isset($_POST['city_id']))
{
   // get city value
$city=$_POST['city_id'];

$query=mysqli_query($conn,"select * from city where stateid='$city'");
?>
<option value=''>select the city</option>
<?php
while($arr=mysqli_fetch_array($query))
   {
	   echo '<option value="'.$arr['cityid'].','.$arr['cityname'].'">'.$arr['cityname'].'</option>';
   }
   
}
   
   ?>
