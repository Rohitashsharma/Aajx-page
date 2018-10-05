    <?php
        include('conn.php');
        if(isset($_POST['update'])){
           echo $id=$_POST['id'];
           echo  $state=$_POST['state'];
           echo $cid=$_POST['cid'];
            mysqli_query($conn,"update `states` set name='$state',`countryid`= '$cid' where state_id='$id'");
        }
    ?>
