<?php
include '../config/koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama_lengkap'];
$kelamin = $_POST['kelamin'];
$derajat = $_POST['derajat'];
$nama_sekolah = $_POST['nama_sekolah'];
$kelas = $_POST['kelas'];
$nama_tim = $_POST['nama_tim'];
$no_tlpn = $_POST['no_tlpn'];

$query = mysqli_query($koneksi, "UPDATE `pendaftaran_lomba` SET `nama_lengkap`='$nama',`kelamin`='$kelamin',`derajat`='$derajat',`nama_sekolah`='$nama_sekolah',`kelas`='$kelas',`nama_tim`='$nama_tim',`no_tlpn`='$no_tlpn' WHERE nisn='$nisn'");

if ($query) {
    echo "<script>
        alert('Data berhasil diupdate');
        window.location.href = 'laporan.php';
    </script>";
} else {
    echo "<script>alert('Data gagal diupdate');
    window.location.href = 'laporan.php';
    </script>";
}
?>
?>