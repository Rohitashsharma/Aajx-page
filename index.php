<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="bootstrap-3.3.7-dist/jquery2.js"></script>
<!-- Latest compiled JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
     <script>

	 $(document).ready(function(){
	
	$('#page1').on('click', function() {
		
        $(".container").load("contery.php");
		setTimeout(function() {
			
			showcountery();
			
		}, 1000);
 
    });
	$('#page2').on('click', function() { 

		$(".container").load("state.php");
		setTimeout(function() {
			
			showstate();
			
		}, 1000);
 
    
		
    });
	$('#page3').on('click', function() { 

       $(".container").load("city.php");
			setTimeout(function() {
			
				showcity();
			
		}, 1000);
 
    });
	$('#page4').on('click', function() { 

       $(".container").load("form.php");
    });
});
</script>
<style>
.navbar-fixed-left{width:140px;position:fixed;border-radius:0;height:100%}.navbar-fixed-left .navbar-nav > li{float:none;width:139px}.navbar-fixed-left + .container{padding-left:160px}.navbar-fixed-left .navbar-nav > li > .dropdown-menu{margin-top:-50px;margin-left:140px}
</style>
<script>
	 //Showing our Table
	 function showcountery(){
		$.ajax({
			url: 'show_countery.php',
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
$(document).ready(function(){
    showcountery();
		//Add New
		$(document).on('click', '#addCoun', function(){
           
			$countery=$('#countery').val();

			if($countery=='')
			{
        
				$("#warning").css('display','block');
			}
		else
			{
			$("#warning").css('display','none');
	$.ajax({
					type: "POST",
					url: "add_countery.php",
					data: {
						countery: $countery,
						add: 1,
					},
					success: function(){
						
			       showcountery();
				   $(function(){
					$('#countery').val('');
                    });
					}
				});

		}
			
			
		});
        	
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "del_countery.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
                        showcountery();
					}
				});
		});
//Update
		$(document).on('click', '.updatecountery', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$countery=$('#ufirstname'+$uid).val();
		
				$.ajax({
					type: "POST",
					url: "update_countery.php",
					data: {
						id: $uid,
						countery: $countery,
						edit: 1,
					},
					success: function(){
                         showcountery();
					}
				});
		});

});
</script>
<script>
	function showstate(){
		$.ajax({
			url: 'showstate.php',
			type: 'POST',
			async: false,
			data:{
				sho: 1,
			},
			success: function(response){
				$('.state').html(response);
			}
		});
	}
$(document).ready(function(){
 $(document).on('click', '#addstate', function() {

	        var country = $('#country').val();
			var statename = $('#state').val();
		
			if(statename=='')
			{
				$("#error").css('display','block');
         // alert("pls enter value");
			}
			else
			{	
				$("#error").css('display','none	');
				$.ajax({
	            type: "POST",
				cache: false,
	            url: "addstate.php",
	            data: {
					addstate: 1,
	                country: country,
	                statename: statename,
					
	            },
				success: function(){
					$(function(){
					$('#state').val('');
                    });
					showstate();
	            }
	        });
			}
            
	        
	//Update
$(document).on('click', '.updatestate', function(){
			$uid=$(this).val();
		
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$state=$('#ufirstname'+$uid).val();
             $cid = $('#coun').val();
	

		
				$.ajax({
					type: "POST",
					
					url: "update_state.php",
					data: {
						id: $uid,
						state: $state,
		             	cid: $cid,
						update: 1,
					},
					success: function(){
						showstate();
					}
				});
		});
		//Delete
		$(document).on('click', '.deletestate', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete_state.php",
					data: {
						id: $id,
						del: 1,	
					},
					success: function(){
						showstate();
					}
				});
		});
		//show state
}); 
}); 	
</script>
<script>

			//show city
			function showcity(){
		$.ajax({
			url: 'show_city.php',
			type: 'POST',
			async: false,
			data:{
				sh: 1,
			},
			success: function(response){
				$('.City').html(response);
			}
		});
	}

$(document).ready(function(){
	//addd city

 $(document).on('click', '#addcity', function() {
	 	          showcity();
	        var state = $('#st').val();
			var city = $('#city').val();
			if(city=='')
			{
        
				$("#cityerr").css('display','block');
			}
		else
		{
			$("#cityerr").css('display','none');

	        $.ajax({
	            type: "POST",
	            url: "add_	city.php",
	            data: {
	                state: state,
	                city: city,
               },
				success: function(){
					showcity();
					$(function(){
					$('#city').val('');
                    });

	            }
			});
				}
		});

		$(document).on('click', '.deletecity', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete_city.php",
					data: {
						id: $id,
						del: 1,	
					},
					success: function(){
						showcity();
					}
				});
		    });
				//Update
           $(document).on('click', '.updatecity', function(){
			$uid=$(this).val();
		
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$state=$('#ufirstname'+$uid).val();
             $cid = $('#city-pop').val();
			 $counte = $('#countery_pop').val();
			
			 				$.ajax({
					type: "POST",
					url: "update_city.php",
					data: {
						id: $uid,
						city	: $state,
		             	cid: $cid,
						 countery: $counte,
						update: 1,
					},
					success: function(){
						showcity();
					}
				});
		});

}); 
</script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-left">
  <a class="navbar-brand" href="#"></a>
  <ul class="nav navbar-nav">
   <li style="cursor: pointer;"><a id="page1">country</a></li>
   <li style="cursor: pointer;"><a id="page2">state</a></li>
   <li style="cursor: pointer;"><a id="page3">city</a></li>
   <li style="cursor: pointer;"><a id="page4">student</a></li>
  </ul>
</div>
<div class="container">
</div>

<script src="js/jquery.validate.min.js"></script>
<script src="js/register.js"></script>
</body>
</html>