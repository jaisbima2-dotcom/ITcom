<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>IT-Comp Dashboard</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="brand">IT-Comp</div>
            <nav>
                <a href="#" class="active">🏠 Dashboard</a>
                <a href="notifikasi.php">🔔 Notifikasi</a>
                <a href="verifikasi.php">📋 Verifikasi</a>
            </nav>
        </aside>

        <main class="main-content">
            <div class="top-section">
                <div class="panel welcome-panel">
                    <h1 style="font-size: 45px;">Welcome, (nama admin)!</h1>
                </div>
                <div class="panel stat-panel">
                    <p>Jumlah Peserta dari seluruh lomba :</p>
                    <div style="font-size: 40px; font-weight: bold; margin: 15px 0;">👤 9999999</div>
                    <button style="padding: 8px 20px; cursor: pointer;">Lihat Detail</button>
                </div>
            </div>

            <div class="bottom-section">
                <div class="chart-wrapper"><canvas id="lineChart"></canvas></div>
                <div class="chart-wrapper"><canvas id="pieChart"></canvas></div>
            </div>
        </main>

        <footer class="footer-full">
            © 2026 IT-Comp. All rights reserved
        </footer>
    </div>

    <script>
        
        const options = { maintainAspectRatio: false, responsive: true };
        
        new Chart(document.getElementById('lineChart'), {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Pendaftaran',
                    data: [10, 25, 15, 40, 30, 50],
                    borderColor: '#6a3d9a',
                    fill: true,
                    backgroundColor: 'rgba(106, 61, 154, 0.1)',
                    tension: 0.4
                }]
            },
            options: options
        });

        new Chart(document.getElementById('pieChart'), {
            type: 'pie',
            data: {
                labels: ['Web', 'Mobile', 'UI/UX', 'Networking'],
                datasets: [{
                    data: [40, 20, 25, 15],
                    backgroundColor: ['#6a3d9a', '#aec6cf', '#4b0082', '#1e90ff']
                }]
            },
            options: options
        });
    </script>
</body>
</html>