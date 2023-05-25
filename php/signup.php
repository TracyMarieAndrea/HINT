<?php
include('../db/connection.php');

if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    $sql = "INSERT INTO users (username,password,role) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $result = $stmt->execute([$username, $password, $role]);

    if ($result) {
        session_start();
        header('Location: ../index.php');
    }
}

// Close the statement and connection
$stmt->close();
$conn->close();
