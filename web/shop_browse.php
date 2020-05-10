<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="week3.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="week3.css">
</head>
<body>
<div class="div" id="div_h"><h1> Welcome to Poster Man </h1><br>
	<h2> Please select any posters you wish to order. </h2>
	<h3> All posters are 4ft wide and 3ft tall.</h3>
</div>
<div class="div" id="div1"> 
	<img class="img" id="img1" src="https://i.imgur.com/SmXu3j7.jpg">
	<img class="img" id="img2" src="https://images.indianexpress.com/2017/12/lord-of-the-rings-759.jpg"> 
	<br> 
	<button type="button" class="btn" id="btn1" onclick="img1btn()">+</button>
	<button type="button" class="btn" id="btn2" onclick="img2btn()">+</button>
</div>
<div class="div" id="div2"> 
	<img class="img" id="img3" src="https://wallpaperaccess.com/full/830830.jpg">
	<img class="img" id="img4" src="https://wallpaperaccess.com/full/830842.jpg"> 
	<br> 
	<button type="button" class="btn" id="btn3" onclick="img3btn()">+</button>
	<button type="button" class="btn" id="btn4" onclick="img4btn()">+</button>
	<br>
	<form action="shop_cart.php">
		<button type="submit" class="btn" id="submit" onclick="submit()"> Cart </button>
	</form>
</div>
</body>
</html>