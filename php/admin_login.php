<?php
session_start();
include("db_con.php");

$admin_name = $_POST['admin_name'];
$admin_password = $_POST['admin_password'];
$admin_type = $_POST['admin_type'];

if ($admin_type == "Admin") {

$sql = "SELECT * FROM admin WHERE admin_name = '$admin_name' and admin_password = '$admin_password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
	$_SESSION["admin_id"] = $row['admin_id'];
	$_SESSION["admin_name"] = $row['admin_name'];
	$_SESSION["admin_type"] = $admin_type;
	$_SESSION["admin_password"] = $row['admin_password'];

	header("Location: ../admin/control_partners.php?welcome_admin_($admin_name)");
}
else {
	session_unset(); /* remove all session variables */
	session_destroy(); /* Destroy started session */
	header("Location: ../admin/index.php?Wrong_Name_Password");
}
}

else {

$sql = "SELECT * FROM partner WHERE partner_name = '$admin_name' and partner_password = '$admin_password'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
	$_SESSION["admin_type"] = $admin_type;
	$_SESSION["partner_id"] = $row['partner_id'];
	$_SESSION["partner_name"] = $row['partner_name'];
	$_SESSION["partner_email"] = $row['partner_email'];
	$_SESSION["partner_category"] = $row['partner_category'];
	$_SESSION["partner_address"] = $row['partner_address'];
	$_SESSION["partner_phone"] = $row['partner_phone'];
	$_SESSION["partner_password"] = $row['partner_password'];

	header("Location: ../admin/control_services.php?welcome_partner_($admin_name)");
}
else {
	session_unset(); /* remove all session variables */
	session_destroy(); /* Destroy started session */
	header("Location: ../admin/index.php?Wrong_Name_Password");
}

}

?>