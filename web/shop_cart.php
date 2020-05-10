<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="week3.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="week3.css">
</head>
<body>
<div class="div" id="div1"><h1> Checkout </h1></div>
<div class="div" id="div2">
	<img class="img" src="https://i.imgur.com/SmXu3j7.jpg" id="ch_img1">
	<img class="img" src="https://images.indianexpress.com/2017/12/lord-of-the-rings-759.jpg" id="ch_img2">
	<img class="img" src="https://wallpaperaccess.com/full/830830.jpg" id="ch_img3">
	<img class="img" src="https://wallpaperaccess.com/full/830842.jpg" id="ch_img4">
</div>
<div class="div" id="div1">  
	<form action="shop_browse.php">
		<a type="submit" class="btn" id="backbtn">Back</a>
	</form>
	<form action="shop_checkout">
		<button type="submit" class="btn" id="checkout" onclick="toCheckout()">Checkout</a>
	</form>
</div>
</body>
</html>