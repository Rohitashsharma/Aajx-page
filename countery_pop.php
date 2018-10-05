<div class="modal fade" id="edit<?php echo $urow['country_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `country` where country_id='".$urow['country_id']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			
		</div>
		<form class="form-inline">
		<div class="modal-body">
			Countery: <input type="text" value="<?php echo $nrow['country_name']; ?>" id="ufirstname<?php echo $urow['country_id']; ?>" class="form-control">
		
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updatecountery btn btn-success" value="<?php echo $urow['country_id']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>