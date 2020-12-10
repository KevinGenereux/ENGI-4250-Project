<?php
include("Config.php");

$user = mysqli_real_escape_string($db, $_POST['j_username']);
$email = mysqli_real_escape_string($db, $_POST['j_emailaddress']);
$firstname = mysqli_real_escape_string($db, $_POST['j_fname']);
$lastname = mysqli_real_escape_string($db, $_POST['j_lname']);

$password = password_hash($_POST['j_password'], PASSWORD_DEFAULT);

$sql = "INSERT into login VALUES ('$user', '$password', '$email');";
mysqli_query($db, $sql);

$sql = "INSERT into userInfo VALUES ('$firstname', '$lastname', '$user', 'Software Engineering', 'Year 4', 'Student', '1970-01-01', '127.0.0.1');";
mysqli_query($db, $sql);

header("Location: http://localhost/Login.html");
die();
?>