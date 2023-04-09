<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $user_id = $_POST['user_id'];
    
    // Perform any necessary validation

    // Delete the user from the database
    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $user_id);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=User deleted successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error deleting user');
        exit;
    }
}
?>
