<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Keeper | MRA Clearance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .register-container {
            max-width: 420px;
            margin: 60px auto;
            background: rgba(255,255,255,0.08);
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
        .btn-primary {
            background: #003366;
            border: none;
        }
        .btn-primary:hover {
            background: #005580;
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
        <div class="register-container">
            <div class="logo-container">
                <img src="https://www.mra.mw/assets/fe/images/logo.png" alt="Malawi Revenue Authority">
                <h2 class="mt-3">Register New Keeper</h2>
            </div>
            <form method="post" action="register-keeper.php" autocomplete="off">
                <div class="mb-3">
                    <label for="keeperUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="keeperUsername" name="username" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="keeperEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="keeperEmail" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="keeperPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="keeperPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register Keeper</button>
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
