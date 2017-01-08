<?php
	session_start();
	if(!isset($_SESSION['loginid']))
	{
		$msg = "login again";
		header("Location:login.php?msg=$msg");
	}
	$loginid = $_SESSION["loginid"];
	
	echo "<h1>WELCOME TO HOME</h1>";
	
?>
<br>
<a href="view-profile.php">View Profile</a><br>
<a href="edit-profile.php">Edit Profile</a><br>
<a href="change-password.php">Change Password</a><br>
<a href="upload-picture.php">Upload Picture</a><br>
<a href="logout.php">Logout</a><br>