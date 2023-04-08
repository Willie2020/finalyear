<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $indexNumber = $_POST['indexNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if ($password !== $confirmPassword) {
        // Handle the error, e.g., show an error message or redirect to an error page
        header("Location: /signup.html?error_message=" . urlencode("Passwords do not match."));
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, index_number, phone_number, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $firstName, $lastName, $indexNumber, $phoneNumber, $hashed_password);

    if ($stmt->execute()) {
        header("Location: /login.html");
        exit();
    } else {
        header("Location: /signup.html?error_message=" . urlencode("Error registering user. Please try again."));
        exit();
    }
}
?>
