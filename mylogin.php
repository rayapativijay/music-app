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
		<style>
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
.button3 {background-color: red;} 
		</style>
  </head>
  <body>
    <div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">VIP Membership login </h2>

  <form class="login-container" name="form1" method="post" action="mylogin.php">
    <p><input type="text" placeholder="Username" name="u1" required pattern="[A-Za-z]+" title="Please Enter Valid Username[A-Za-z only] "></p>
    <p><input type="password" placeholder="Password" name="p1" required ></p>
    <p><a href="dj/odms/services.php"><input type="submit" value="Log in" name="sub1"></a></p>
	<p><a href="Member.php"><input class="button button2" type=button id="member" value="Membership"/></a></p>
	   <a href="home.php"> <input class="button button3" type=button id="back_btn" value="Back to Home"/></a>


  </form>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<?php
		if(isset($_POST['sub1']))
		{
			$loginid=$_POST['u1'];
			$password=$_POST['p1'];
			$query="select * from vip where username='$loginid' and password='$password'";
			$query_run=mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				  //valid
				header('location:dj/odms/services.php');
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
		}
	?>
  </body>
</html>