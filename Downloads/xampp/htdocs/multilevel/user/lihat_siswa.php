<?php
session_start();
include '../config/koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lihat Data Siswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
  <h2>Data Siswa</h2>
  <table class="table table-striped table-hover">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>NIS</th>
      <th>Kelas</th>
    </tr>
    <?php $no=1; while($row = mysqli_fetch_array($query)): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['nis'] ?></td>
      <td><?= $row['kelas'] ?></td>
    </tr>
    <?php endwhile; ?>
  </table>
  <div class="d-flex justify-content-center">
  <a href="../dashboard_user.php" class="btn btn-secondary mb-3">
    <i class="fa-solid fa-arrow-right-to-bracket"></i> Kembali ke Dashboard </a>
</div>
</div>
</body>
</html>

