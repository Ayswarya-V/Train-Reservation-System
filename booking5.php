<?php
include("connection.php");
session_start();

if(isset($_POST['submit']))
    

{
	//CHECK VALUE EXIST
	if(isset($_POST["name"]["s1"]))
	{
		//CHECK ARRAY EXIST
		if(count($_POST["name"]["s1"])>0)
		{
			//LOOP
			foreach($_POST["name"]["s1"] as $key=>$res)
			{
				$name=$res;
				$age=(isset($_POST["age"]["s1"][$key]))?$_POST["age"]["s1"][$key]:0;
				$sex=(isset($_POST["sex"]["s1"][$key]))?$_POST["sex"]["s1"][$key]:0;
				
				$insert_query = "INSERT INTO tbl_passenger(name,age,sex,type) VALUES ('".$name."','".$age."','".$sex."','1');";
				$r=mysqli_query($con,$insert_query);
			}
		}
	}
	if(isset($_POST["name"]["s2"]))
	{
		if(count($_POST["name"]["s2"])>0)
		{
			//LOOP
			foreach($_POST["name"]["s2"] as $key=>$res)
			{
				$name=$res;
				$age=(isset($_POST["age"]["s2"][$key]))?$_POST["age"]["s2"][$key]:0;
				$sex=(isset($_POST["sex"]["s2"][$key]))?$_POST["sex"]["s2"][$key]:0;
				
				$insert_query = "INSERT INTO tbl_passenger(name,age,sex,type) VALUES ('".$name."','".$age."','".$sex."','2');";
				$r=mysqli_query($con,$insert_query);
			}
		}
	}
	if(isset($_POST["name"]["s3"]))
	{
		if(count($_POST["name"]["s3"])>0)
		{
			//LOOP
			foreach($_POST["name"]["s3"] as $key=>$res)
			{
				$name=$res;
				$age=(isset($_POST["age"]["s3"][$key]))?$_POST["age"]["s3"][$key]:0;
				$sex=(isset($_POST["sex"]["s3"][$key]))?$_POST["sex"]["s3"][$key]:0;
				
				$insert_query = "INSERT INTO tbl_passenger(name,age,sex,type) VALUES ('".$name."','".$age."','".$sex."','3');";
				$r=mysqli_query($con,$insert_query);
			}
		}
	}
	if(isset($_POST["name"]["s4"]))
	{
		if(count($_POST["name"]["s4"])>0)
		{
			//LOOP
			foreach($_POST["name"]["s4"] as $key=>$res)
			{
				$name=$res;
				$age=(isset($_POST["age"]["s4"][$key]))?$_POST["age"]["s4"][$key]:0;
				$sex=(isset($_POST["sex"]["s4"][$key]))?$_POST["sex"]["s4"][$key]:0;
				
				$insert_query = "INSERT INTO tbl_passenger(name,age,sex,type) VALUES ('".$name."','".$age."','".$sex."','4');";
				$r=mysqli_query($con,$insert_query);
			}
		}
	}
	 


}
