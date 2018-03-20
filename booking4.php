<?php
				
			include("connection.php");
session_start();
$tid=$_POST["sss"]; 
$id=$_SESSION['usid'];
$jdate=$_POST["d"];
$s1=$_POST["t1"];
$s2=$_POST["t2"];
$s3=$_POST["t3"];
$s4=$_POST["t4"];

				$sql="insert into tbl_no(trainid,sl,ac1,ac2,ac3,uid,cdate,jdate)values($tid,$s1,$s2,$s3,$s4,'$id',NOW(),'$jdate')";
			
				
		
				mysqli_query($con,$sql);
				echo $sql;
				
		$tot=$s1+$s2+$s3+$s4;



	
					$er="update tbl_train set `sleeper`=`sleeper`-$s1,ac1=ac1-$s2,ac2=ac2-$s3,ac3=ac3-$s4 , `total`=total - $tot where trainid='$tid'";
                    
				$r=mysqli_query($con,$er);
				echo $er;
				
			
				
	?>		
<html>
<head>
</head>
<body>
 <script>
			  window.alert("sucessfully submitted");
 location.href="bookvkv.php"
			  
			  </script>
</body>

</html>
