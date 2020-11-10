<?php

define('DB_SERVER', 'ec2-52-200-119-0.compute-1.amazonaws.com');
define('DB_USERNAME', 'lwzudegwqmqzbe');
define('DB_PASSWORD', 'eccd64af0aa6abbd99b74c67f48261395b42b94982c7c2657c8b6f33d0111c1a');
define('DB_NAME', 'dfohptlguqnhdp');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
