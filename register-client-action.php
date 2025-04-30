<?php
// register-client-action.php: Handles client registration from register-client.php

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
    $client_username = trim($_POST['username']);
    $client_tpin = trim($_POST['tpin']);
    $client_email = trim($_POST['email']);
    $client_password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    // Insert into client table
    $stmt = $conn->prepare("INSERT INTO client (username, tpin, email, password) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $client_username, $client_tpin, $client_email, $client_password);
        if ($stmt->execute()) {
            echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#e0ffe0;border-radius:8px;text-align:center;">';
            echo '<h4>Client Registered Successfully!</h4>';
            echo '<a href="register-client.php" class="btn btn-info mt-3">Register Another Client</a>';
            echo '</div>';
        } else {
            echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#ffe0e0;border-radius:8px;text-align:center;">';
            echo '<h4>Error registering client.</h4>';
            echo '<p>' . htmlspecialchars($stmt->error) . '</p>';
            echo '<a href="register-client.php" class="btn btn-secondary mt-3">Back to Form</a>';
            echo '</div>';
        }
        $stmt->close();
    } else {
        echo '<div style="margin:2rem auto;max-width:400px;padding:2rem;background:#ffe0e0;border-radius:8px;text-align:center;">';
        echo '<h4>Database Error.</h4>';
        echo '<p>' . htmlspecialchars($conn->error) . '</p>';
        echo '<a href="register-client.php" class="btn btn-secondary mt-3">Back to Form</a>';
        echo '</div>';
    }
    $conn->close();
} else {
    // If accessed directly, redirect to the registration form
    header('Location: register-client.php');
    exit();
}
?>
