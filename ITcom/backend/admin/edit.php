<?php
include '../config/koneksi.php';

$nisn = $_GET['nisn'];
$data = mysqli_query($koneksi, "SELECT * FROM pendaftaran_lomba WHERE nisn='$nisn'");
$data = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <form action="update.php" method="POST">
            <td>Nisn</td>
            <td>:</td>
            <td><input type="text" name="nisn" value="<?php echo $data['nisn']; ?>" readonly></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>"></td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <td>:</td>
                <td><input type="text" name="kelamin" value="<?php echo $data['kelamin']; ?>"></td>
            </tr>
            <tr>
                <td>Derajat</td>
                <td>:</td>
                <td><input type="text" name="derajat" value="<?php echo $data['derajat']; ?>"></td>
            </tr>
            <tr>
                <td>Nama_sekolah</td>
                <td>:</td>
                <td><input type="text" name="nama_sekolah" value="<?php echo $data['nama_sekolah']; ?>"></td>
            </tr>
            <tr>
                
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
                
            </tr>
            <tr>
                <td>Nama Tim</td>
                <td>:</td>
                <td><input type="text" name="nama_tim" value="<?php echo $data['nama_tim']; ?>"></td>
            </tr>
            <tr></tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><input type="text" name="no_tlpn" value="<?php echo $data['no_tlpn']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Update"></td>
            </tr>
        </form>
    </table>
</body>

</html>