<?php
	$userPassword = $_POST["password"];
	echo "$userPassword\n";
	$db_connection = pg_connect("host=localhost dbname=quotes user= password=");
	$result = pg_query($db_connection, "SELECT * FROM user");
	echo "User Data: $result";
?>