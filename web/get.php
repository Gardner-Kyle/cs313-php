<?php
	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";

	$dbUrl = “postgres://cseuser:Spring2020@localhost:5432/quotes”


		echo "SUCCESS<br>";
		echo "DB Name: " . pg_dbname($dbUrl) . "<br>";
		echo "HOSTNAME: " . pg_host($dbUrl) . "<br>";
		echo "PORT: " . pg_port($dbUrl) . "<br>";

		$result = pg_query("SELECT id FROM quotes.quotes.user");
	    echo "User Data: $result";
?>