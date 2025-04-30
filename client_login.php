<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #00c6ff 0%, #0072ff 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .auth-container {
            max-width: 400px;
            margin: 60px auto;
            background: rgba(255,255,255,0.09);
            border-radius: 16px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.17);
            padding: 2.5rem 2rem 2rem 2rem;
            color: #003366;
        }
        .logo-container {
            text-align: center;
        }
        .logo-container img {
            max-width: 100px;
            margin-bottom: 12px;
        }
        .form-label {
            color: #003366;
        }
        .form-control {
            background: rgba(255,255,255,0.3);
            color: #003366;
            border: none;
        }
        .form-control:focus {
            background: #fff;
            color: #003366;
        }
        .btn-info {
            background: #0072ff;
            border: none;
            color: #fff;
        }
        .btn-info:hover {
            background: #005bb5;
        }
        .footer {
            background: #003366;
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
                <h2 class="mt-3">Client Login</h2>
            </div>
            <form method="post" action="client_dashboard.php" autocomplete="off">
                <div class="mb-3">
                    <label for="clientEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="clientEmail" name="email" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="clientPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="clientPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-info w-100">Login</button>
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
