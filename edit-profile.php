<?php
	session_start();
	if (!isset($_SESSION['loginid'])) 
	{
		header("Location:login.php?msg=Login Again");
	}
	require 'connect.php';

	$loginid = $_SESSION['loginid'];
	$query = " select * from student where loginid='$loginid' " ;
	$result = mysqli_query($con,$query);
	$data = mysqli_fetch_array($result,MYSQLI_ASSOC);

	$name = $data['name'];
	$contactno = $data['contactno'];
	$emailid = $data['emailid'];
	$gender = $data['gender'];
	$courses = $data['courses'];
	$district = $data['district'];
?>
<form action="update-profile.php" method="POST">
	<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $name;?>"></td>
	</tr>
	<tr>
		<td>Contact No</td>
		<td><input type="text" name="contactno" value="<?php echo $contactno; ?>"></td>
	</tr>
	<tr>
		<td>Email ID</td>
		<td><input type="text" name="emailid" value="<?php echo $emailid ;?>"></td>
	</tr>
	<tr>
		<td>Gender</td>
		<td>
			<input type="radio" name="gender" value="male" <?php if($gender=='male') echo "checked" ;?>>Male
			<input type="radio" name="gender" value="female"<?php if($gender=='female')echo "checked";?>>Female
		</td>
	</tr>
	<tr>
		<?php
			$arr = explode(",",$courses);
		?>
		<td>Courses</td>
		<td>
			<input type="checkbox" name="course[]" value="java" <?php if(in_array("java",$arr)) echo "checked";?>>Java
			<input type="checkbox" name="course[]" value=".net" <?php if(in_array(".net",$arr)) echo "checked";?>>.NET
			<input type="checkbox" name="course[]" value="php" <?php if(in_array("php",$arr)) echo "checked";?>>PHP
			<input type="checkbox" name="course[]" value="android" <?php if(in_array("android",$arr)) echo "checked";?>>Android
		</td>
	</tr>
	<tr>
		<td>District</td>
		<td>
			<select name="district">
				<option>Select </option>	
				<option <?php if($district=='Angul') echo "selected" ;?>>Angul</option>
				<option <?php if($district=='Khorda') echo "selected" ;?>>Khorda</option>
				<option <?php if($district=='Puri') echo "selected" ;?>>Puri</option>
			</select>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Save"></td>
	</tr>
</table>
</form>