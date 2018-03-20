<?php
				
			include("connection.php");
                $s1=$_POST["txtst"];
				$s2=$_POST["txtend"];
                $s3=$_POST["txtdis"];




				$sql="insert into tbl_route_main(s_station_name,d_station_name,totalkm)values('$s1','$s2','$s3')";
				echo $sql;
				
		
				mysqli_query($con,$sql);
				echo $sql;
				

				
		
	?>		
<html>
<head>
</head>
<body>
 <script>
			  window.alert("sucessfully submitted");
			  location.href=("admintrainroute.php");
			  </script>
</body>

</html>
