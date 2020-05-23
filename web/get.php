<?php
	display_errors = On;
	display_startup_errors = On;

	$host        = "host=127.0.0.1";                         
	$port        = "port=5432";                        
	$dbname      = "dbname=quotes";                         
	$credentials = "user= password=";

	$userPassword = $_POST["password"];
	echo "Password: $userPassword<br>";
	$db_connection = pg_connect("host=localhost dbname=quotes user=root password=root");

	if ($db_connection) {
		echo "FAILURE<br>";
	} else {
		echo "SUCCESS<br>";
		echo "DB Name: " . pg_dbname($db_connection) . "<br>";
		echo "HOSTNAME: " . pg_host($db_connection) . "<br>";
		echo "PORT: " . pg_port($db_connection) . "<br>";
	}
	$result = pg_query("SELECT id FROM quotes.quotes.user");
	echo "User Data: $result";
?>