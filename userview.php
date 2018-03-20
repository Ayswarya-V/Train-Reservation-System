
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Train Booking admin page</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Trucking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/mainStyles.css" />
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
 
<!-- js -->

<!-- //js -->
 
</head>	
<body >
    
    
    
    <div class="header">
		
		<div class="w3layouts_header_right">
			<div class="detail-w3l">
			
		</div>

		</div>
		
		<div class="agileits-social top_content">
						
					</div>
           <h1><a class="navbar-brand1" href="index.html"><span></span><marquee><font size="8">ADMIN PAGE</font></marquee></a></h1>                                  
    

		<div class="clearfix"> </div>
	</div>
    
    
                     
   
    
     <div class="header">
		
		<div class="w3layouts_header_right">
			<div class="detail-w3l">
			
		</div>

		</div>
		
		<div class="agileits-social top_content">
						
					</div>

		<div class="clearfix"> </div>
	</div>
    
    
    
   

	<div class="banner">
		<nav class="navbar navbar-default">
		
			<!-- Collect the nav links, forms, and other content for toggling -->
			
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li ><a href="admin_index.html"><span data-hover="Home">Home</span></a></li>
						<li class="active" ><a href="adminstation.php"><span data-hover="New Station">New Station</span></a></li>
                        	<li ><a href="admintrain.php"><span data-hover="New Train">New Train</span></a></li>
                        
                        
					
						<li><a href="adminroute.php"><span data-hover="Train Route">Train Route</span></a></li>
                        	<li><a href="adminfare.php"><span data-hover="Fare">Fare</span></a></li>
						
					
                        <li><a href="contact.html"><span data-hover="View User">View User</span></a></li>
                               
                        <li><a href="contact.html"><span data-hover="View Booking">View Booking</span></a></li>
                               
                        <li><a href="contact.html"><span data-hover="View Cancellation">View Cancellation</span></a></li>
                        
                                                 <li><a href="index.html"><span data-hover="Log Out">Log Out</span></a></li>

                        
                        
                        
					</ul>
				</nav>
			
			
			
		</nav>
		</div>

   <div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>View User</li>
			</ul>
		</div>
	</div>




  
    
							 <?php

include("connection.php");
	$sel="SELECT `user_id`,`name`, `sex`,`dob`,`phone`,`email`,`addr`,`city`,`state`,`country` FROM `tbl_reguser`";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='2' frame=border cellpadding=8 bgcolor=FFF292 bordercolor=green cellspacing=5 width=80% height=80% align='center' style=margin:80px;>
		
		<tr><th>USERID</th><th>NAME</th><th>GENDER</th><th>DOB</th><th>PHONE NO</th><th>EMAIL</th><th>ADDRESS</th><th>CITY</th><th>STATE</th><th>COUNTRY</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $user_id=$row[0];
			$state=$row['state'];
			$country=$row['country'];
	   echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[8]</td><td>$row[9]</td><td>" .$row['state']. "</td><td>" .$row['country']. "</td></tr>";	  
	    }
	   echo"</table>"
	   ?>

		
    
    
													


</body>
</html>