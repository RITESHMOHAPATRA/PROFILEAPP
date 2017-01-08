<?php
	session_start();		

	$loginid = $_SESSION["loginid"];
	require_once "connect.php";
	$query = "select * from student where loginid='$loginid'";
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$picname = $data['picname'];

?>
<html>
	<body>
		<form action="update-picture.php" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td></td>
					<td><img src="profilepics/<?php echo $picname;?>" height = "100" width="100"></td>
				</tr>
				<tr>
					<td>Profile Pic</td>
					<td><input type="file" name="profilepic"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Upload"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

