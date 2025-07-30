<?php
$conn = new mysqli("localhost", "root", "", "beyondbooks");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
