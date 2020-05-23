<?php
	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";
	$db_connection = pg_connect("host=localhost dbname=quotes");
	echo "DB: $db_connection<br>";
	$result = pg_query($db_connection, "SELECT * FROM user");
	echo "User Data: $result";
?>