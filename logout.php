<?php
	session_start();
	session_destroy();
	$msg = "Logout Succcesfull";
	header("Location:login.php?msg=$msg");
?>