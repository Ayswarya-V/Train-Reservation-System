<?php
				
			include("connection.php");
                $stationname=$_POST["stationname"];
                 $adr=$_POST["adrs"];
                $city=$_POST["city"];
                 $pincode=$_POST["pincode"];
				$contact=$_POST["contact"];
$stationcode=$_POST["stationcode"];
				
            $sql="insert into tbl_train_station(stationname,stationcode,adr,city,pincode,contactno)values('$stationname','$stationcode','$adr','$city','$pincode','$contact')";
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
			  location.href="adminstation.php";
			  </script>
</body>

</html>
