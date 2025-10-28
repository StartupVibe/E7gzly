<?php
session_start();
include("db_con.php");


$complain_date=$_POST['complain_date'];
$complain_title=$_POST['complain_title'];
$complain_message=$_POST['complain_message'];
$user_name=$_POST['user_name'];
$user_phone=$_POST['user_phone'];
$user_email=$_POST['user_email'];


$sql_complain = "INSERT INTO complain (complain_date,complain_title,complain_message,user_name,user_phone,user_email)
		VALUES ('$complain_date','$complain_title','$complain_message','$user_name','$user_phone','$user_email')";
if (!$result_complain = mysqli_query($conn,$sql_complain)){die('Error: ' . mysqli_error($conn));}

header("Location: ../contact.php?Message_Sent_successfully");

?>