<?php
include "header.php";
include "menu.php";

$link=mysqli_connect("localhost","root","")or die("");
mysqli_select_db($link,"adminlogin")or die("");

?>
<html>
<head>
<style>
body {
background-image:url('img/index.jpg');
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style></head>
<body>
	<div class="grid_10">
		<div class="box round first">
			<h2>Welcome To Home</h2>
			<div class="block">
			<marquee><h1>MUSIC LIBRARY MANAGEMENT SYSTEM</h1></marquee>
			 
			
			 <center><img src="box.jpg" width="400px" height="300px"/></center>
	 
			
		</div>
	</div>








<?php
include "footer.php";

?>
</body>
</html>