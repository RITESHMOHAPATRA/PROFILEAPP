<html>
	<head>
		<title>Login Page</title>
		<script language="javascript">
			function check() 
			{
				var loginid =  document.f.loginid.value;
				var password = document.f.password.value;
				var flag = true ;
				if (loginid=="")
				{
					document.getElementById("nameE").innerHTML = "Enter your loginid";
					flag = false ;
				} 
				else 
				{
					document.getElementById("nameE").innerHTML = "";
				}
				if (password=="")
				{
					document.getElementById("passwordE").innerHTML = "Enter your password";
					flag = false ;
				} 
				else 
				{
					document.getElementById("passwordE").innerHTML = "";
				}
				return flag;
			}
			
		</script>	
	</head>
	<body >	
		<form action="check-user.php" method="POST" onsubmit="return check()" name="f" >
			<table align="center">
				<caption><h1>Login Panel</h1></caption>
				<tr>
					<td colspan="2">
						<font color="green">
							<?php
								if(isset($_GET['msg']))
									{
										$msg = $_GET['msg'];
										echo "<h3>$msg</h3>";
									}
							?>
						</font>	
					</td>
				</tr>
				<tr>
					<td></td>
					<td><lable id="nameE"></lable></td>
				</tr>
				<tr>
					<td>Login ID</td>
					<td><input type="text" name="loginid"></td>
				</tr>
				<tr>
					<td></td>
					<td><lable id="passwordE"></lable></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" value="Sign In">
						<input type="reset" value="Reset">
					</td> 
				</tr>
				<tr>
					<td></td>
					<td>
						<a href="create-user.php">New User?</a>
					</td> 
				</tr>
			</table>	
		</form>
	</body>	
</html>