<?php
session_start();
include 'config/koneksi.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username' AND password='$password'");
  $data = mysqli_fetch_array($query);

  if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    if ($data['role'] == 'admin') {
      header("Location: dashboard_admin.php");
    } else {
      header("Location: dashboard_user.php");
    }
  } else {
    echo "<script>alert('Login gagal!');</script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .login-box {
      background: #fff;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.05);
      text-align: center;
    }
    .login-box img {
      width: 80px;
      margin-bottom: 15px;
    }
    .login-box h2 {
      margin-bottom: 10px;
      font-weight: bold;
    }
    .form-control {
      border-radius: 8px;
    }
    .btn-primary {
      border-radius: 8px;
      background-color: #007bff;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="col-md-4 login-box">
      <img src="smk2.jpeg" alt="Logo">
      <h2>Selamat Datang</h2>
      <p class="text-muted mb-4">Silakan login untuk melanjutkan</p>
      <form method="POST">
        <input type="text" name="username" class="form-control mb-3" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
