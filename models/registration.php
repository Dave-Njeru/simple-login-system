<?php
require '../helpers/connection.php';
require '../helpers/clean_data.php';
require '../helpers/redirect.php';

$firstName = $lastName = $accountType = $username = $hashedPassword = $password = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']);
    $accountType = test_input($_POST['accountType']);
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

// Prepare and execute the SQL statement
$sql = "INSERT INTO login (firstName, lastName, accountType, username, password) VALUES (?, ?, ?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("sssss", $firstName, $lastName, $accountType, $username, $hashedPassword);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        redirect('../views/login.html');
    } else {
        echo "An error occurred during registration. ".$conn->error;
    }

    $stmt->close();
} else {
    echo "SQL statement preparation failed: " . $conn->error;
}

$conn->close();

