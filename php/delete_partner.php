<?php
session_start();
include("db_con.php");

$partner_id=$_GET['partner_id'];

$sql_partner = "DELETE from partner WHERE partner_id=$partner_id";
if (!$result_partner= mysqli_query($conn,$sql_partner)){die('Error: ' . mysqli_error($conn));}
 
  header("Location: ../admin/control_partners.php?partner_deleted");

?>