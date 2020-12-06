<?php
	include("config.php");
	$passwordHash = password_hash('password', PASSWORD_DEFAULT);
	$sql = "INSERT into login VALUES ('mGiorno', '$passwordHash', 'Matthew Giorno', 'mkgiorno@lakeheadu.ca');";
	mysqli_query($db, $sql);
	
	$sql = "INSERT into login VALUES ('kGenereux', '$passwordHash', 'Kevin Genereux', 'kwgenere@lakeheadu.ca');";
	mysqli_query($db, $sql);
?>

