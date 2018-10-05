<div class="modal fade" id="edit<?php echo $urow['state_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `states` where state_id='".$urow['state_id']."'");
		$nrow=mysqli_fetch_array($n);
		echo $cid=$nrow['countryid'];
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>        
		<form class="form-inline">
		<div class="modal-body">
        <label for="coun">Select contery</label>
  	     <select   class="form-control" id="coun">         
		    
       <?php

						$sel=mysqli_query($conn,"select * from  country");
                         while($arr=mysqli_fetch_array($sel))
                       {
						    $country_id=$arr['country_id'];
                            $country_name=$arr['country_name'];
						   
						   
							   ?>
							 <option <?php if($country_id==$cid) { echo 'selected';}?> value="<?php echo $country_id;?>"><?php echo $country_name;?></option>  
							 <?php
						   }
						   
             
			  ?>
           
			State: <input type="text" value="<?php echo $nrow['name']; ?>" id="ufirstname<?php echo $urow['state_id']; ?>" class="form-control">
		
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updatestate btn btn-success" value="<?php echo $urow['state_id']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>