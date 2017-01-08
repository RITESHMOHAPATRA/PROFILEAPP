<html>
	<head>
		<title>Change Password</title>
	</head>
	<body>
		<?php
			if (isset($_GET['msg'])) 
			{
				echo $_GET['msg'];
			}
		?>
		<form action="update-password.php" method="POST">
			<table>
				<tr>
					<td>Current Password</td>
					<td><input type="Password" name="cpwd"></td>
				</tr>
				<tr>
					<td>New Password</td>
					<td><input type="Password" name="npwd"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="Password" name="conpwd"></td>
				</tr>
				<tr>
					<td></td>
					<td ><input type="submit" value="UPDATE"></td>
				</tr>
			</table>
		</form>
	</body>
</html>