<?php
	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";
	$db_connection = pg_connect("host=localhost dbname=quotes user= password= ");

	if ($db_connection) {
		echo "FAILURE";
	} else {
		echo "SUCCESS";
	}
	$result = pg_query("SELECT * FROM quotes.quotes.user");
	echo "User Data: $result";
?>