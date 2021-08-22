
<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/style2.css">
		<h1 align="center"><font color="white">Welcome to MUSIQUE</font></h1>
		<style>
body {
background-image:url('img/index.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
  </head>
  <style>
  
		.button2 {color: white; background-color: green;} 

</style>
  <body>
  
    <div class="login">
  <div class="login-triangle"></div>
 	<body background="C:\xampp\htdocs\music2\box.jpg">
  <h2 class="login-header">Log in</h2>

  <form class="login-container" name="form1" method="post" action="home.php">
    <p><input type="text" placeholder="Username" name="u1" required pattern="[A-Za-z]+" title="Please Enter Valid Username[A-Za-z only] "></p>
    <p><input type="password" placeholder="Password" name="p1" required ></p>
    <p><input type="submit" value="Log in" name="sub1"></p>
	<p><a href="signup.php"><input class="button2" type=button id="Register" value="Register"/></a></p>
  </form>
</div>
<?php
		if(isset($_POST['sub1']))
		{
			$loginid=$_POST['u1'];
			$password=$_POST['p1'];
			$query="select * from tbl_users where name='$loginid' and pwd='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				  //valid
				header('location:link.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
		}
	?>

  </body>
</html>