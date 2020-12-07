<?php

session_start();
if(!isset($_SESSION['id']))
{
	header("Location: http://localhost/Login.html");
}

$userCode = $_POST['j_verifyCode'];
$twoFA = $_SESSION['code'];

if($userCode == $twoFA)
{
	header("Location: http://localhost/Main.html");
	die();
}

else
{
	session_unset();
	session_destroy();
	header("Location: http://localhost/Login.html");
	die();
}
?>