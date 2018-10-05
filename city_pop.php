
<div class="modal fade" id="edit<?php echo $urow['cityid']; ?><?php echo $urow['country_id']; ?><?php echo $urow['state_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `city` where cityid='".$urow['cityid']."'");
		$nrow=mysqli_fetch_array($n);
			$r = $urow['stateid']; 
		
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
		</div>
		<form class="form-inline">
		<div class="modal-body">
 
     <label for="coun">Select country</label>
		 <select   class="form-control" id="countery_pop">         

		 <?php
			
			$sel=mysqli_query($conn,"select * from   country");
									 while($arr=mysqli_fetch_array($sel))
								 {
					$cun = $arr['country_id'];
											$Cname=$arr['country_name'];
											 $ct =  $urow['country_id'];
								
					 ?>
				 <option <?php if($cun== $ct) { echo 'selected';} ?> value="<?php echo $ct;?>"><?php echo $Cname;?></option>  
				 <?php
				 }
				?>
  </select>
		
        <label for="coun">Select STate</label>
  	     <select   class="form-control" id="city-pop">         



       

       	    
						 <?php
			
						$sel=mysqli_query($conn,"select * from   states");
                         while($arr=mysqli_fetch_array($sel))
                       {
						    $state = $arr['state_id'];
														$name=$arr['name'];
											
					   	   		
							   ?>
							 <option <?php if($state == $r) { echo 'selected';}?> value="<?php echo $state;?>"><?php echo $name;?></option>  
							 <?php
						   }
						   
           
			  ?>
           


			Countery: <input type="text" value="<?php echo $nrow['cityname']; ?>" id="ufirstname<?php echo $urow['cityid']; ?>" class="form-control">
		
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> |
             <button type="button" class="updatecity btn btn-success" value="<?php echo $urow['cityid']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>
