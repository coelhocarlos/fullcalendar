<?php
include 'db_conn.php';

// Create connection
$mysqli = new mysqli('localhost', 'root', '', 'mydb');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO events (title, color, start,end)
VALUES ('test', '#c0392b', '2016-09-01 02:00:00','2016-09-01 02:00:00')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
