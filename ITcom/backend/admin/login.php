<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div name="container">
        <div>
            <form action="login.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
                <br>
                <label for="password">Password:</label>
                <input type="password" name="password" required>
                <br>
                <input type="submit" name="login" value="LOGIN" />
            </form>
        </div>
    </div>
</body>

</html>

<?php
include '../config/koneksi.php';
session_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    header("Location: dashboard.php");
    exit();
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `tb_admin` WHERE  username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: dashboard.php");
        exit();
    } else {
        echo "<script>alert('Login gagal. Invalid username or password.');</script>";
    }
}