<?php
session_start();
require_once 'db_connect.php';
$programs = $conn->query("SELECT * FROM programs");
$courses = $conn->query("SELECT * FROM courses");

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user']['id'];
    $programme = $_POST['programme'];
    $course = $_POST['course'];
    $course_code = $_POST['course-code'];
    $preferred_time = $_POST['time'];
    $preferred_gender = $_POST['gender'];
    $notes = $_POST['notes'];

    $sql = "INSERT INTO tutor_request (user_id, programme, course, course_code, preferred_time, preferred_gender, notes) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('issssss', $user_id, $programme, $course, $course_code, $preferred_time, $preferred_gender, $notes);


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