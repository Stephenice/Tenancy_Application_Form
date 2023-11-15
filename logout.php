<?php
// Resume the session
session_start();

// Clear all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Redirect to index.php
header('Location: index.php');

exit(); // Just to ensure no code is executed after the redirection