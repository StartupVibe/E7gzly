<?php
session_start(); /* Starts the session */
session_unset(); /* remove all session variables */
session_destroy(); /* Destroy started session */

header("Location: ../index.php");
exit;
?>