<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session completely
session_destroy();

// Start a new session to store the success message
session_start();
$_SESSION['success'] = "Logout successful";

// Redirect to the login page
header("Location: login.php");
exit();
?>
