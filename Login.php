<?php
session_start();
if(!isset($_SESSION['id']))
{
	header("Location: http://localhost/Login.html");
}

include("Config.php");

$loginUser = mysqli_real_escape_string($db, $_POST['j_username']);
 
$sql = "SELECT * FROM login WHERE username = '$loginUser';";

$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if(password_verify($_POST['j_password'], $row["pass"]))
{
	
	// Generate 2FA code
	$twoFA =""; 
	for ($i = 0; $i < 6; $i++)
	{
		$twoFA .= strval(random_int(0, 9));
	}
	
	//Create email message
	$msg = "Here is your verification code: ".$twoFA;
	mail($row["email"], "Verification Code", $msg);
	
	session_start();
	$_SESSION["id"] = openssl_random_pseudo_bytes(32);
	$_SESSION["uName"] = $row["username"];
	$_SESSION["code"] = $twoFA;
	header("Location: http://localhost/Verify.html");
	die();
	
	
	
}

else
{
	header("Location: http://localhost/Login.html");
	die();
}
?>