<?php
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html >
  <head>
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
.button3 {background-color: blue;} 
		</style>
		</head>
		 <body>
		 <div class="login">
		<p><a href="feedback.php"><input class="button button2" type=button id="member" value="Feedback"/></a></p>
		<p><a href="demo.php"><input class="button button3" type=button id="member" value="Demo"/></a></p>
	
</div>
</body>
</html>