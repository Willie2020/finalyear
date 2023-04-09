<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $tutor_id = $_POST['tutor_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

    // Perform any necessary validation

    // Update the tutor in the database
    $sql = "UPDATE tutors SET name=?, email=?, bio=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssi', $name, $email, $bio, $tutor_id);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=Tutor updated successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error updating tutor');
        exit;
    }
}
?>
