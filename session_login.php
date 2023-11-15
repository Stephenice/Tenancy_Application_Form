<?php
session_start();

if (!isset($_SESSION['userid'])) {
    $redirectURL = 'index.php';

    // Redirect the user to the specified URL
    header('Location: ' . $redirectURL);
    exit();
}
