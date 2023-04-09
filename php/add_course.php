<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $course_name = $_POST['course_name'];
    
    // Perform any necessary validation

    // Insert the course into the database
    $sql = "INSERT INTO courses (course_name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $course_name);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=Course added successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error adding course');
        exit;
    }
}
?>
