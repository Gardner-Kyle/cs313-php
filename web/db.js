function get() {
	<?php
		$userPassword = $_POST["password"];
		$db_connection = pg_connect("host=localhost dbname=quotes user= password=");
		$result = pg_query($db_connection, "SELECT * FROM user WHERE user.password = ");
		echo "User Data: $result";
	?>
}