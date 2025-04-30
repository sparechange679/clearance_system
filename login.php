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
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $result = $conn->query("SELECT * FROM users WHERE username='$username'");
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $usertype = strtolower($row['usertype']);
            if ($usertype === 'administrator') {
                header('Location: admin-dashboard.html');
            } elseif ($usertype === 'agent') {
                header('Location: agent-dashboard.html');
            } elseif ($usertype === 'keeper' || $usertype === 'whkeeper') {
                header('Location: keeper-dashboard.html');
            } elseif ($usertype === 'client') {
                header('Location: client-dashboard.html');
            } else {
                echo "<script>alert('Unknown user type.'); window.history.back();</script>";
            }
            exit();
        }
    }
    echo "<script>alert('Invalid username or password.'); window.history.back();</script>";
    exit();
}
?>
