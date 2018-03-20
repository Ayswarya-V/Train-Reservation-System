
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
    <link href="cssl/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="jsl/jquery-2.1.4.min.js"></script>

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
 
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
    
    
    

function getValues(val){

var numVal1=parseInt(document.getElementById("one").value);
var numVal2=parseInt(document.getElementById("two").value);
var numVal3=parseInt(document.getElementById("three").value);
    var numVal4=parseInt(document.getElementById("four").value);
   

var totalValue = numVal1 + numVal2 + numVal3 + numVal4;

document.getElementById("main").value = totalValue;
}
</script>
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
						<li ><a href="adminstation.php"><span data-hover="New Station">New Station</span></a></li>
                        	<li class="active"  ><a href="admintrain.php"><span data-hover="New Train">New Train</span></a></li>
                        
                        
					
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
				<li>Add New Train</li>
			</ul>
		</div>
	</div>


    
    <div class="center-containerl">
		<div class="mainl1">
			<h1 class="w3layouts_headl"><font size="5"> ADD  NEW TRAIN</font></h1>
				<div class="w3layouts_main_gridl">
					<form action="admintrain1.php" method="post" class="w3_form_post">
					
    
    

                            
                         
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> TRAIN NAME</label>
					<input name="trainname" type="text" id="t2">
							</span>
						</div>
                                 
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> TRAIN NO</label>
					<input name="trainno" type="text" id="t3">
							</span>
						</div>
                               
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> TRAIN Type</label>
					<input name="traintype" type="text" id="t2">
							</span>
						</div>
                                 <center>  <label>no  of seat in each coach</label></center>
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Sleeper class</label>
					<input name="sl" type="text"  id="one" value="0" onkeyup="getValues(1)">
							</span>
						</div>
                         <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Ac First Class  </label>
					<input name="ac1" type="text"  id="two" value="0" onkeyup="getValues(2)">
							</span>
						</div>
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Ac 2 tier </label>
					<input name="ac2" type="text"  id="three" value="0" onkeyup="getValues(3)">
							</span>
						</div>
                         <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Ac 3 tier </label>
					<input name="ac3" type="text"  id="four" value="0" onkeyup="getValues(4)">
							</span>
						</div>
                         <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Total no of Seats </label>
					<input name="total" type="text"  id="main">
							</span>
						</div>
                        
                       
					<div class="w3_main_gridl">
						<div class="w3_main_grid_rightl">
							<center><input type="submit" value="Save">
				</center>
						</div>
					</div>
					
						
				</form>
            </div>
        </div>
    </div>
		<!-- Calendar -->
			<link rel="stylesheet" href="cssl/jquery-ui.css" />
				<script src="jsl/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->
			<div class="w3layouts_copy_right">
				<div class="container">
				
				</div>
			</div>
		
    
    
    
    
    
    
    
    
    
    
    
    

<script src="js/mainScript.js"></script>
<script src="js/rgbSlide.min.js"></script>


<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--team-->
<!-- //here ends scrolling icon -->
 
				<script type="text/javascript">
					$(document).ready(function() {
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/								
					$().UItoTop({ easingType: 'easeOutQuart' });
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				<script src="js/SmoothScroll.min.js"></script>
 <!-- start-smoth-scrolling -->
				<script type="text/javascript" src="js/move-top.js"></script>
				<script type="text/javascript" src="js/easing.js"></script>
				
		<!-- start-smoth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>