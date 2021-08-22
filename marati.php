
<?php
	require 'dbconfig/config.php';
?>

<html>

<body style="background-color:skyblue">
<div class="grid_10">
		<div class="box round first" id="TELUGU">
			<h1 align="center"><font color="#d63031">Tamil songs </font></h1>
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
  <button>  <img src="img/a10.jpg"  style="width:90%">
  <audio controls>
  <source src="songs/a125.mp3" type="audio/ogg"></button> 
  </div>
  <div class="column">
    <button><img src="img/a20.jpg"  style="width:90%">
	<audio controls>
  <source src="songs/a20.mp3" type="audio/ogg"></button>
  </div>
  <div class="column">
   <button> <img src="img/a30.jpg"  style="width:90%">
   <audio controls>
  <source src="songs/a30.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/a40.jpg" style="width:90%">
   <audio controls>
  <source src="songs/a40.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/a50.jpg" style="width:75%">
   <audio controls>
  <source src="songs/a50.mp3" type="audio/ogg"></button>
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