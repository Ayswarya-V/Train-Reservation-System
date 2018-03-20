
<html>
    <body>



<form role="form" action="" method="POST" enctype="multipart/form-data">
				<div class="box-body">
						<div class="form-group">
						  <table id="example2" class="table table-bordered table-hover">
						    <thead>
							<tr><th>Train No</th><th>Source Station</th><th> Destination</th></tr>
							</thead>
							

<?php
include("connection.php");

							$from=$_POST["from"];
							$to=$_POST["to"];
							$sel="SELECT `trainid`, `sourcestation`, `destination`  FROM `tbl_route` WHERE `sourcestation` = '$from' and `destination` = '$to' ";
							$res=mysqli_query($con,$sel);
echo $sel;
							if(mysqli_num_rows($res)>0){
							while($row=$res->fetch_assoc()){
								
							
									echo "<tr><td>".$row["trainid"]."</td><td>" . $row["sourcestation"]. "</td><td>" .$row["destination"]. "</td></tr>";
								
							} 
							echo "</table>";
							}
							else{
								echo "<tr><td colspan='11' align='center'>Not Available</td></tr>";
							}				

?>
                             
						</div>
				</div>
			 </form>
    </body>
                              </html>