<?php
require_once 'db_connect.php';
$sql = "SELECT id, programme FROM programs";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['id'] . '">' . $row['programme'] . '</option>';
    }
}
?>
