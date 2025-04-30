<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #004d40 0%, #009688 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .auth-container {
            max-width: 400px;
            margin: 60px auto;
            background: rgba(255,255,255,0.07);
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            padding: 2.5rem 2rem 2rem 2rem;
            color: #fff;
        }
        .logo-container {
            text-align: center;
        }
        .logo-container img {
            max-width: 100px;
            margin-bottom: 12px;
        }
        .form-label {
            color: #fff;
        }
        .form-control {
            background: rgba(255,255,255,0.3);
            color: #004d40;
            border: none;
        }
        .form-control:focus {
            background: #fff;
            color: #004d40;
        }
        .btn-success {
            background: #009688;
            border: none;
        }
        .btn-success:hover {
            background: #00796b;
        }
        .footer {
            background: #004d40;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-container">
            <div class="logo-container">
                <img src="https://www.mra.mw/assets/fe/images/logo.png" alt="Malawi Revenue Authority">
                <h2 class="mt-3">Agent Login</h2>
            </div>
            <form method="post" action="agent-dashboard.php" autocomplete="off">
                <div class="mb-3">
                    <label for="agentTpin" class="form-label">TPIN</label>
                    <input type="text" class="form-control" id="agentTpin" name="tpin" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="agentPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="agentPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Login</button>
            </form>
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
