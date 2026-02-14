<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi - IT-Comp</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            background-color: #f9f9f9;
        }

        /* Container Utama */
        .main-wrapper {
            display: flex;
            flex: 1;
        }

        /* Sidebar di Kiri */
        .sidebar {
            width: 200px;
            background-color: #6a429b; /* Warna ungu sidebar */
            color: white;
            padding-top: 20px;
        }

        .sidebar-brand {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            padding: 0 10px;
        }

        .nav-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            text-decoration: none;
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
        }

        .nav-item.active {
            background-color: white;
            color: #6a429b;
            font-weight: bold;
        }

        /* Area Konten */
        .content {
            flex: 1;
            padding: 40px;
        }

        .title-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .title-section h1 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        /* Box Notifikasi */
        .notification-card {
            background: white;
            border: 1px solid #ccc;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 4px;
        }

        .notif-text {
            font-size: 14px;
            color: #333;
        }

        .btn-lihat {
            background-color: #a0c4ff; /* Warna biru muda tombol */
            border: 1px solid #7a9cc6;
            padding: 4px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 13px;
            box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        /* Footer */
        .footer {
            background-color: #6a429b;
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>

    <div class="main-wrapper">
        <div class="sidebar">
            <div class="sidebar-brand">IT-Comp</div>
            <a href="dashboard.php" class="nav-item">🏠 Dashboard</a>
            <a href="#" class="nav-item active">🔔 Notifikasi</a>
            <a href="verifikasi.php" class="nav-item">📋 Verifikasi</a>
        </div>

        <div class="content">
            <div class="title-section">
                <h1>Notifikasi (1)</h1>
                <span style="font-size: 24px;">🔔</span>
            </div>

            <div class="notification-card">
                <div class="notif-text">
                    &lt;Jumlah Peserta&gt; Peserta baru saja mendaftar pada lomba &lt;nama lomba&gt;
                </div>
                <button class="btn-lihat">Lihat</button>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2026 IT-Comp. All rights reserved
    </div>

</body>
</html>