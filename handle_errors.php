<?php
session_start();

$errors = [
    'invalid_credentials' => 'Invalid username or password.',
    'empty_fields' => 'Both email/username and password are required.'
];

if (isset($_SESSION['error']) && isset($_GET['error']) && array_key_exists($_GET['error'], $errors)) {
    $errorKey = $_GET['error'];
    echo '<div class="error">' . $errors[$errorKey] . '</div>';
    unset($_SESSION['error']);
}
