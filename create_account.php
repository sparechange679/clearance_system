<?php
// Database connection (update with your credentials)
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'clearance_system1';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $conn->real_escape_string($_POST['firstname']);
    $surname = $conn->real_escape_string($_POST['surname']);
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);
    if ($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match.'); window.history.back();</script>";
        exit();
    }
    // Check if username exists
    $check = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Username already exists.'); window.history.back();</script>";
        exit();
    }
    // Insert into users table
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users (username, password, usertype) VALUES ('$username', '$hashed', 'administrator')");
    // Insert into administrator table
    $conn->query("INSERT INTO administrator (firstname, surname, username, email, password) VALUES ('$firstname', '$surname', '$username', '$email', '$hashed')");
    echo "<script>alert('Account created successfully!'); window.location.href='login.html';</script>";
    exit();
}
?>
