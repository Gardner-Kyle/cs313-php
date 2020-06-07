<!DOCTYPE html>
<html>
	<head>
		<script src="db.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="week2.css">
	</head>
	<body>

		<?php
    		$db_connection = pg_connect("host=localhost dbname=quotes user= password=");
    		$result = pg_query($db_connection, "SELECT * FROM user WHERE user.password = ");
		?>

		<div class="div" id="div1"> Welcome <br>
		</div>
		<div class="div" id="div2"> 

					<?php echo date("D M d, Y G:i a"); ?>
			<br>
			<img class="img" src="https://cdn.quotesgram.com/img/63/48/1051968536-quote-from-the-lord-of-the-rings-the-return-of-the-king.jpg"> 
			<br> 
			<button type="button" style="margin-top: 10%" id="fadeBtn">Click to Change</button>
		</div>
	</body>
</html>