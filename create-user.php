<html>
	<head>
		<title>Registration Page</title>	
		<script type="text/javascript" src="jquery-3.1.1.min.js"></script>
	</head>
	<body>
		<h2>Registration Form</h2>	
		<font color="red">
			<?php
				if(isset($_GET['msg']))
				{
					$msg = $_GET['msg'];
					echo $msg;
				}
			?>
		</font>	
		<form action="insert-user.php" method="post" enctype="multipart/form-data" >
			<table> 
				<tr>
					<td>Name</td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Login ID</td>
					<td><input id="check" type="text" name="loginid"></td>
				</tr>
				<tr>
					<td></td>
					<td><lable id="disp"></lable></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					<td><input type="text" name="contactno"></td>
				</tr>
				<tr>
					<td>Email Id</td>
					<td><input type="text" name="emailid"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
					</td> 
				</tr>
				<tr>
					<td>Courses</td>
					<td>
						<input type="checkbox" name="course[]" value="java">Java
						<input type="checkbox" name="course[]" value=".net">.NET
						<input type="checkbox" name="course[]" value="php">PHP
						<input type="checkbox" name="course[]" value="android">Android
						
					</td>
				</tr>
				<tr>
					<td>District</td>
					<td>
						<select name="district">
							<option>Select</option>
							<option>Angul</option>
							<option>Khorda</option>
							<option>Puri</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Profile Pic:</td>
					<td><input type="file" name="profilepic"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Register">
						<input type="reset" value="Reset">
					</td> 
				</tr>
			</table>	
		</form>
	</body>	
</html>