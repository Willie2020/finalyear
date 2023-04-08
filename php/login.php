<?php

session_start();
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    $index_number = $_POST['index_number'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE index_number = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $index_number);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    //error_log("User data: " . print_r($user, true));

    if ($user && password_verify($password, $user['password'])) {
        // error_log("Password verification result: true");
        $_SESSION['user'] = $user;
        header('Location: ../index.html'); // Redirect to course.html
        exit;
    } else {
        $error_message = "Invalid Index Number or Password";
        // Redirect back to the login page with the error message
        header("Location: ../login.html?error_message=" . urlencode($error_message));
        exit();
    }
}
?>

