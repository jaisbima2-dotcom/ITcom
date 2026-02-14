<?php
include '../config/koneksi.php';

$nisn = $_GET['nisn'];
mysqli_query($koneksi, "DELETE FROM pendaftaran_lomba WHERE nisn='$nisn'");

header("Location: laporan.php");
?>