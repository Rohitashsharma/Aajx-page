<?php
	//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","dropdown1");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>
	<div style="height:30px;"></div>
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                  
					<hr>
				<div>
					<form class = "form">
						<label for="fname">First Name </label>
    <input type="text" class="form-control "  id="fname"  placeholder="Enter Fname" required >

 
    <label for="lname">LastName</label>
    <input type="text" class="form-control "   id="lname" placeholder="Enter lastname" required>

   <div class="form-group">
    <label for="lname">Email</label>
    <input type="email" class="form-control"  id="email"  placeholder="Enter lastname">
   </div> 
             <label for="country">Select contery</label>
  	     <select   class="form-control" id="country">         
         <option value="">select contery</option>
         <?php
            $sel=mysqli_query($conn,"select * from  country");
              while($arr=mysqli_fetch_array($sel))
              {
              $country_id=$arr['country_id'];
              $country_name=$arr['country_name'];
            
            echo '<option value="'.$arr['country_id'].','.$arr['country_name'].'">'.$arr['country_name'].'</option>';
            
            }
            ?>
      </select>
    

       <label for="state">Select State</label>
      <select class="form-control"  id="state">

      </select>
          <label for="city" >Select city</label>
         <select class="form-control"  id="city">
		      
      </select>
						<div class = "form-group">
							<button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
	</div>

<script>
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#firstname').val()=="" || $('#lastname').val()==""){
				alert('Please input data first');
			}
			else{
			$fname=$('#fname').val();
			$lname=$('#lname').val();	
            $email=$('#email').val();
            $country=$('#country').val();	
            $state=$('#state').val();	
            $city=$('#city').val();				
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						fname: $fname,
						lname: $lname,
						email: $email,
						country: $country,
						state: $state,
						city: $city,
						add: 1,
					},
					success: function(){
						showUser();
						 $('.form').trigger("reset");
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$ufirstname=$('#ufirstname'+$uid).val();
			$ulastname=$('#ulastname'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						firstname: $ufirstname,
						lastname: $ulastname,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
	
	});
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
</script>
<script>
    // call ajax    
    $(document).ready(function() {
        $('#country').on('change', function() {
            //alert("hii");
            var country_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "drop.php",
                data: 'country_id=' + country_id,
                success: function(data) {
                    $('#state').html(data);
                }
            });
        });
    });
 

</script>
<script>
   // call ajax
    $(document).ready(function() {
        $('#state').on('change', function() {
            //alert("hii");
            var city_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "drop.php",
                data: 'city_id=' + city_id,
                success: function(data) {
                    $('#city').html(data);
                }
            })
        });
    });
	</script>
