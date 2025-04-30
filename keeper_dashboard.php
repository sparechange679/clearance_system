<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keeper Dashboard | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            background: #f7f9fa;
            min-height: 100vh;
            color: #222;
        }
        .dashboard-header {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.06);
        }
        .badge-status {
            font-size: 0.95em;
            padding: 0.4em 0.8em;
        }
        .pie-chart-container {
            max-width: 250px;
            margin: 0 auto;
        }
        .section-title {
            font-size: 1.1rem;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .dashboard-label {
            font-size: 0.95em;
            color: #666;
        }
        .dashboard-value {
            font-weight: 600;
        }
        .footer {
            background: #003366;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            margin-top: 2rem;
        }
    </style>
</head>
<body>
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <span class="dashboard-header">Prime Cargo - Chileka</span>
        </div>
        <div>
            <span class="dashboard-label me-2">Keeper</span>
            <i class="fas fa-user-circle fa-lg"></i>
        </div>
    </div>
    <div class="row g-4">
        <!-- Incoming Shipments -->
        <div class="col-md-3">
            <div class="card p-3">
                <div class="section-title">Incoming Shipments</div>
                <table class="table table-sm mb-0">
                    <thead><tr><th>Shipment</th><th>Manifest No.</th></tr></thead>
                    <tbody>
                        <tr><td>Air conditioners</td><td>MN5678</td></tr>
                        <tr><td>Auto parts</td><td>MN5679</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Goods Awaiting Clearance -->
        <div class="col-md-3">
            <div class="card p-3">
                <div class="section-title">Goods Awaiting Clearance</div>
                <table class="table table-sm mb-0">
                    <thead><tr><th>Goods</th><th>Clearance Status</th><th>Days</th></tr></thead>
                    <tbody>
                        <tr><td>Electronic</td><td><span class="badge bg-warning text-dark badge-status">Pending Docs</span></td><td>3</td></tr>
                        <tr><td>Clothing</td><td><span class="badge bg-danger badge-status">For Inspection</span></td><td>1</td></tr>
                        <tr><td>Furniture</td><td><span class="badge bg-success badge-status">Cleared</span></td><td>2</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Cleared Goods Ready for Release -->
        <div class="col-md-3">
            <div class="card p-3">
                <div class="section-title">Cleared Goods Ready for Release</div>
                <table class="table table-sm mb-0">
                    <thead><tr><th>Goods</th><th>Manifest No.</th></tr></thead>
                    <tbody>
                        <tr><td>Pharmaceuticals</td><td>MN5678</td></tr>
                        <tr><td>Machinery</td><td>MN5677</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Damaged/Missing Reports -->
        <div class="col-md-3">
            <div class="card p-3 mb-3">
                <div class="section-title">Damaged/Missing Reports</div>
                <div class="text-muted text-center" style="height:56px;display:flex;align-items:center;justify-content:center;">No reports</div>
            </div>
            <div class="card p-3">
                <div class="section-title">Clearance Status</div>
                <div class="pie-chart-container">
                    <canvas id="clearancePieChart"></canvas>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <span class="me-2"><span class="badge bg-success">Cleared</span></span>
                    <span class="me-2"><span class="badge bg-warning text-dark">Pending</span></span>
                    <span><span class="badge bg-danger">Inspect</span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <small>&copy; 2024 MRA | Clearance System v1.0. All Rights Reserved.</small>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Pie chart for Clearance Status
    const ctx = document.getElementById('clearancePieChart').getContext('2d');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Cleared', 'Pending', 'Inspect'],
            datasets: [{
                data: [1, 1, 1], // Example static values
                backgroundColor: ['#198754', '#ffc107', '#dc3545'],
                borderWidth: 1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
</body>
</html>
