<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Peserta - IT-Comp</title>
    <style>
        /* Reset & Base Styles */
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
        }

        /* Navbar */
        .navbar {
            background-color: #5d3587; /* Warna Ungu Khas */
            color: white;
            padding: 15px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 25px;
            font-size: 14px;
        }

        /* Container Content */
        .container {
            background: white;
            margin: 30px auto;
            width: 90%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        /* Buttons */
        .btn-excel {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 5px 12px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-add {
            background-color: #17a2b8;
            color: white;
            border: none;
            padding: 5px 15px;
            border-radius: 4px;
            float: right;
            margin-bottom: 10px;
        }

        /* Table Style */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th {
            background-color: #e9ecef;
            color: #333;
            font-weight: 600;
            font-size: 13px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
            font-size: 13px;
        }
        .text-center { text-align: center; }

        /* Action Buttons */
        .btn-edit { background-color: #ffc107; border: none; padding: 2px 8px; border-radius: 3px; cursor: pointer; }
        .btn-delete { background-color: #dc3545; color: white; border: none; padding: 2px 8px; border-radius: 3px; cursor: pointer; }

        /* Footer */
        .footer {
            background-color: #5d3587;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <div style="font-size: 24px; font-weight: bold;">IT-Comp</div>
        <div class="nav-links">
            <a href="dashboard.php">🏠 Dashboard</a>
            <a href="notifikasi.php">🔔 Notifikasi</a>
            <a href="#">📋 Verifikasi</a>
        </div>
    </div>

    <div class="container">
        <div class="header-section">
            <h2 style="margin: 0;">Manage Peserta</h2>
            <button class="btn-excel">Excel</button>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px;">
            <div style="font-weight: bold; margin-bottom: 10px;">
                Data Peserta
                <button class="btn-add">+ Add</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nama Peserta</th>
                        <th>NISN</th>
                        <th>Gender</th>
                        <th>Nama Sekolah</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Tim</th>
                        <th class="text-center">Lomba</th>
                        <th>Telp</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Andi Pratama</td>
                        <td>0087456321</td>
                        <td>Laki-Laki</td>
                        <td>SMK Negeri 1 Jakarta</td>
                        <td class="text-center">XI</td>
                        <td class="text-center">Alpha</td>
                        <td >Cyber security</td>
                        <td>0812-3456-7890</td>
                        <td class="text-center">
                            <button class="btn-edit">Edit</button>
                            <button class="btn-delete">Delete</button>
                        </td>
                    </tr>
                    </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        &copy; 2026 IT-Comp. All rights reserved
    </div>

</body>
</html>