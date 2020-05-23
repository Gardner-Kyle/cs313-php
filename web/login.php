<!DOCTYPE html>
<html>
	<head>

	</head>
	<body>

		<?php
			$userPassword = $_POST["password"]
    		$db_connection = pg_connect("host=localhost dbname=quotes user= password=");
    		$result = pg_query($db_connection, "SELECT * FROM user WHERE user.password = ");
    		echo "User Data: \n$result"
		?>

		<div class="div" id="div1"> Welcome <br>
		</div>
		<div>
			<form action="<?php $this-> ?>" method="post">
				<div class="div" id="div2"> 
					<input type="text" name="password">
				</div>
				<button type="submit" style="margin-top: 10%" id="submit">Login</button>
			</form>
		</div>
	</body>
</html>