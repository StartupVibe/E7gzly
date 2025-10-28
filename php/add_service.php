<?php
session_start();
include("db_con.php");


$partner_id=$_POST['partner_id'];
$service_id=$_POST['service_id'];
$partner_service_cost=$_POST['partner_service_cost'];


$sql_service = "INSERT INTO partner_service (partner_id,service_id,partner_service_cost)
		VALUES ('$partner_id','$service_id','$partner_service_cost')";
if (!$result_service = mysqli_query($conn,$sql_service)){die('Error: ' . mysqli_error($conn));}

header("Location: ../admin/control_services.php?Service_added_successfully");

?>