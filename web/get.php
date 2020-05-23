<?php
	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";
	pg_connect("host=localhost dbname=quotes");
	echo "DB: $db_connection<br>";
	$result = pg_query("SELECT * FROM quotes.quotes.user");
	echo "User Data: $result";
?>