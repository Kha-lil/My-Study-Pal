<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();

$hour = time() - 3600;
setcookie('userid', "", $hour);
setcookie('useremail', "", $hour);
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;
?>