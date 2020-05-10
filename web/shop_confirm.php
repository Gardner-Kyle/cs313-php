<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="week3.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="week3.css">
</head>
<body>
<div class="div" id="div1"> Welcome <br>
	<textarea placeholder="Enter color" id="colorText" style="margin-top: 10%"></textarea> <br>
	<button type="button" style="margin-top: 10px" id="colorBtn" onclick="changeColor()">Change color</button>
</div>
<div class="div" id="div2"> 

			<?php echo date("D M d, Y G:i a"); ?>
	<br>
	<img class="img" src="https://cdn.quotesgram.com/img/63/48/1051968536-quote-from-the-lord-of-the-rings-the-return-of-the-king.jpg"> 
	<br> 
	<button type="button" style="margin-top: 10%" id="fadeBtn">Click to Change</button>
</div>
<div class="div" id="div3">

			<?php echo date("D M d, Y G:i a"); ?>
	<br>
	<img class="img" src="https://www.hypable.com/wp-content/uploads/2014/01/gandalf.png"> 
	<br>
	<button type="button" style="margin-top: 10%" id="fadeBtn2">Click to Change</button>
</div>
</body>
</html>