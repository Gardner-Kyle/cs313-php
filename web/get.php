<?php
	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";
	$db_connection = pg_connect("dbname=quotes");

	if (!$db_connection) {
		echo "FAILURE<br>";
		echo pg_last_error();
	} else {
		echo "SUCCESS<br>";
		echo "DB Name: " . pg_dbname($db_connection) . "<br>";
		echo "HOSTNAME: " . pg_host($db_connection) . "<br>";
		echo "PORT: " . pg_port($db_connection) . "<br>";

		$result = pg_query("SELECT id FROM quotes.quotes.user");
	    echo "User Data: $result";
	}
?>