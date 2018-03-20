<?php
				
			include("connection.php");
                $trainname=$_POST["trainname"];
 $trainno=$_POST["trainno"];
                 $traintype=$_POST["traintype"];
  $sleeper=$_POST["sl"];
 $ac1=$_POST["ac1"];
$ac2=$_POST["ac2"];
$ac3=$_POST["ac3"];
$total=$_POST["total"];

                
            $sql="insert into tbl_train(trainname,type,train_no,sleeper,ac1,ac2,ac3,total)values('$trainname','$traintype',$trainno,$sleeper,$ac1,$ac2,$ac3,$total)";
				echo $sql;
				
		
				mysqli_query($con,$sql);
				echo $sql;
				
		
	?>		<html>
<head>
</head>
<body>
 <script>
			  window.alert("sucessfully submitted");
			  location.href="admintrain.php";
			  </script>
</body>

</html>

