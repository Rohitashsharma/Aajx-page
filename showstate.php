
<?php
	include('conn.php');
	session_start();
	if(isset($_POST['sho'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>countery</th>
			    <th>state</th>
				<th>Action</th>
			</thead>
				<tbody>
                   
					<?php
		
						$quser=mysqli_query($conn,"select * from country join states on country.country_id = states.countryid");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
							         <td><?php echo $urow['country_name']; ?></td>
									<td><?php echo $urow['name']; ?></td>
									
								
									<td><button class="btn btn-success " data-toggle="modal" data-target="#edit<?php echo $urow['state_id']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> 
									| <button class="btn btn-danger deletestate" value="<?php echo $urow['state_id']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('state_popup.php'); ?>
								</td>
					    	</tr>
						<?php
						}
					?>
				</tbody>
			</table>	
		<?php
	}

?>