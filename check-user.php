<?php
	session_start();
	$loginid=$_POST["loginid"];
	$password=$_POST['password'];
	$password = md5($password);
	require_once("connect.php");

	$query = "select * from student where loginid='$loginid' and password='$password'";
	$result = mysqli_query($con,$query);
	if (mysqli_num_rows($result)>0) 
	{
	 	$_SESSION["loginid"] = $loginid ;
	 	header("Location:home.php");
	} 
	else 
	{
	 	header("Location:login.php?msg=Invalid loginid/password");
	}
	  
?>