<?php
include 'session_login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "dbconn.php";

    // Sanitize input data
    function cleanInput($data)
    {
        return htmlspecialchars(trim($data));
    }

    // Fetch the submitted form fields dynamically
    $formFields = array_keys($_POST);
    $filteredFields = array_map('cleanInput', $formFields);

    // Prepare the placeholders for the SQL statement
    $placeholders = implode(', ', array_fill(0, count($filteredFields), '?'));

    // Insert data into the database using prepared statements
    $sql = "INSERT INTO tan_form (account_nos, email, ";
    $sql .= implode(", ", $filteredFields) . ") VALUES (?, ?, ";
    $sql .= $placeholders . ")";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        // Bind parameters and execute the statement
        $bindParams = array_merge([$_SESSION['account_nos'], $_SESSION['email']], array_values($_POST));
        $bindString = 'ss' . str_repeat('s', count($filteredFields));
        $stmt->bind_param($bindString, ...$bindParams);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Redirect to thank you page upon successful insertion
            $stmt->close();
            $conn->close();
            header("Location: form.php?thank_you=1");
            exit();
        } else {
            echo "Error: Data insertion failed";
        }
    } else {
        echo "Error: Unable to prepare SQL statement";
    }

    // Close the database connection
    $conn->close();
}
