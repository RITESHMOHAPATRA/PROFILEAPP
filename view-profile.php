<?php
	session_start();
	if(!isset($_SESSION['loginid']))
	{
		$msg = "login again";
		header("Location:login.php?msg=$msg");
	}			

	$loginid = $_SESSION["loginid"];
	require_once "connect.php";
	$query = "select * from student where loginid='$loginid'";
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);


	$name = $data['name'];
	$contactno = $data['contactno'];
	$emailid = $data['emailid'];
	$gender = $data['gender'];
	$courses = $data['courses'];
	$district = $data['district'];
	$picname = $data['picname'];

?>
<table>
	<tr>
		<td></td>
		<td><img src="profilepics/<?php echo $picname;?>" height = "100" width="100"></td>
	</tr>
	<tr>
		<td>Name</td>
		<td><?php echo $name;?></td>
	</tr>
	<tr>
		<td>Contact No</td>
		<td><?php echo $contactno;?></td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td><?php echo $emailid;?></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td><?php echo $gender;?></td>
	</tr>
	<tr>
		<td>Courses</td>
		<td><?php echo $courses;?></td>
	</tr>
	<tr>
		<td>District</td>
		<td><?php echo $district;?></td>
	</tr>
</table>