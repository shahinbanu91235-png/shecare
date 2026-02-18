<?php
session_start();
include "db_connect.php";

$id = $_SESSION['user_id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo json_encode($row);
?>

