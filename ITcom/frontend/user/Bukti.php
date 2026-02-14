<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pendaftaran - IT-Comp</title>
    <link rel="stylesheet" href="Bukti.css">
</head>

<body>
    <h1 align="center">BUKTI PENDAFTARAN PERLOMBAAN</h1>
    <table align="center">
        <?php
        include "../../config/koneksi.php";

        $nisn = $_GET['nisn'];
        $query = mysqli_query($koneksi, "SELECT * FROM pendaftaran_lomba WHERE nisn='$nisn'");
        $data = mysqli_fetch_array($query);

        if ($data) { ?>
            <tr>
                <td>NISN</td>
                <td><?= $data['nisn'] ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?= $data['nama_lengkap'] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?= $data['kelamin'];?></td>
            </tr>
            <tr>
                <td>Tingkat</td>
                <td><?= $data['derajat'] ?></td>
            </tr>
            <tr>
                <td>Nama Sekolah</td>
                <td><?= $data['nama_sekolah'] ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><?= $data['kelas'] ?></td>
            </tr>
            <tr>
                <td>Nama Tim</td>
                <td><?= $data['nama_tim'] ?></td>
            </tr>
            <tr>
                <td>No.Telepon</td>
                <td><?= $data['no_tlpn'] ?></td>
            </tr>
            <?php
        } ?>




    </table>





</body>

</html>