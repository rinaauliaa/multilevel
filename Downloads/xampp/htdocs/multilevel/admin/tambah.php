<?php
session_start();
include '../config/koneksi.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "INSERT INTO siswa (nama, nis, kelas) VALUES ('$nama','$nis','$kelas')");
    header("Location: data_siswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tambah Siswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2>Tambah Siswa</h2>
  <form method="POST">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
    <input type="text" name="nis" class="form-control mb-2" placeholder="NIS" required>
    <input type="text" name="kelas" class="form-control mb-2" placeholder="Kelas" required>
    <button class="btn btn-success" name="simpan">Simpan</button>
    <a href="data_siswa.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>

