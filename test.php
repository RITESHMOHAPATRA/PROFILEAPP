<?php
	require("connect.php");
	$query = "select * from student where loginid='9'";
	$result = mysqli_query($con,$query);
	print_r($result);
	if (mysqli_num_rows($result)>0) 
	{
	 	echo 0;
	} 
	else
		echo 1;
	
?>
