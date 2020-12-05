<?php
	define('DB_SERVER', 'localhost:3306');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', 'SecureDatabasePassword');
	define('DB_DATABASE', 'FakeUni');
	$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>