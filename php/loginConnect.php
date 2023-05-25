<?php
include('../db/connection.php');

// Get username and password from the login form
$uname = $_POST['uname'];
$pword = $_POST['pword'];

// Prepare the SQL statement
$sql = "SELECT role FROM users WHERE username = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $uname, $pword);
$stmt->execute();
$stmt->bind_result($role);
$stmt->fetch();

// Redirect based on user role
if ($role == 'admin') {
    session_start();
    header('Location: ../page/adminPage.php');
} elseif ($role == 'manager') {
    session_start();
    header('Location: ../page/managerPage.php');
} elseif ($role == 'employee') {
    session_start();
    header('Location: ../page/employeePage.php');
} else {
    echo 'invalid';
}

$stmt->close();
$conn->close();
