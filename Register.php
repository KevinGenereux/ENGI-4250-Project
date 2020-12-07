<?php
include("Config.php");

$user = $_POST['j_username'];
$email = $_POST['j_emailaddress'];
$password = password_hash($_POST['j_password'], PASSWORD_DEFAULT);

$sql = "INSERT into login VALUES ('$user', '$password', '$email');";
mysqli_query($db, $sql);

?>