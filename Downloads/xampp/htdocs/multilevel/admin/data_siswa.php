<?php
session_start();
include '../config/koneksi.php';
if ($_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
}

$query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Siswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="table-responsive mt-3 mb-2">
  <h2>Data Siswa</h2>
  <a href="tambah.php" class="btn btn-success mb-3">
  <i class="fa-solid fa-plus"></i> Tambah Data Siswa</a>

  <table class="table table-striped table-hover">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIS</th>
      <th>Kelas</th>
      <th>Aksi</th>
    </tr>
    <?php $no=1; while($row = mysqli_fetch_array($query)): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['nis'] ?></td>
      <td><?= $row['kelas'] ?></td>
      <td>
      <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-outline-warning">Edit</a>
      <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')" class="btn btn-outline-danger"> Hapus</a>

      </td>
    </tr>
    <?php endwhile; ?>
  </table>
  <div class="d-flex justify-content-center">
  <a href="../dashboard_admin.php" class="btn btn-secondary mb-3">
    <i class="fa-solid fa-arrow-right-to-bracket"></i> Kembali ke Dashboard</a></div>
</div>
</body>
</html>

