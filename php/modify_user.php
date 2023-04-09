<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform any necessary validation

    // Hash the password before storing it in the database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Update the user in the database
    $sql = "UPDATE users SET username=?, email=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $username, $email, $hashed_password, $user_id);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=User updated successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error updating user');
        exit;
    }
}
?>
