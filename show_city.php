<?php
	include('conn.php');
	if(isset($_POST['sh'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
			    <th>country</th>
				<th>state</th>
				<th>City</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"SELECT country.*,states.*,city.* FROM country JOIN states on country.country_id = states.countryid JOIN city on city.stateid = states.state_id");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
								<td><?php echo $urow['country_name']; ?></td>
								   <td><?php echo $urow['name']; ?></td>
									<td><?php echo $urow['cityname']; ?></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['cityid']; ?><?php echo $urow['country_id']; ?><?php echo $urow['state_id']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> |
                                     <button class="btn btn-danger deletecity" value="<?php echo $urow['cityid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('city_pop.php'); ?>
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