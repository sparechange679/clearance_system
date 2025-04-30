<?php
// register-agent.php: Handles agent registration and user creation

// Database connection (update credentials as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clearance_system1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get and sanitize POST data
$agent_username = trim($_POST['username']);
$agent_email = trim($_POST['email']);
$agent_password = trim($_POST['password']);
$agent_tpin = trim($_POST['tpin']);
$licensed_number = trim($_POST['licensed_number']);

// Hash the password for security
$hashed_password = password_hash($agent_password, PASSWORD_BCRYPT);

// Start transaction
$conn->begin_transaction();

try {
    // Insert into agent table (now with licensed_number)
    $stmt1 = $conn->prepare("INSERT INTO agent (username, email, password, tpin, licensed_number) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt1) {
        throw new Exception("Prepare failed for agent: " . $conn->error);
    }
    $stmt1->bind_param("sssss", $agent_username, $agent_email, $hashed_password, $agent_tpin, $licensed_number);
    $stmt1->execute();

    // Insert into users table (tpin as username, password, usertype='agent')
    $stmt2 = $conn->prepare("INSERT INTO users (username, password, usertype) VALUES (?, ?, 'agent')");
    if (!$stmt2) {
        throw new Exception("Prepare failed for users: " . $conn->error);
    }
    $stmt2->bind_param("ss", $agent_tpin, $hashed_password);
    $stmt2->execute();

    $conn->commit();
    echo "<div style='margin:2rem auto;max-width:400px;padding:2rem;border:1px solid #28a745;border-radius:8px;background:#e9fbe9;text-align:center;'>";
    echo "<h3 style='color:#28a745;'>Agent registered successfully!</h3>";
    echo "<a href='admin-register-agent.html' style='display:inline-block;margin-top:1rem;'>&larr; Register another agent</a>";
    echo "</div>";
} catch (Exception $e) {
    $conn->rollback();
    echo "<div style='margin:2rem auto;max-width:400px;padding:2rem;border:1px solid #dc3545;border-radius:8px;background:#fbe9e9;text-align:center;'>";
    echo "<h3 style='color:#dc3545;'>Error: " . htmlspecialchars($e->getMessage()) . "</h3>";
    echo "<a href='admin-register-agent.html' style='display:inline-block;margin-top:1rem;'>&larr; Try again</a>";
    echo "</div>";
}

if (isset($stmt1) && $stmt1) $stmt1->close();
if (isset($stmt2) && $stmt2) $stmt2->close();
$conn->close();
?>
