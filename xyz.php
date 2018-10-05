<?php
				 include('conn.php');
				   
				  $r= mysqli_query($conn,"select * from  country where country_id=282");
			       while($arr=mysqli_fetch_array($r)){
                    echo '<option value='.$arr['country_id'].'>'.$arr['country_name'].'</option>';
                   }
                        
                        ?>