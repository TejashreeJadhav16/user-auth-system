<?php
$conn = new mysqli("localhost", "root", "", "user_auth");

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>