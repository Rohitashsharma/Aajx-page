<br><br>   
 <label for="country">Select contery</label>
  	     <select   class="form-control" id="country">         
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

            	<form>
						<div class = "form-group">
							<label style="margin-left: -13px;">Add State:</label>
							<input type="text"  name="name" id = "state" class = "form-control">
              <span class="help-block" id="error" style="display:none;color:red;">please enter state name</span>
						</div>
						<div class = "form-group">
							<button type = "button" id="addstate" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
			<div class="row">
			<div class="state">
            </div>
           
<script>
$(document).on('change', '#country', function() {
  var co = $('#country').val();
if (co == ''){
  $(state).val('');
}
});
</script>