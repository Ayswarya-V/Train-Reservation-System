<?php
				
			include("connection.php");
             
				$name=$_POST["txtfname"];
				$sex=$_POST["radiogen"];
                $dob=$_POST["dob"];

				$phone=$_POST["txtno"];
				$email=$_POST["txtmail"];
				$credit=$_POST["txtcdno"];
				$password=$_POST["txtpwd"];
				$addr=$_POST["txtaddr"];
				$city=$_POST["txtcity"];
				$state=$_POST["txtstate"];
				$pincode=$_POST["txtpin"];
				
				$country=$_POST["txtcon"];
				
				
			
				$type="user";
				$sql="insert into tbl_reguser(name,sex,dob,phone,email,credit,password,addr,city,state,pincode,country)values('$name','$sex','$dob','$phone','$email','$credit','$password','$addr','$city','$state','$pincode','$country')";
				echo $sql;
				$sql2="insert into tbl_login (email,uname,pass,author)values('$email','$name','$password','$type')";
				mysqli_query($con,$sql2);
				echo $sql2;	
				mysqli_query($con,$sql);
				echo $sql;
				
		
	?>		
<html>
<head>
</head>
<body>
 <script>
			  window.alert("sucessfully submitted");
			  location.href="userreg.php";
			  </script>
</body>

</html>
