<?php
	session_start();
	require 'connect.php';
	$loginid = $_SESSION['loginid'];
	$picname = $_FILES['profilepic']['name'];
	$tempname = $_FILES['profilepic']['tmp_name'];

	$ustatus = move_uploaded_file($tempname, "profilepics/".$picname);
	if ($ustatus) 
	{
		$query = "update student set picname='$picname' where loginid='$loginid'" ;
		mysqli_query($con,$query);
		header("Location:upload-picture.php?");
	}
?>