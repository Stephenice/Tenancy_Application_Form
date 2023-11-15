<?php
include 'dbconn.php'; // Include for database connection

function loginUser($conn, $userid, $pass)
{
    $sql = "SELECT * FROM tenancy_login WHERE email=? AND password=?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $userid, $pass);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            return $row;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
