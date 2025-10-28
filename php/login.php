<?php
session_start();
include("db_con.php");

$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

$sql = "SELECT * FROM user WHERE user_name = '$user_name' and user_password = '$user_password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
	$_SESSION["user_id"] = $row['user_id'];
	$_SESSION["user_phone"] = $row['user_phone'];
	$_SESSION["user_password"] = $row['user_password'];
	$_SESSION["user_name"] = $row['user_name'];
	$_SESSION["user_email"] = $row['user_email'];
	header("Location: ../index.php?Welcome($user_name)");
}

else {
	session_unset(); /* remove all session variables */
	session_destroy(); /* Destroy started session */
	header("Location: ../login.php?Wrong_Name_Password");
}

?>