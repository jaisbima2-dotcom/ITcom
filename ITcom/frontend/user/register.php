<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - IT-Comp</title>
    <style>
        /* Dasar desain agar mirip gambar */
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        /* Container Putih Utama */
        .registration-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 40px;
            border: 1px solid #999;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 14px;
            color: #000;
        }


        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 8px 12px;
            border: 1px solid #333;
            border-radius: 4px;
            font-size: 13px;
            background-color: #fff;
            box-sizing: border-box; 
        }


        ::placeholder {
            color: #ccc;
        }

        .btn-submit {
            display: block;
            width: fit-content;
            margin: 20px auto 0;
            background-color: #00c853;
            color: white;
            border: 1px solid #00a040;
            padding: 5px 25px;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            font-size: 14px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .btn-submit:hover {
            background-color: #00a846;
        }
    </style>
</head>
<body>

    <div class="registration-card">
        <h2>Registration</h2>

        <form action="#" method="POST">
            <div class="form-group">
                <label>NISN</label>
                <input type="text" name="nisn" required>
            </div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama">
            </div>

            <div class="form-group">
                <label>Kelamin</label>
                <select name="kelamin">
                    <option value="Laki-laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Tingkat</label>
                <select name="tingkat">
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nama Sekolah</label>
                <input type="text" name="nama_sekolah">
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <select name="kelas">
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nama Team</label>
                <input type="text" name="nama_team">
            </div>

            <div class="form-group">
                <label>No. Telepon</label>
                <input type="tel" name="no_telp">
            </div>

            <div class="form-group">
                <label>Gmail</label>
                <input type="email" name="gmail">
            </div>


            <div class="form-group">
                <label>Lomba</label>
                <select name="tingkat">
                    <option value="Cyber Security">Cyber Security</option>
                    <option value="Game Dev">Game Development</option>
                    <option value="Web Design">Web Design</option>
                    <option value="Networking">Networking</option>
                    <option value="IT Support">IT Support</option>
                </select>
            </div>
            <form action="Bukti.php" method="post">
            <button onclick="location.href='Bukti.php'" type="submit" class="btn-submit">Daftar</button>
            </form>
        </form>
    </div>

</body>
</html>