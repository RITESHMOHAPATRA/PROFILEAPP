<?php
	session_start();
	require "connect.php";
	$loginid = $_SESSION['loginid'];

	$name = $_POST['name'];
	$contactno = $_POST['contactno'];
	$emailid = $_POST['emailid'];
	$gender = $_POST['gender'];
	$course = $_POST['course'];
	$courses = implode(",", $course);
	$district = $_POST['district'];

	$query = "update student set name='$name',contactno='$contactno',emailid='$emailid',gender='$gender',courses='$courses',district='$district' where loginid='$loginid'";
	mysqli_query($con,$query);
	header("Location:home.php");	
?>