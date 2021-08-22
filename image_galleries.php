<?php
	require 'dbconfig/config.php';
?>

<html>

<body style="background-color:skyblue">
<div class="grid_10">
		<div class="box round first" id="TELUGU">
			<h1 align="center"><font color="#d63031">Image Gallaries </font></h1>
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
  <button>  <img src="img/t10.jpg"  style="width:100%"></button> 
  </div>
  <div class="column">
    <button><img src="img/t2.jpg"  style="width:100%"></button>
  </div>
  <div class="column">
   <button> <img src="img/t3.jpg"  style="width:100%">
 
</div>
<div class="column">
   <button> <img src="img/t4.jpg" style="width:100%"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/t5.jpg" style="width:100%"></button>
  </div>
</div>
<div class="column">
   <button> <img src="img/t6.jpg" style="width:100%"></button>
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