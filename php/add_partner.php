<?php
session_start();
include("db_con.php");


$admin_id=$_POST['admin_id'];
$partner_name=$_POST['partner_name'];
$partner_category=$_POST['partner_category'];
$partner_img1 = $_FILES['partner_img1']['name'];
$partner_img2 = $_FILES['partner_img2']['name'];
$partner_email=$_POST['partner_email'];
$partner_password=$_POST['partner_password'];
$partner_phone=$_POST['partner_phone'];
$partner_address=$_POST['partner_address'];
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


$sql_partner = "INSERT INTO partner (partner_name,partner_category,partner_img1,partner_img2,partner_email,
partner_password,partner_phone,partner_address,partner_menu,admin_id)
		VALUES ('$partner_name','$partner_category','$partner_img1','$partner_img2','$partner_email',
'$partner_password','$partner_phone','$partner_address','$partner_menu','$admin_id')";
if (!$result_partner = mysqli_query($conn,$sql_partner)){die('Error: ' . mysqli_error($conn));}

header("Location: ../admin/control_partners.php?Partner_added_successfully");

?>