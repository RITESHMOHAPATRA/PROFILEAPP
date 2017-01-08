<?php
	$name = $_POST['name'];
	$loginid = $_POST['loginid'];
	$password = $_POST['password'];
	$password = md5($password);

	$contactno = $_POST['contactno'];
	$emailid = $_POST['emailid'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
	$courses = implode(",", $course);
	$district = $_POST['district'];

	$picname = $_FILES['profilepic']['name'];
	$tempname = $_FILES['profilepic']['tmp_name'];

	require_once "connect.php";

	$ustatus = move_uploaded_file($tempname,"profilepics/".$picname);
	if($ustatus)
	{
		$query = "insert into student values('$name','$loginid','$password','$contactno','$emailid','$gender','$courses','$district','$picname')";
		$status = mysqli_query($con,$query);
		if($status)
		{
			$msg = "Registration successfull..";
			header("Location:login.php?msg=$msg");
		}
		else
		{
			$msg = "Try Again..";
			header("Location:create-user.php?msg=$msg");
		}
	}
	else
	{
		$msg = "Invalid file..";
		header("Location:create-user.php?msg=$msg");
	}
?>