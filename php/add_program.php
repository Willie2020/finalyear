<?php
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    // Get the data from the form
    $program_name = $_POST['program_name'];
    
    // Perform any necessary validation

    // Insert the program into the database
    $sql = "INSERT INTO programs (program_name) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $program_name);

    if ($stmt->execute()) {
        // Redirect to the admin page with a success message
        header('Location: admin.html?message=Program added successfully');
        exit;
    } else {
        // Redirect to the admin page with an error message
        header('Location: admin.html?error_message=Error adding program');
        exit;
    }
}
?>
