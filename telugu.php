
<?php
	require 'dbconfig/config.php';
?>

<html>

<body style="background-color:skyblue">
<div class="grid_10">
		<div class="box round first" id="TELUGU">
			<h1 align="center"><font color="#d63031">Telugu songs </font></h1>
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
  <button>  <img src="img/t10.jpg"  style="width:70%">
   <audio controls>
  <source src="songs/rajini.mp3" type="audio/ogg"></button> 
  </div>
  <div class="column">
    <button><img src="img/t8.jpg"  style="width:60%">
	 <audio controls>
	<source src="songs/panja.mp3" type="audio/ogg"></button>
  </div>
  <div class="column">
   <button> <img src="img/t3.jpg"  style="width:60%">
   <audio controls>
  <source src="songs/gabbarsingh.mp3" type="audio/ogg"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/t4.jpg" style="width:60%">
   <audio controls>
  <source src="songs/ban.mp3" type="audio/ogg"></button></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/t5.jpg" style="width:60%">
   <audio controls>
  <source src="songs/mirchi.mp3" type="audio/ogg"></button></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/t6.jpg" style="width:65%">
   <audio controls>
  <source src="songs/sahoo.mp3" type="audio/ogg"></button></button>
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