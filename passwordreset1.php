
<html>
<head>
<title>User Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event Registration Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="cssl/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="jsl/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body  background="images/q1.jpg">
<!-- banner -->
	<div class="center-containerl">
		<div class="mainl">
			<h1 class="w3layouts_headl">Reset Password</h1>
				<div class="w3layouts_main_gridl">
					<form action="passwordreset1.php" method="post" class="w3_form_post">
					
	     
      <?php
	  $s1=$_POST["t1"];
	  $s2=$_POST["t2"];
	  $s3=$_POST["t3"];
	  ?>
                        
                        
                        
                        
                        
                           
                        	<div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Old password </label>
								<input type="text" name="t1" placeholder="Old Password" value="<?php echo $s1; ?>">>
							</span>
						</div>
                        
                        <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>New pasword</label>
							<input type="password" name="t2" placeholder="New Password" value="<?php echo $s2; ?>">>
							</span>
						</div>
                        
                        
							
                       <div class="w3_agileits_main_grid w3l_main_gridl">
							<span class="agileits_gridl">
								<label>Retype password</label>
							<input type="password" name="t3" placeholder="Retype password" value="<?php echo $s3; ?>">>
							</span>
						</div>
                        
						
                       
						
					<div class="w3_main_gridl">
						<div class="w3_main_grid_rightl">
							<center><input type="submit" value="Reset Password">
							<input type="reset" value="Clear"></center>
						</div>
					</div>
                        
                        
          <?php
                        session_start();
	  $x=$_SESSION["user_id"];
	  include("connection.php");
	  $s=mysqli_query($con,"select * from tbl_reguser where user_id='$x'and password='$s1'");
	  $a=0;
	  while($row=mysqli_fetch_array($s))
	  {
	  $a++;
	  }
	  if($a==0)
	  echo "invalid password";
	  else
	  {
	  $s="update tbl_reguser set password='$s2' where user_id='$x'";
	  mysqli_query($s);
	  }
	  echo "changed";
	  
	  ?></form>
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
			<div class="w3layouts_copy_rightl">
				<div class="containerl">
				
				</div>
			</div>
		

<!-- //footer -->
</body>
</html>