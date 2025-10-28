<?php
session_start();
include("db_con.php");

$partner_id=$_POST['partner_id'];
$partner_name=$_POST['partner_name'];
$partner_category=$_POST['partner_category'];
$partner_email=$_POST['partner_email'];
$partner_password=$_POST['partner_password'];
$partner_phone=$_POST['partner_phone'];
$partner_address=$_POST['partner_address'];
$partner_img1 = $_FILES['partner_img1']['name'];
$partner_img2 = $_FILES['partner_img2']['name'];
$partner_menu = $_FILES['partner_menu']['name'];

// upload image code
$target = "../img/uploads/".basename($partner_img1);
if (move_uploaded_file($_FILES['partner_img1']['tmp_name'], $target)) {$msg = "Image uploaded successfully";}
else{$msg = "Failed to upload image";}
// -- upload image code

// upload image code
$target = "../img/uploads/".basename($partner_img2);
if (move_uploaded_file($_FILES['partner_img2']['tmp_name'], $target)) {$msg = "Image uploaded successfully";}
else{$msg = "Failed to upload image";}
// -- upload image code

// upload image code
$target = "../img/uploads/".basename($partner_menu);
if (move_uploaded_file($_FILES['partner_menu']['tmp_name'], $target)) {$msg = "Image uploaded successfully";}
else{$msg = "Failed to upload image";}
// -- upload image code


$sql_update = "UPDATE partner SET 
partner_name='$partner_name',partner_category='$partner_category',partner_email='$partner_email',partner_password='$partner_password'
,partner_phone='$partner_phone',partner_address='$partner_address',partner_img1='$partner_img1'
,partner_img2='$partner_img2',partner_menu='$partner_menu'
 WHERE partner_id='$partner_id'";

if (!$result = mysqli_query($conn,$sql_update)){die('Error: ' . mysqli_error($conn));}

if(isset($_SESSION["partner_name"])) {header("Location: ../admin/control_info.php?Update_Done");}
elseif(isset($_SESSION["admin_name"])) {header("Location: ../admin/control_partners.php?Update_Done");}



?>