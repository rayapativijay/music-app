<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<title>Signup Form</title>
<head>
<h1 align="center"><font color="#d63031">Welcome to Musique</font></h1>
<link rel="stylesheet" type="text/css" href="css/v3.css">
<style>
body {
background-image:url('img/signup.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
	<div id="main-wrapper3">
	<center>
		<font color="red"><h2>Signup Credentials</h2></font>
	<form class="signuppage" action="signup.php" method="post">
		<font color="#c0392b"><label><b>Enter Login id:</b></label></font><br>
		<input name="loginid" type=text class="inputvalues" pattern="[a-zA-z]{2,}" placeholder="Type login id" required/><br><br>
		<font><b>Login id must contain:</b><br>1)Only lowercase and uppercase letters<br>2)No spaces<br>3)Minimum 2 characters</font><br><br>
		<font color="#c0392b"><label><b>Enter Password:</b></label></font><br>
		<input name="password" type=password class="inputvalues" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Type your password" required/><br><br>
		<font color="#c0392b"><label><b>Confirm Password:</b></label></font><br>
		<input name="cpassword" type=password class="inputvalues" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm your password" required/><br><br>
		<font><b>Password must contain:</b><br>1)Atleast one lowercase letter<br>2)Atleast one uppercase letter<br>3)No spaces<br>4)Minimum 8 characters<br> 5)Atleast One Number </font><br><br>
		<input name="signup_btn" type=submit id="Signup_btn" value="Signup"/><br><br>
		<a href="index.php"><input type=button id="back_btn2" value="Back to login"/></a>
	</form>
	</center>
	
	<?php
		if(isset($_POST['signup_btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up Done Successfully") </script>';
			$loginid=$_POST['loginid'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query="select * from tbl_users where name='$loginid'";
				$query_run=mysqli_query($con,$query);
				
				if(mysqli_num_rows($query_run)>0)
				{
					// there is already a user with same username
					echo '<script type="text/javascript"> alert("Loginid already exists try another loginid") </script>';
				}
				else
				{
					$query="insert into tbl_users values('$loginid','$password')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User Signup Successfull") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Password and Confirm password doesnt match!") </script>';
			}
		}
	?>
	
	</div>
	
</body>
</html>   