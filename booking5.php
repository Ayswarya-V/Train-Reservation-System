<html lang="en">
<head>
<title>Online Train Booking </title>
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
    
    <link type="text/css" href="jsDate/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />

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
    
    
    
    </script>
    
    
    
    <script type="text/javascript" src="jsDate/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="jsDate/jquery-ui-1.8.17.custom.min.js"></script>
		<script type="text/javascript" src="jsDate/jquery.effects.core.js"></script>
		<script type="text/javascript" src="jsDate/jquery.effects.bounce.js"></script>
		<script type="text/javascript">   //date Picker to show date of travel for a week starting from the next date of today
		$(function() {
			  $( "#datepicker" ).datepicker({ showAnim: 'bounce',
				 minDate: +1,  });
		});
		</script>
		<style type="text/css">
			body{ font: 62.5% "Arial", sans-serif; margin: 50px;}
		</style>
		
<!-- Date Picker Code End -->		

<!-- To Over Write the CSS Style OF date over Body -->
 <style type="text/css">
	body
	{
	margin-bottom:0;
	margin-left:0;
	margin-right:0;
	margin-top:0;
	}
</style>
    
    
    
    
    
    
</head>	
<body>
    
    
    
    <div class="header">
		
		<div class="w3layouts_header_right">
			<div class="detail-w3l">
			
		</div>

		</div>
		
		<div class="agileits-social top_content">
						
					</div>
      		
			<?php		
      include("connection.php");
                      $s=mysqli_query($con,"select * from tbl_login");
	   while($row=mysqli_fetch_array($s))
  {
	      $uname=$row[2]; 
       }?>
           <h1><a class="navbar-brand1" href="index.html"><span></span><marquee>welcome <?php echo $uname;?></marquee></a></h1>                                  
    

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
						<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
                        	<li ><a href="adminnewtrain.php"><span data-hover="Booking">Booking</span></a></li>
                        
                        
					
						<li><a href="admintrainroute.php"><span data-hover="View PNR Status">View PNR Status</span></a></li>
                        	<li><a href="adminfare.php"><span data-hover="Cancellation">Cancellation</span></a></li>
						
					
                      
                        <li><a href="contact.html"><span data-hover="View Booking">View Booking</span></a></li>
                               
                        <li><a href="contact.html"><span data-hover="View Cancellation">View Cancellation</span></a></li>
                        
                                                 <li><a href="home.html"><span data-hover="Log Out">Log Out</span></a></li>

                        
                        
                        
					</ul>
				</nav>
			
			
			
		</nav>
		</div>
 <div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>BOOKING</li>
			</ul>
		</div>
	</div>

              
        
        <div class="center-containerl">
		<div class="mainl1">
			<h1 class="w3layouts_headl"><font size="5"> </font></h1>
				<div class="w3layouts_main_gridl">
					
    
  <?php
                    
include("connection.php");
$s=mysqli_query($con,"select * from tbl_no");
       
while($row=mysqli_fetch_array($s))
	  {
	  $jdate=$row[8];
	  $sl=$row[2];
	  $ac1=$row[3];
	  $ac2=$row[4];
           $ac3=$row[5];
	
		  }
		  ?>
        <form name="form1" method="POST" action="booking4.php">  
            <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>JOURNEY DATE</label>
				     	<input type="text" name="d"   value="<?php echo $jdate;?>"/> 

							</span>
						</div>
            <DIV class="w3_agileits_main_grid w3l_main_gridl">
                <span class="agileits_gridl">
                <input type="hidden" name="sss" value="<?php echo $tid;?>">
                </span></DIV>
            <DIV class="w3_agileits_main_grid w3l_main_gridl">
    	<span class="agileits_gridl">
            <label> no of Sleeper</label>  <input type="text" name="t1" value="<?php echo $sl;?>">
         </span></DIV>
    <DIV class="w3_agileits_main_grid w3l_main_gridl">
    	<span class="agileits_gridl">  <label> no of AC 1 TIER</label>  <input type="text" name="t2" value="<?php echo $ac1;?>"></span></DIV>
        <DIV class="w3_agileits_main_grid w3l_main_gridl"><span class="agileits_gridl">   <label> no of AC 2 TIER</label>  <input type="text" name="t3" value="<?php echo $ac2;?>"></span></DIV>
                 <DIV class="w3_agileits_main_grid w3l_main_gridl"><span class="agileits_gridl">    <label> no of AC 3 TIER</label>  <input type="text" name="t4" value="<?php echo $ac3;?>"></span></DIV>
        <div class="w3_main_gridl">
            <div class="w3_main_grid_rightl"> <center><input type="submit" name="sub" value="submit"></center>
            </div></div></form>
        
        

            </div></div>
            
 
    
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