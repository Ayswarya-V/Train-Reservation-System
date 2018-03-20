
<?php
 	$db=mysqli_connect("localhost","root","","train");
						
  $query = "SELECT trainid,train_no,trainname FROM tbl_train";
     
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $categories[] = array("id" => $row['trainid'], "val" => $row['trainname']);
  }

  $query =  "SELECT trainid,train_no FROM tbl_train";
  $result = $db->query($query);

  while($row = $result->fetch_assoc()){
    $subcats[$row['trainid']][] = array("id" => $row['trainid'], "val" => $row['train_no']);
  }

  $jsonCats = json_encode($categories);
  $jsonSubCats = json_encode($subcats);


?><!DOCTYPE html>
<html lang="en">
<head>
    <script type='text/javascript'>
      <?php
        echo "var categories = $jsonCats; \n";
        echo "var subcats = $jsonSubCats; \n";
      ?>
      function loadCategories(){
        var select = document.getElementById("categoriesSelect");
        select.onchange = updateSubCats;
        for(var i = 0; i < categories.length; i++){
          select.options[i] = new Option(categories[i].val,categories[i].id);          
        }
      }
      function updateSubCats(){
        var catSelect = this;
        var catid = this.value;
        var subcatSelect = document.getElementById("subcatsSelect");
        subcatSelect.options.length = 0; //delete all options if any present
        for(var i = 0; i < subcats[catid].length; i++){
          subcatSelect.options[i] = new Option(subcats[catid][i].val,subcats[catid][i].id);
        }
      }
    </script>
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
    
    
    
    
    
    
    
    
    
    
    
    
</script>
    
    
    
    
 

    
    
    
    
</head>	
<body  onload='loadCategories()'>
    
    
    
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
						<li  ><a href="adminstation.php"><span data-hover="New Station">New Station</span></a></li>
                        	<li ><a href="admintrain.php"><span data-hover="New Train">New Train</span></a></li>
                        
                        
					
						<li class="active"><a href="adminroute.php"><span data-hover="Train Route">Train Route</span></a></li>
                        	<li><a href="adminfare.php"><span data-hover="Fare">Fare</span></a></li>
						
					
                        <li><a href="userview.php"><span data-hover="View User">View User</span></a></li>
                               
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
				<li>Add ROUTE</li>
			</ul>
		</div>
	</div>


    
    <div class="center-containerl">
		<div class="mainl1">
			<h1 class="w3layouts_headl"><font size="5"> ADD ROUTE</font></h1>
				<div class="w3layouts_main_gridl">
					<form action="adminroute1.php" method="post" class="w3_form_post">
					
     <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
                        <label>Train Name</label>
                              
                           <select  name="s2" id=  'categoriesSelect'>
    </select><br>
                                </span>
						</div>
                   <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">    
<label>Train Number</label>
                                
    <select name="sl" id='subcatsSelect' >
    </select>
                        </span>
						</div>   
 
 
 <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> Source Station</label>
					<select name="sid" id='c1'>
<?php
include("connection.php");
$s=mysqli_query($con,"select * from tbl_train_station");
       
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[1]</option>" ;
		}
			
			?>
		</select>
							</span>
						</div>
                                  
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> Destination Station</label>
						<select name="did" id="c2">
<?php
include("connection.php");
$s=mysqli_query($con,"select * from tbl_train_station");
       
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[1]</option>" ;
		}
			
			?>
		</select>
							</span>
						</div>
                       
                        
                        
     
                                  
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> Via</label>
					<select name="via" id="c3">
<?php
include("connection.php");
$s=mysqli_query($con,"select * from tbl_train_station");
       
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[1]</option>" ;
		}
			
			?>
		</select>
							</span>
						</div>
                                   
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> KM</label>
					<input name="km" type="text" id="t2">
							</span>
						</div>
                                    
                       
                        
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> Arrival Time</label>
					<input name="arv" type="text"  placeholder="">
							</span>
						</div>
                                
                            
                         
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Depature Time</label>
					<input name="dep" type="text"  placeholder="">
							</span>
						</div>
                      
                        <div class="div1">
		<h3>DEPATURE ON</h3>
			<center><table cellspacing="5" cellpadding="5" style="color:black;
		padding:20px 0px 10px 40px;">
				<tr>
					<td><input type="checkbox" name="cob[]" value="mon"/>Monday</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="tue"/>Tuesday</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="wed"/>Wednesday</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="cob[]" value="thu"/>Thursday</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="fri"/>Friday</td>
				</tr>
				<tr>
					<td><input type="checkbox"  name="cob[]" value="sat"/>Saturday</td>
				</tr>
                <tr>
					<td><input type="checkbox"  name="cob[]" value="sat"/>Sunday</td>
				</tr>
			
			</table></center>
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