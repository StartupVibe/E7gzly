<?php
session_start();
include("db_con.php");

$partner_service_id=$_GET['partner_service_id'];

$sql_partner = "DELETE from partner_service WHERE partner_service_id=$partner_service_id";
if (!$result_partner= mysqli_query($conn,$sql_partner)){die('Error: ' . mysqli_error($conn));}
 
  header("Location: ../admin/control_services.php?service_deleted");

?>