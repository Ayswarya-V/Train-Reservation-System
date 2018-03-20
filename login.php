<?php
    session_start();
	include("connection.php");
	$email=$_POST["email"];
	$pass=$_POST["password"];
	$sq="select * from tbl_login where email='$email'and pass='$pass';";
	echo $sq;
	$result=mysqli_query($con,$sq);
     $num_row=mysqli_num_rows($result);
if($num_row==1)
{
	$row=mysqli_fetch_assoc($result);
    $uid=$row["email"];
    $_SESSION['mail']=$uid;
	$_SESSION['email']=$row['email'];
	if($row['author']=='admin')
	{
		$_SESSION['email']=$_POST["email"];
		header('location:admin_index.html');
		exit();
	}
	else if($row['author']=='user')
	{
		$_SESSION['email']=$_POST["email"];
		 $_SESSION['usid']=$uid;
		header('location:user_index.php');
		exit();
	}
}
	
?>