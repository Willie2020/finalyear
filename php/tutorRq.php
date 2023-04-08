<?php
session_start();
require_once 'db_connect.php';

if (isset($_POST['submit'])) {
    $index_number = $_SESSION['user']['index_number'];
    $programme = $_POST['programme'];
    $course = $_POST['course'];
    $course_code = $_POST['course-code'];
    $preferred_time = $_POST['time'];
    $preferred_gender = $_POST['gender'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO tutor_request (index_number, programme, course, course_code, preferred_time, preferred_gender, notes) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $index_number, $programme, $course, $course_code, $preferred_time, $preferred_gender, $notes);

    if ($stmt->execute()) {
        // Redirect to the notification page
        header('Location: notification.php');
        exit;
    } else {
        $error_message = "Error submitting request. Please try again.";
        // Redirect back to the request page with the error message
        header("Location: request.php?error_message=" . urlencode($error_message));
        exit();
    }
}

?>