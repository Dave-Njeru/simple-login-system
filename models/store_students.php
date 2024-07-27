<?php
require '../helpers/connection.php';
require '../helpers/clean_data.php';
require '../helpers/redirect.php';

$firstName = $lastName = $dateOfBirth = $gender = $phoneNumber = $email = $emergencyPhone = "";

// Get form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = test_input($_POST['first_name']);
    $lastName = test_input($_POST['last_name']);
    $dateOfBirth = test_input($_POST['date_of_birth']);
    $gender = test_input($_POST['gender']);
    $phoneNumber = test_input($_POST['phone_number']);
    $email = test_input($_POST['email']);
    $emergencyPhone = test_input($_POST['emergency_phone']);
}

// Prepare and execute SQL statement
$sql = "INSERT INTO students (first_name, last_name, date_of_birth, gender, phone_number, email, emergency_phone)
        VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $firstName, $lastName, $dateOfBirth, $gender, $phoneNumber, $email, $emergencyPhone);

if ($stmt->execute()) {
    redirect('../views/input_student.php');
    echo "<script>alert('Student data inserted successfully');</script>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

?>