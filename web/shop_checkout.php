<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="week3.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="week3.css">
</head>
<body>
<div class="div" id="div1"> <h1> Checkout </h1> <br>
	<textarea placeholder="Enter color" id="colorText" style="margin-top: 10%"></textarea> <br>
	<button type="button" style="margin-top: 10px" id="colorBtn" onclick="changeColor()">Change color</button>
</div>
<div class="div" id="div2"> 
	<form action="shop_cart.php">
		<button type="button" class="btn" id="checkout">Back</button>
	</form>
	<form action="shop_confirm.php">
		<button type="button" class="btn" id="checkout">Checkout</button>
	</form>
</div>
</body>
</html>