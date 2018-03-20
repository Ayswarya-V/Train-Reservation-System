<?php
				
			include("connection.php");
                $sid=$_POST["sid"];
                 $did=$_POST["did"];

$trainid=$_POST["sl"];
$via=$_POST["via"];
$km=$_POST["km"];
$ch=$_POST["cob"];
$arv=$_POST["arv"];
    $dep=$_POST["dep"];

  

                
            $sql="insert into tbl_route(sourcestation,destination,via,km,trainid,arrival,dep)values('$sid','$did','$via',$km,$trainid,'$arv','$dep')";
				echo $sql;
				
		
				mysqli_query($con,$sql);
				echo $sql;


$sq=mysqli_query($con,"select max(routeid) from tbl_route");

while($row=mysqli_fetch_array($sq))
    
{
  
  $routeid=$row[0];
  break;
}


echo $routeid;
					
						$day = $_REQUEST['cob']; 
						$p = implode(',',$day);
						$a=count($day);
						for($i = 0;$i<$a;$i++)
                        {
						$p = $day[$i];
						echo $p."<br/>";
						$ss="insert into tbl_day (routeid,day,trainid) values ($routeid,'$p','$trainid')";
						mysqli_query($con,$ss);

                            echo $ss;
                        }
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
