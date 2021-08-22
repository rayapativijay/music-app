<?php
	require 'dbconfig/config.php';
?>

<html>

<body style="background-color:skyblue">
<div class="grid_10">
		<div class="box round first" id="TELUGU">
			<h1 align="center"><font color="#d63031">Hindi songs </font></h1>
			<div class="block">
			
			<head>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>


<div class="row">
  <div class="column">
  <button>  <img src="img/h10.jpg"  style="width:100%">
  <audio controls>
  <source src="songs/h1.mp3" type="audio/ogg"></button> 
  </div>
  <div class="column">
    <button><img src="img/h20.jpg"  style="width:100%">
	<audio controls>
  <source src="songs/h20.mp3" type="audio/ogg"></button>
  </div>
  <div class="column">
   <button> <img src="img/h30.jpg"  style="width:85%">
   <audio controls>
  <source src="songs/h30.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/h40.jpg" style="width:100%">
   <audio controls>
  <source src="songs/h40.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/h50.jpg" style="width:100%">
   <audio controls>
  <source src="songs/h50.mp3" type="audio/ogg"></button>
  </div>
</div>
<a href="home.php"> <input class="button button3" type=button id="back_btn" value="Back to Home"/></a>
  </head>
			
			
			</div>
			</div>
			
			</div>
			<ul class="pagination">
					
					</ul>
			



 
			</div>
		</div>




<?php
include "footer.php";
?>

</body>
</html>