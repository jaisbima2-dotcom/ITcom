
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>
            <table border="1">
                <tr>
                    <th>Nisn</th>
                    <th>Nama_Lengkap</th>
                    <th>Kelamin</th>
                    <th>Derajat</th>
                    <th>Nama_sekolah</th>
                    <th>Kelas</th>
                    <th>Nama_Tim</th>
                    <th>No_Tlpn</th>
                    <th>Aksi</th>
                </tr>
                <?php
                include '../config/koneksi.php';
                $query = mysqli_query($koneksi, "SELECT * FROM `pendaftaran_lomba`");
                while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $data['nisn']; ?></td>
                        <td><?php echo $data['nama_lengkap']; ?></td>
                        <td><?php echo $data['kelamin']; ?></td>
                        <td><?php echo $data['derajat']; ?></td>
                        <td><?php echo $data['nama_sekolah']; ?></td>
                        <td><?php echo $data['kelas']; ?></td>
                        <td><?php echo $data['nama_tim']; ?></td>
                        <td><?php echo $data['no_tlpn']; ?></td>
                        
                        <td><a href="hapus.php?nisn=<?php echo $data['nisn']; ?>">Hapus </a>|<a
                               href="edit.php?nisn=<?php echo $data['nisn']; ?>"> Update</a></td>

                    </tr>
                    <?php
                }
                ?>
            </table>
            <a href="../User/registrasi.php"><button type="button">+ Tambah Data</button></a>
        </body>

        </html>