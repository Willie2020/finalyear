<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $indexNumber = $_POST['indexNumber'];
    $phoneNumber = $_POST['phoneNumber'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $program_id = $_POST['program_id']; // Retrieve the program_id from the submitted form data

    if ($password !== $confirmPassword) {
        header("Location: /signup.html?error_message=" . urlencode("Passwords do not match."));
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, index_number, phone_number, password, program_id) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssi', $firstName, $lastName, $indexNumber, $phoneNumber, $hashed_password, $program_id); // Include the program_id in the bind_param() call

    if ($stmt->execute()) {
        header("Location: /login.html");
        exit();
    } else {
        header("Location: /signup.html?error_message=" . urlencode("Error registering user. Please try again."));
        exit();
    }
}
?>
