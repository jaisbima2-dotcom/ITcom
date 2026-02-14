<?php
include '../config/koneksi.php';
session_start();
session_destroy();
echo "<script>alert('Anda keluar dari akun.'); window.location.href = 'login.php';</script>";
?>