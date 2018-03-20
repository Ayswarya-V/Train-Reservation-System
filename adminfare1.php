<?php
				
			include("connection.php");
                $type=$_POST["ty"];
				
$s2=$_POST["s1"];
$s3=$_POST["a1"];
$s4=$_POST["a2"];
$s5=$_POST["a3"];


				$sql="insert into tbl_fare(type,s1,a1,a2,a3)values('$type','$s2','$s3','$s4','$s5')";
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
			  
			  </script>
</body>

</html>
