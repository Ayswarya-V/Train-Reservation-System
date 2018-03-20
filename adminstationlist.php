
<!DOCTYPE html>
<html lang="en">
<head>
<title>Online Train Booking</title>
<!-- custom-theme -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/mainStyles.css" />
		<link rel='stylesheet' href='css/dscountdown.css' type='text/css' media='all' />
        

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 

</head>	
<body>
<!-- banner -->
<div class="header">
		
		<div class="w3layouts_header_right">
			<div class="detail-w3l">
			<ul>
				<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i> + 1 804-043-3496</li>
				
			</ul>
		</div>

		</div>
		<div class="w3layouts_header_left">
			<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					
				</ul>

		</div>
		<div class="agileits-social top_content">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>

		<div class="clearfix"> </div>
	</div>

	<div class="banner">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html"><span></span>TRAIN BOOKING</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav class="link-effect-2" id="link-effect-2">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
					
					
                        	<li><a href="about.html"><span data-hover="PNR Status">PNR Status</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Train Details">Train Details</span> <b class="caret"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="icons.html">Train Shdedules</a></li>
								<li><a href="typography.html">Train Between Station</a></li>
                                <li><a href="typography.html">Fare List</a></li>
                                 <li><a href="typography.html">Station List</a></li>
							</ul>
						</li>
                        <li><a href="userreg.php"><span data-hover="User Registration">User Registration</span></a></li>
						<li><a href="contact.html"><span data-hover="Contact Us">Contact Us</span></a></li>
					</ul>
				</nav>
			
			</div>
			
		</nav>
		</div>


<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
														<div class="modal-dialog">
														<!-- Modal content-->
															<div class="modal-content">
																<div class="modal-header">
																	<button type="button" class="close" data-dismiss="modal">&times;</button>
																	
																	<div class="signin-form profile">
																	<h3 class="agileinfo_sign">Sign In</h3>	
																			<div class="login-form">
																				<form action="login.php" method="post">
																					<input type="email" name="email" placeholder="E-mail" required="">
																					<input type="password" name="password" placeholder="Password" required="">
																					<div class="tp">
																						<input type="submit" value="Sign In">
																					</div>
																				</form>
																			</div>
																			<div class="login-social-grids">
																				<ul>
																					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
																					<li><a href="#"><i class="fa fa-rss"></i></a></li>
																				</ul>
																			</div>
										
																		</div>
																</div>
															</div>
														</div>
													</div>
													<!-- //Modal1 -->	
    
     <div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Station List</li>
			</ul>
		</div>
	</div>



  
    
							 <?php

include("connection.php");
	$sel="SELECT `stationid`,`stationname`, `adr`,`city`,`pincode`,`contactno` FROM `tbl_train_station`";
	$res=mysqli_query($con,$sel);
	 echo "<table border ='2' frame=border cellpadding=8 bgcolor=FFF292 bordercolor=green cellspacing=5 width=80% height=80% align='center' style=margin:80px;>
		
		<tr><th>stationid</th><th>Stationname</th><th>Address</th><th>City/District</th><th>Pincode</th><th>Contact No</th></tr>";
	   while($row=mysqli_fetch_array($res))
	   {
		    $stationid=$row[0];
	   echo"<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";	  
	    }
	   echo"</table>"
	   ?>

		
    
    
													


</body>
</html>