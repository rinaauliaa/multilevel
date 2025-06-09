<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dashboard Siswa</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    body {
  margin: 0;
  font-family: 'Segoe UI', sans-serif;
  background: #f2f5f9;
  color: #333;
}

.container {
  padding: 15px;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  height: 40px;
}

.avatar i {
  font-size: 30px;
  color: #2d6cdf;
}

.card {
  background: white;
  border-radius: 16px;
  padding: 16px;
  margin: 16px 0;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
}

.center {
  text-align: center;
}

.user-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.user-avatar i {
  font-size: 30px;
  margin-right: 10px;
  color: #555;
}

.logout-btn {
  background: #ef5350;
  color: white;
  border: none;
  padding: 8px 14px;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
  text-decoration: none;
}

.info-libur {
  display: flex;
  align-items: center;
  gap: 10px;
}

.info-libur i {
  color: green;
  font-size: 28px;
}

.green {
  color: green;
}

.menu-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 12px;
}

.menu-item {
  background: white;
  text-align: center;
  padding: 18px;
  border-radius: 16px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  font-size: 14px;
}

.menu-item i {
  font-size: 24px;
  margin-bottom: 6px;
  display: block;
  color: #333;
}

.bottom-nav {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  background: white;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px 0;
  border-top: 1px solid #ccc;
}

.bottom-nav div {
  display: flex;
  flex-direction: column;
  align-items: center;
  font-size: 12px;
  color: #555;
}

.bottom-nav i {
  font-size: 18px;
}

.btn {
  text-decoration: none;
  color: black;
}

.btn1 {
  text-decoration: none;
  color: white;
}

  </style>
</head>
<body>
  <div class="container">
    <header class="header">
      <img src="smk2.jpeg" alt="Logo" class="logo">
      <h2>Selamat pagi, RINA</h2>
      <div class="avatar"><i class="fas fa-user-circle"></i></div>
    </header>
    

    <section class="card center">
      <p><strong id="tanggal"></strong></p>
      <h1 id="jam"></h1>
    </section>

    <section class="card user-info">
      <div class="user-avatar"><i class="fas fa-user"></i></div>
      <div>
        <strong>RINA AULIA H</strong><br/>
        <span> <center> X PPLG 2</center> </span>
     </div>
      <button class="logout-btn"> <a href="logout.php"  class="btn1">Logout </a></button>
    </section>

    <section class="card info-libur">
      <i class="fas fa-calendar-check"></i>
      <div>
        <strong class="green">Hari Libur</strong>
        <p>Hari ini libur. Gunakan waktu ini untuk istirahat.</p>
      </div>
    </section>

    <section class="menu-grid">
      <div class="menu-item"><i class="fas fa-tasks"> <a href=""  class="btn"> </i><span>Rekap Tugas </a></span></div>
      <div class="menu-item"><i class="fas fa-paper-plane"> <a href=""  class="btn"> </i><span>Kirim Tugas </a></span></div>
      <div class="menu-item"><i class="fas fa-fingerprint "> <a href="user/lihat_siswa.php" class="btn"> </i><span>Data Siswa</span></div>
    </section>
  </div>

  <nav class="bottom-nav">
    <div><i class="fas fa-home"></i><span>Home</span></div>
    <div><i class="fas fa-chalkboard-teacher"></i><span>Kelas</span></div>
    <div><i class="fas fa-qrcode"></i><span>Presensi</span></div>
    <div><i class="fas fa-user"></i><span>Profil</span></div>
   
  </nav>

  <script>
    const jam = document.getElementById("jam");
    const tanggal = document.getElementById("tanggal");

    function updateWaktu() {
      const now = new Date();
      jam.textContent = now.toLocaleTimeString('id-ID');
      tanggal.textContent = now.toLocaleDateString('id-ID', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
    }

    setInterval(updateWaktu, 1000);
    updateWaktu();
  </script>
</body>
</html>

