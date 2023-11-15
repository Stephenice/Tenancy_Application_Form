<?php
include 'dbFunctions.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_POST['userid'];
    $pass = $_POST['password'];

    if (!empty($userid) && !empty($pass)) {
        $row = loginUser($conn, $userid, $pass);

        if ($row) {
            $_SESSION['userid'] = $row['email'];
            $_SESSION['account_nos'] = $row['account_nos'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email'] = $row['email'];

            header('Location: form.php');
            exit();
        } else {
            $_SESSION['error'] = 'Invalid username or password.';
            header('Location: index.php?error=invalid_credentials');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Both email/username and password are required.';
        header('Location: index.php?error=empty_fields');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
