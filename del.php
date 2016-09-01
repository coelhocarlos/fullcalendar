<?php
include 'db_conn.php';
// Create connection
$conn = new mysqli('localhost', 'root', '', 'mydb');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM `noticias` WHERE `id` = 2";
$query = $mysqli->query($sql);
echo 'Registros afetados: ' . $query->affected_rows;
?>
