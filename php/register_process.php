<?php
// register_process.php
$conn = new mysqli("localhost", "root", "", "beyondbooks");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

// Insert into database
$sql = "INSERT INTO users (name, age, dob, father_name, mother_name, contact, address, email, password, role)
VALUES ('$name', '$age', '$dob', '$father_name', '$mother_name', '$contact', '$address', '$email', '$password', '$role')";

if ($conn->query($sql) === TRUE) {
    echo "Registered successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
