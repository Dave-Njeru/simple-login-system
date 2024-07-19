<?php
require 'redirect.php';

session_start();

//check if user is logged in
if (isset($_SESSION['logged_in'])) {
    $accountType = $_SESSION['accountType'];

    //define page URLs based on account type
    $adminPage = "";
    $studentPage = "../views/homepage.html";
    $lecturerPage = "";

    //redirect based on account type
    switch ($accountType) {
        case 'admin':
            redirect($adminPage);
            exit();
        case 'student':
            redirect($studentPage);
            exit();
        case 'lecturer':
            redirect($lecturerPage);
            exit();
        default:
        echo 'Invalid account type';
        break;
    }
} else {
    redirect('../views/login.html');
}
