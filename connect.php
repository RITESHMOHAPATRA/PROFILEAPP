<?php
	$con = mysqli_connect("localhost","root","");
	if(!$con)
	{
		die("Connection failed");
	}
	$dbstatus = mysqli_select_db($con,"morsql");
	if(!$dbstatus)
	{
		die("Database not found..");
	}
?>