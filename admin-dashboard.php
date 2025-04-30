<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <!-- Add Bootstrap Animations CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #02301a;
            min-height: 100vh;
        }
        .sidebar .nav-link {
            color: #fff;
            padding: 12px 16px;  /* Increased padding to move links down */
            margin: 4px 0;       /* Added margin between links */
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #2c5282;  /* Changed to a deeper, navy blue */
        }
        /* Add hover effect using Bootstrap's shadow utilities */
        .card {
            transition: transform 0.2s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Update Sidebar with Bootstrap fixed classes -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse position-fixed">
                <div class="position-sticky pt-3 d-flex flex-column min-vh-100">
                    <!-- Add MRA Logo -->
                    <div class="text-center mb-3" style="border-bottom: 2px solid white;">
                        <img src="https://www.mra.mw/assets/fe/images/logo.png" alt="Malawi Revenue Authority" style="max-width: 80%; height: auto; filter: brightness(0) invert(1);">
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="admin-dashboard.php">
                                <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-staff-management.php">
                                <i class="fas fa-users me-2"></i>Staff Management
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-register-agent.php">
                                <i class="fas fa-user-plus me-2"></i>Register Agent
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-register-keeper.php">
                                <i class="fas fa-user-shield me-2"></i>Register Keeper
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-reports.php">
                                <i class="fas fa-chart-bar me-2"></i>Analytics Reports
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin-update-system.php">
                                <i class="fas fa-cogs me-2"></i>Update System
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Add Footer -->
                    <div class="mt-auto text-center text-white p-3" style="border-top: 1px solid rgba(255,255,255,0.2);">
                        <small>&copy; 2024 MRA</small><br>
                        <small>Clearance System v1.0</small>
                    </div>
                </div>
            </nav>

            <!-- Update main content with fixed header and adjusted margin -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom position-fixed bg-white" style="top: 0; right: 0; left: 16.66667%; z-index: 1000;">
                    <h1 class="h2 ms-4">Admin Dashboard</h1>
                </div>

                <!-- Add padding to prevent content from hiding under fixed header -->
                <div style="padding-top: 80px;">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card bg-primary text-white shadow animate__animated animate__fadeInUp">
                                <div class="card-body">
                                    <h5 class="card-title">Total Staff</h5>
                                    <p class="card-text display-4">25</p>
                                    <i class="fas fa-users fa-3x opacity-50 position-absolute bottom-0 end-0 m-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card bg-success text-white shadow animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="card-body">
                                    <h5 class="card-title">Active Agents</h5>
                                    <p class="card-text display-4">12</p>
                                    <i class="fas fa-user-tie fa-3x opacity-50 position-absolute bottom-0 end-0 m-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card bg-warning text-white shadow animate__animated animate__fadeInUp animate__delay-2s">
                                <div class="card-body">
                                    <h5 class="card-title">Active Keepers</h5>
                                    <p class="card-text display-4">8</p>
                                    <i class="fas fa-user-shield fa-3x opacity-50 position-absolute bottom-0 end-0 m-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 mb-3">
                            <div class="card bg-danger text-white shadow animate__animated animate__fadeInUp animate__delay-3s">
                                <div class="card-body">
                                    <h5 class="card-title">System Updates</h5>
                                    <p class="card-text display-4">2</p>
                                    <i class="fas fa-sync fa-3x opacity-50 position-absolute bottom-0 end-0 m-2"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="register-client.php" class="btn btn-info mb-3">
                        <i class="fas fa-user-plus me-2"></i>Register Client
                    </a>
                    <!-- Replace Charts Row with Tables -->
                    <div class="row mb-4">
                        <div class="col-md-8 mb-4">
                            <div class="card shadow animate__animated animate__fadeInLeft">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Staff Performance Overview</h5>
                                    <button class="btn btn-sm btn-outline-primary">Export</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Staff Name</th>
                                                    <th>Role</th>
                                                    <th>Tasks Completed</th>
                                                    <th>Status</th>
                                                    <th>Last Active</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chimwemwe Banda</td>
                                                    <td>Agent</td>
                                                    <td>45</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>2 mins ago</td>
                                                </tr>
                                                <tr>
                                                    <td>Thandiwe Phiri</td>
                                                    <td>Keeper</td>
                                                    <td>38</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>5 mins ago</td>
                                                </tr>
                                                <tr>
                                                    <td>Kondwani Mbewe</td>
                                                    <td>Agent</td>
                                                    <td>32</td>
                                                    <td><span class="badge bg-warning">Away</span></td>
                                                    <td>15 mins ago</td>
                                                </tr>
                                                <tr>
                                                    <td>Chifundo Kamanga</td>
                                                    <td>Keeper</td>
                                                    <td>41</td>
                                                    <td><span class="badge bg-danger">Offline</span></td>
                                                    <td>1 hour ago</td>
                                                </tr>
                                                <tr>
                                                    <td>Mphatso Chirwa</td>
                                                    <td>Agent</td>
                                                    <td>28</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>Just now</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow animate__animated animate__fadeInRight">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Top Performers</h5>
                                    <button class="btn btn-sm btn-outline-primary">View All</button>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Staff</th>
                                                    <th>Performance</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Chimwemwe Banda</td>
                                                    <td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 95%"></div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fas fa-star text-warning"></i> 4.9</td>
                                                </tr>
                                                <tr>
                                                    <td>Thandiwe Phiri</td>
                                                    <td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 88%"></div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fas fa-star text-warning"></i> 4.7</td>
                                                </tr>
                                                <tr>
                                                    <td>Kondwani Mbewe</td>
                                                    <td>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 82%"></div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fas fa-star text-warning"></i> 4.5</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activity and Quick Actions -->
                    <div class="row">
                        <div class="col-md-8 mb-4">
                            <div class="card shadow animate__animated animate__fadeInUp">
                                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                    <h5 class="mb-0">Recent Activity</h5>
                                    <button class="btn btn-sm btn-outline-primary">View All</button>
                                </div>
                                <div class="card-body">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-user-plus text-success me-2"></i>
                                                <span>New agent registered</span>
                                                <small class="text-muted d-block">Chikondi Gondwe - Agent ID #12345</small>
                                            </div>
                                            <small class="text-muted">2 mins ago</small>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-sync text-warning me-2"></i>
                                                <span>System update completed</span>
                                                <small class="text-muted d-block">Version 2.1.0 deployed</small>
                                            </div>
                                            <small class="text-muted">1 hour ago</small>
                                        </div>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="fas fa-shield-alt text-danger me-2"></i>
                                                <span>Security alert detected</span>
                                                <small class="text-muted d-block">Unauthorized access attempt</small>
                                            </div>
                                            <small class="text-muted">3 hours ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 mb-4">
                            <div class="card shadow animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="card-header bg-white">
                                    <h5 class="mb-0">Quick Actions</h5>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary btn-lg mb-2">
                                            <i class="fas fa-user-plus me-2"></i>Add New Staff
                                        </button>
                                        <button class="btn btn-success btn-lg mb-2">
                                            <i class="fas fa-download me-2"></i>Download Reports
                                        </button>
                                        <button class="btn btn-warning btn-lg mb-2">
                                            <i class="fas fa-bell me-2"></i>Send Notifications
                                        </button>
                                        <button class="btn btn-danger btn-lg">
                                            <i class="fas fa-cog me-2"></i>System Settings
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
