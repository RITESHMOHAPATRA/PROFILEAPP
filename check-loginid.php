<?php
	require("connect.php");
	$loginid = $_POST['loginid'] ;
	$query = "select * from student where loginid='$loginid'";
	$result = mysqli_query($con,$query);
	if (mysqli_num_rows($result)>0) 
	 	echo 0;
	else
		echo 1;
	
?>
