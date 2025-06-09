<?php
session_start();
include '../config/koneksi.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
}

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM siswa WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', nis='$nis', kelas='$kelas' WHERE id=$id");
    header("Location: data_siswa.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Siswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
  <h2>Edit Siswa</h2>
  <form method="POST">
    <input type="text" name="nama" class="form-control mb-2" value="<?= $data['nama'] ?>" required>
    <input type="text" name="nis" class="form-control mb-2" value="<?= $data['nis'] ?>" required>
    <input type="text" name="kelas" class="form-control mb-2" value="<?= $data['kelas'] ?>" required>
    <button class="btn btn-warning" name="update">Update</button>
    <a href="data_siswa.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>

