<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform any necessary validation

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $username, $email, $hashed_password);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=User added successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error adding user');
        exit;
    }
}
?>
