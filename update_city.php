<?php
        include('conn.php');
        if(isset($_POST['update'])){
            $id=$_POST['id'];
            $city=$_POST['city'];
            $cid=$_POST['cid'];
            
            
            mysqli_query($conn,"UPDATE `city` SET `cityname`=' $city',`stateid`='$cid' WHERE `cityid`='$id'");
          
        }
    ?>
