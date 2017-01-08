<?php
	session_start();
	require 'connect.php';
	$loginid = $_SESSION['loginid'];
	$cpassword = $_POST['cpwd'];
	$npasssword = $_POST['npwd'] ;
	$conpassword = $_POST['conpwd'];

	if ($conpassword==$npasssword) 
	{
		$cpassword =  md5($cpassword);
		$npasssword = md5($npasssword);
		$query1 = " select * from student where loginid='$loginid' and password='$cpassword' " ;
		$result = mysqli_query($con,$query1);
		if (mysqli_num_rows($result)>0)
		{
			$query2 = "update student set password='$npasssword' where loginid='$loginid' ";
			$result2 = mysqli_query($con,$query2);
			header("Location:change-password.php?msg=Current password updated");
		}
		else
		{
			header("Location:change-password.php?msg=Current password does not match");
		}
	} 
	else 
	{
		header("Location:change-password.php?msg=Confirm Password not matching");
	}
	
?>