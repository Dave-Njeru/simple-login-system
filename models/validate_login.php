<?php
require '../helpers/connection.php';
require '../helpers/clean_data.php';
require '../helpers/redirect.php';

session_start();

$username = $password = $userAccount = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $userAccount = test_input($_POST['accountType']);
}

$sql = "SELECT * FROM login WHERE username = ?";

if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Check password against stored hash
        if (password_verify($password, $row['password']) && $userAccount == $row['accountType']) {
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['accountType'] = $row['accountType'];
            $_SESSION['logged_in'] = true;
            redirect('../helpers/session.php');
        } else {
            echo "Invalid credentials. Please try again";
        }
    } else {
        echo "Username not found.";
    }

    $result->close();
    $stmt->close();
}
 else {
    echo "SQL statement preparation failed: " . $conn->error;
}

$conn->close();
