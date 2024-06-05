<?php
session_start();

// Unset specific session variables related to authentication
unset($_SESSION['user_id']);
unset($_SESSION['logged_in']);

// Redirect to the login page
header("Location: login1.php");
exit;

?>
