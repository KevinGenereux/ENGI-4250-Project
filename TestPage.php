<?php
	session_start();
	if(!isset($_SESSION['id']))
	{
		header("Location: http://localhost/Login.html");
	}
?>

<!DOCTYPE html>
<html>
	<head>
	
	<h1> Fake Uni </h1>
	
	</head>
</html>