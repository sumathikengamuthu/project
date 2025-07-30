<?php
// login_process.php
$conn = new mysqli("localhost", "root", "", "beyondbooks");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Get user
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        echo "Login successful! Welcome " . $user['name'] . " (" . $user['role'] . ")";
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that email.";
}

$conn->close();
?>
