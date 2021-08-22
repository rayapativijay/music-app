<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<title>Signup Form</title>
<head>
<h1 align="center"><font color="#d63031">VIP Membership Register</font></h1>
<link rel="stylesheet" type="text/css" href="css/v3.css">
<style>
body {
background-image:url('img/signup.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

		.button {
  background-color: #4CAF50; 
  border: black;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
		.button2 {background-color: green;} 
.button3 {background-color: blue;} 
</style>
</head>
<body>
	<div id="main-wrapper3">
	<center>
		<font color="red"><h2>Membership Credentials</h2></font>
	<form action="member.php" method="post">
		<font color="#c0392b"><label><b>Enter Login id:</b></label></font><br>
		<input name="loginid" type=text class="inputvalues" pattern="[a-zA-z]{2,}" placeholder="Type login id" required/><br><br>
		<font><b>Login id must contain:</b><br>Only lowercase and uppercase letters</font><br><br>
		<font color="#c0392b"><label><b>Enter Password:</b></label></font><br>
		<input name="password" type=password class="inputvalues" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Type your password" required/><br><br>
		<font color="#c0392b"><label><b>Confirm Password:</b></label></font><br>
		<input name="cpassword" type=password class="inputvalues" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Confirm your password" required/><br><br>
		<font><b>Password must contain:</b><br>Atleast one lowercase and uppercase letter<br>Minimum 8 characters<br>  </font><br>
        <font color="#c0392b"><label for="phone"><b>Enter your phone number:</b></label></label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}"><br>
		<form action="/action_page.php">
    <p><b>Please select your Membership:</b></p>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">399/Year</label><br><br>
	 <input type="radio" id="male" name="gender" value="male">
	 <label for="male">240/Six months</label><br><br>
	  <input type="radio" id="male" name="gender" value="male">
	  <label for="male">150/Three months</label><br><br>
        
		
		<input  class="button button3" name="paynow" type="submit" id="back_btn3" value="PAYNOW"/><br>
		<a href="mylogin.php"><input type=button id="back_btn2" value="Back"/></a><br>

	</form>
	</center>
<?php
		if(isset($_POST['paynow']))
		{
			$username=$_POST['loginid'];
			$password=$_POST['password'];
			$cpassword=$_POST['cpassword'];
			$_SESSION['loginid']=$username;
			$_SESSION['password']=$password;
			$_SESSION['cpassword']=$cpassword;
		
			header('location:payment.php');
			}
			
?>
	</div>
	
</body>
</html>   