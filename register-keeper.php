<?php
// register-keeper.php: Handles keeper registration from admin-register-keeper.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "clearance_system1";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $keeper_username = trim($_POST['username']);
    $keeper_email = trim($_POST['email']);
    $keeper_password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    // Insert into keeper table
    $stmt = $conn->prepare("INSERT INTO keeper (username, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $keeper_username, $keeper_email, $keeper_password);
        if ($stmt->execute()) {
            echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#e0ffe0;border-radius:8px;text-align:center;">';
            echo '<h4>Keeper Registered Successfully!</h4>';
            echo '<a href="admin-register-keeper.php" class="btn btn-primary mt-3">Register Another Keeper</a>';
            echo '</div>';
        } else {
            echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#ffe0e0;border-radius:8px;text-align:center;">';
            echo '<h4>Error registering keeper.</h4>';
            echo '<p>' . htmlspecialchars($stmt->error) . '</p>';
            echo '<a href="admin-register-keeper.php" class="btn btn-secondary mt-3">Back to Form</a>';
            echo '</div>';
        }
        $stmt->close();
    } else {
        echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#ffe0e0;border-radius:8px;text-align:center;">';
        echo '<h4>Database Error.</h4>';
        echo '<p>' . htmlspecialchars($conn->error) . '</p>';
        echo '<a href="admin-register-keeper.php" class="btn btn-secondary mt-3">Back to Form</a>';
        echo '</div>';
    }
    $conn->close();
} else {
    // If accessed directly, redirect to the registration form
    header('Location: admin-register-keeper.php');
    exit();
}
?>
