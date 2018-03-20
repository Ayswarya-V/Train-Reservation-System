<?php
				
			include("connection.php");
                $stname=$_POST["c2"];
				$km=$_POST["km1"];
				$routeid=$_POST["r1"];
              $trainid=$_POST["t2"];




				$sql="insert into sub_station(stationname,km,routeid,trainid)values('$stname',$km,$routeid,$trainid)";
				echo $sql;
				
		
				mysqli_query($con,$sql);
				echo $sql;
				

				
		
	?>		


