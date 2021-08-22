<?php
	require 'dbconfig/config.php';
?>

<html>

<body style="background-color:skyblue">
<div class="grid_10">
		<div class="box round first" id="TELUGU">
			<h1 align="center"><font color="#d63031">English songs </font></h1>
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
  <button>  <img src="img/e1.jpg"  style="width:100%">
   <audio controls>
  <source src="songs/k10.mp3" type="audio/ogg"></button> 
  </div>
  <div class="column">
    <button><img src="img/e22.jpg"  style="width:100%">
	 <audio controls>
  <source src="songs/e30.mp3" type="audio/ogg"></button>
  </div>
  <div class="column">
   <button> <img src="img/e30.jpg"  style="width:100%">
    <audio controls>
  <source src="songs/e20.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/e40.jpg" style="width:85%">
    <audio controls>
  <source src="songs/k10.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/e50.jpg" style="width:100%">
    <audio controls>
  <source src="songs/k10.mp3" type="audio/ogg"></button>
  </div>
</div>

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