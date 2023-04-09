<?php
require_once 'db_connect.php';

// Fetch programs from the database
$sql_programs = "SELECT id, programme FROM programs";
$result_programs = mysqli_query($conn, $sql_programs);

$programs = [];

if (mysqli_num_rows($result_programs) > 0) {
    while ($row = mysqli_fetch_assoc($result_programs)) {
        $programs[] = $row;
    }
}

// Fetch courses from the database
$sql_courses = "SELECT id, course_name, course_code, program_id FROM courses";
$result_courses = mysqli_query($conn, $sql_courses);

$courses = [];

if (mysqli_num_rows($result_courses) > 0) {
    while ($row = mysqli_fetch_assoc($result_courses)) {
        $courses[] = $row;
    }
}

// Store programs and courses in session variables
$_SESSION['programs'] = $programs;
$_SESSION['courses'] = $courses;
?>
