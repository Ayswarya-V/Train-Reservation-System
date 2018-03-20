
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
    
    
     function addRow(tableID) {
 
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
			var row = table.insertRow(rowCount);
 
            var cell1 = row.insertCell(0);
            cell1.innerHTML = rowCount;

            var cell2 = row.insertCell(1);
            var element1 = document.createElement("input");
            element1.type = "text";
            element1.setAttribute("name", "km" + rowCount);
            element1.setAttribute("size", "8");
            cell2.appendChild(element1);
 
            var cell3 = row.insertCell(2);
            var element2 = document.createElement("input");
            element2.type = "text";
            element2.setAttribute("name", "station" + rowCount);
            cell3.appendChild(element2);
       }
// End Of JavaScript To add Rows Dynamically 

function value1() {
//        	alert("value");
        	if (document.form1.start.value==""){
        		alert("Starting Station Cannot be left blank");	
        		return false;
        	}
        	else{
    			document.form1.submit();
        	}      		
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
						<li><a href="index.html"><span data-hover="Home">Home</span></a></li>
                        <li><a href="contact.html"><span data-hover="New Train">New Train</span></a></li>
					
						<li  class="active" ><a href="Services.html"><span data-hover="Train Route">Train Route</span></a></li>
                        	<li ><a href="about.html"><span data-hover="Fare">Fare</span></a></li>
						
						
                        
                        
                        <li><a href="contact.html"><span data-hover="View User">View User</span></a></li>
                               
                        <li><a href="contact.html"><span data-hover="View Booking">View Booking</span></a></li>
                               
                        <li><a href="contact.html"><span data-hover="View Cancellation">View Cancellation</span></a></li>
                        
                                                 <li><a href="contact.html"><span data-hover="Log Out">Log Out</span></a></li>

                        
                        
                        
					</ul>
				</nav>
			
			
			
		</nav>
		</div>

   <div class="about-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="index.html">Home</a><i>|</i></li>
				<li>Route Addition</li>
			</ul>
		</div>
	</div>
    
    
    
    
   
    
 <?php
		 $s1=$_POST["hh"];
		
		?>
    							
<?php
include("connection.php");
$s=mysqli_query($con,"select routeid from tbl_route");

while($row=mysqli_fetch_array($s))
		{
			$routeid=$row[0];
		}
			
			?>
    
    <div class="center-containerl">
		<div class="mainl1">
			
				<div class="w3layouts_main_gridl">
					<form name="form1" action="adminsubstation2.php" method="post">
<h1 align="center"> Route Addition </h1>
                        
                       
 
      <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<center><label>Route id </label>
								<input type="text" name="r1" value="<?php echo $s1;?>">
								
								
								

		</center>
							</span>
						</div>
      

<?php
		$s=mysqli_query($con,"select * from tbl_route where routeid='$s1'"); 
		while($row=mysqli_fetch_array($s))
		{
		$sourcestation=$row[1];
		$destination=$row[2];
		$km=$row[4];
		$trainid=$row[5];
		
		
		}
		?>
                       <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Train no </label>
						<input name="t2" type="text" value="<?php echo $trainid;?>">
							</span>
						</div> 
                        
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Starting Station </label>
						<input name="t4" type="text" value="<?php echo $sourcestation;?>"disabled>
							</span>
						</div>
      <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label> Ending Station</label>
					<input name="t5" type="text" value="<?php echo $destination;?>"disabled>
							</span>
						</div>
  <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Total Distance</label>
								<input name="t6" type="text" id="t2"value="<?php echo $km;?>"disabled>
			 
							</span>
						</div>
    <div>
<br />
<hr />
<h4><center>List Of Stations In The Route</center> </h4>
    <br>
<center><table >
	<tr>
    	
    	<th>                      Km From<br> Source </th>
        <th>                       Station Name </th>
    </tr>
	<tr>
    	
    	<td> <input type="text" name="km1" size="8" maxlength="5" />  </td>  
         <td> <select name="c2" id='c2'>
<?php
include("connection.php");
$s=mysqli_query($con,"select * from tbl_train_station");
while($row=mysqli_fetch_array($s))
		{
			echo "<option>$row[1]</option>";
		}
			
			?>
		</select>   </td>  
  </tr>
	

</table></center>
<div class="w3_main_gridl">
						<div class="w3_main_grid_rightl">


<center>
<input type="Submit" value="Save Route"/></center>



                            </div>
				
					
						
</div>
					
						
</div>

    

</form>
            </div>
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