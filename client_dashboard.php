<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #f4f7fa;
            min-height: 100vh;
        }
        .dashboard-container {
            max-width: 700px;
            margin: 40px auto;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.07);
            padding: 2rem 2rem 1.5rem 2rem;
        }
        .dashboard-header {
            background: #23406e;
            color: #fff;
            border-radius: 8px 8px 0 0;
            padding: 1rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .dashboard-header h4 {
            margin: 0;
            font-weight: 600;
            font-size: 1.2rem;
            letter-spacing: 1px;
        }
        .dashboard-header .nav {
            gap: 1rem;
        }
        .card-section {
            border-radius: 10px;
            border: 1px solid #e3e6ea;
            margin-bottom: 1.2rem;
            padding: 1.2rem;
            background: #f9fbfd;
        }
        .section-title {
            font-weight: 500;
            font-size: 1.05rem;
            margin-bottom: 0.7rem;
        }
        .btn-custom {
            background: #23406e;
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background: #18325b;
            color: #fff;
        }
        .progress {
            height: 7px;
            background: #e9ecef;
        }
        .progress-bar {
            background: #23406e;
        }
        .message-links a {
            display: block;
            color: #23406e;
            text-decoration: underline;
            margin-bottom: 4px;
        }
        @media (max-width: 768px) {
            .dashboard-container {
                padding: 1rem 0.2rem;
            }
        }
    </style>
</head>
<body>
<div class="dashboard-container">
    <div class="dashboard-header mb-4">
        <h4>CLIENT DASHBOARD</h4>
        <div class="nav">
            <a href="#" class="text-white">Notifications</a>
            <a href="#" class="btn btn-sm btn-light ms-2">Logout</a>
        </div>
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <div class="card-section mb-3">
                <div class="section-title">Submit Goods Declaration</div>
                <div class="mb-2">Goods Details</div>
                <button class="btn btn-custom">Submit Form</button>
            </div>
            <div class="card-section mb-3">
                <div class="section-title">Declaration Tracking</div>
                <div class="mb-1 d-flex justify-content-between" style="font-size:0.97em;">
                    <span>Submitted</span><span>Processing</span><span>Cleared</span>
                </div>
                <div class="progress mb-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%"></div>
                </div>
            </div>
            <div class="card-section">
                <div class="section-title">Download Report</div>
                <button class="btn btn-primary">Download PDF</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-section mb-3">
                <div class="section-title">Payment</div>
                <div class="mb-2">Balance<br><span style="font-size:1.2em;font-weight:600;">MWK 1,200.00</span></div>
                <button class="btn btn-success">Make Payment</button>
            </div>
            <div class="card-section">
                <div class="section-title">Messages</div>
                <div class="message-links">
                    <a href="#">To Agent</a>
                    <a href="#">To MRA</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
