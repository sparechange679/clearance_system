<?php /* Agent Dashboard - Professional Layout with Footer at Page Bottom */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Dashboard | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            flex-direction: column;
        }
        .container-fluid {
            flex: 1 0 auto;
        }
        .sidebar {
            min-height: 100vh;
            background: #003366;
            color: #fff;
            padding-top: 2rem;
        }
        .sidebar .nav-link {
            color: #fff;
            font-weight: 500;
            margin-bottom: 1rem;
            border-radius: 4px;
            transition: background 0.2s;
        }
        .sidebar .nav-link.active, .sidebar .nav-link:hover {
            background: #00509e;
            color: #fff;
        }
        .dashboard-content {
            padding: 2rem 2rem 0 2rem;
        }
        .dashboard-header {
            margin-bottom: 2rem;
        }
        .footer {
            background: #003366;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            margin-top: auto;
            box-shadow: 0 -2px 16px rgba(0,0,0,0.05);
        }
        .card {
            border-radius: 12px;
        }
        @media (max-width: 768px) {
            .dashboard-content {
                padding: 1rem 0.5rem 0 0.5rem;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row min-vh-100">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="position-sticky d-flex flex-column h-100">
                <ul class="nav flex-column mb-auto">
                    <li class="nav-item mb-3">
                        <a class="navbar-brand text-white" href="#" style="font-size:1.3rem; font-weight:bold;">
                            <i class="fas fa-user-tie me-2"></i>Agent Panel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-plus-circle me-2"></i>Create Declaration
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-eye me-2"></i>View Declaration
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-money-bill-wave me-2"></i>View Payments Done by Client
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-tasks me-2"></i>Declaration Status
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4 dashboard-content">
            <div class="dashboard-header">
                <h1 class="h2 mb-0"><i class="fas fa-home me-2"></i>Welcome, Agent!</h1>
                <p class="text-muted">Manage declarations and payments efficiently using the navigation options.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-plus-circle text-primary me-2"></i>Create Declaration</h5>
                            <p class="card-text">Start a new declaration for a client.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-eye text-success me-2"></i>View Declaration</h5>
                            <p class="card-text">Check all declarations you have submitted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-money-bill-wave text-warning me-2"></i>View Payments</h5>
                            <p class="card-text">See payments made by your clients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fas fa-tasks text-info me-2"></i>Declaration Status</h5>
                            <p class="card-text">Track the status of your declarations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <small>&copy; 2024 MRA | Clearance System v1.0. All Rights Reserved.</small>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
