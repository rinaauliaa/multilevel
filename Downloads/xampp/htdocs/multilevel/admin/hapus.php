<?php
session_start();
include '../config/koneksi.php';

if ($_SESSION['role'] != 'admin') {
    header("Location: ../index.php");
}

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE id=$id");
header("Location: data_siswa.php");
?>
