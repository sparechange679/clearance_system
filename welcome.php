<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .navbar-brand {
            font-weight: bold;
            letter-spacing: 1px;
        }
        .hero-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 4rem 1rem 2rem 1rem;
        }
        .hero-section h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #003366;
        }
        .hero-section p {
            font-size: 1.25rem;
            color: #333;
            margin-bottom: 2.5rem;
        }
        .footer {
            background: #003366;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            margin-top: auto;
        }
        .nav-btns .btn {
            margin: 0 0.5rem;
            min-width: 120px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-building-columns me-2"></i>MRA Clearance System
            </a>
            <div class="nav-btns ms-auto">
                <a href="admin_login.php" class="btn btn-light btn-outline-primary me-2">Admin</a>
                <a href="agent_login.php" class="btn btn-light btn-outline-success me-2">Agent</a>
                <a href="keeper_login.php" class="btn btn-light btn-outline-warning me-2">Keeper</a>
                <a href="client_login.php" class="btn btn-light btn-outline-info">Client</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <h1>Welcome to the MRA Clearance System</h1>
        <p>
            Streamline your clearance processes with ease. Select your role to get started:<br>
            <span class="text-muted">Admin, Agent, Keeper, or Client</span>
        </p>
        <div class="nav-btns">
            <a href="admin_login.php" class="btn btn-primary btn-lg"><i class="fas fa-user-shield me-2"></i>Admin</a>
            <a href="agent_login.php" class="btn btn-success btn-lg"><i class="fas fa-user-tie me-2"></i>Agent</a>
            <a href="keeper_login.php" class="btn btn-warning btn-lg text-white"><i class="fas fa-user-shield me-2"></i>Keeper</a>
            <a href="client_login.php" class="btn btn-info btn-lg text-white"><i class="fas fa-user me-2"></i>Client</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <small>&copy; 2024 MRA | Clearance System v1.0. All Rights Reserved.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
