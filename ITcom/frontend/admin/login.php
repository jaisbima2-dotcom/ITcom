<?php
session_start();

if (isset($_POST['login'])) {
    // sementara: tanpa database
    $_SESSION['admin'] = $_POST['username'];
    header("Location: dashboard.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - IT-Comp</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <div class="welcome-text">
                <h1>Welcome!</h1>
                <p>Selamat Datang di Website IT-Comp, Website yang dikhususkan untuk memberikan info perihal perlombaan khusus IT!</p>
            </div>
        </div>

        <div class="login-right">
            <div class="login-box">
                <h2>Admin Login</h2>
                <form action="#">
                    <div class="input-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="input-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="login-footer">
                        <button onclick="location.href='dashboard.php'" class="btn-login">
                            <span class="user-icon">👤</span>Login</button>
                    </div>
                </form>
                <p class="legal-text">Terms Of Use | Privacy Policy</p>
            </div>
        </div>
    </div>
</body>
</html>