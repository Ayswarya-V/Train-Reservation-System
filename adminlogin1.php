<?php
include("connection.php");
	$user=$_POST["txtusername"];
	$pass=$_POST["txtpassword"];
	$sq="select * from admin where user='$user'and pass='$pass';";

			$res=mysqli_query($con,$sq);
				if(mysqli_num_rows($res)>0)
				{
					header('location:adminprocess.html');
				}
				else
				{
					echo "invalid user";
					header('location:index.html');
				}
?>