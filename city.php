<br> 
 <label for="country">Select contery</label>
  	     <select   class="form-control" id="count">         
         <option value="">select contery</option>
         <?php
         include('conn.php');
            $sel=mysqli_query($conn,"select * from  country");
              while($arr=mysqli_fetch_array($sel))
              {
              $country_id=$arr['country_id'];
              $country_name=$arr['country_name'];
            echo '<option value="'.$arr['country_id'].'">'.$arr['country_name'].'</option>';
            
            }
            ?>
      </select>
      <label for="state">Select State</label>
      <select class="form-control"  id="st">

      </select>
           	<form>
				<div class = "form-group">
      				<label style="margin-left: -13px;">Add City:</label>
							<input type  = "text" id = "city" class = "form-control cityre">
                            <p id="cityerr" style="color:red;display:none;">Please input value fill</p>
						</div>
						<div class = "form-group">
							<button type = "button" id="addcity" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
			<div class="row">
			<div class="City">
            </div>
            <script>
    // call ajax    
    $(document).ready(function() {
        $('#count').on('change', function() {
        
           var country_id = $(this).val();
            $.ajax({
                type: "POST",
                url: "drop.php",	
                data: 'country_id=' + country_id,
                success: function(data) {
                    $('#st').html(data);
                }
            });
        });
    });
 </script>
 <script>
$(document).on('change', '#st', function() {
 var st = $('#st').val(); 
 
     
if (st == ''){
    $('cityre').val('')
  
 }
});
</script>