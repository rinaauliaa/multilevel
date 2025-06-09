<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Guru</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        
        body {
            background-color: #f5f5f7;
            color: #333;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo img {
            height: 40px;
        }
        
        .user-profile {
            display: flex;
            align-items: center;
        }
        
        .welcome {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        
        .date-time {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .date {
            font-size: 18px;
            margin-bottom: 10px;
        }
        
        .time {
            font-size: 32px;
            font-weight: bold;
        }
        
        .user-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .user-details {
            display: flex;
            align-items: center;
        }
        
        .user-icon {
            background-color: #f0f0f0;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
        
        .user-text {
            text-align: center;
        }
        
        .name {
            font-weight: bold;
            font-size: 18px;
        }
        
        .role {
            color: #666;
        }
        
        .logout-btn {
            background-color: #ff5757;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }
        
        .announcement {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .announcement-title {
            color: #1e88e5;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .announcement-icon {
            color: #1e88e5;
            margin-right: 10px;
        }
        
        .announcement-text {
            margin-top: 10px;
        }
        
        .menu-cards {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin: 30px 0;
        }
        
        .menu-card {
            background-color: white;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            flex: 1;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s;
        }
        
        .menu-card:hover {
            transform: translateY(-5px);
        }
        
        .menu-icon {
            font-size: 32px;
            margin-bottom: 15px;
        }
        
        .task-summary {
            color: #6a5acd;
        }
        
        .student-data {
            color: #ff7043;
        }
        
        .grades {
            color: #4caf50;
        }
        
        .stats-cards {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin: 30px 0;
        }
        
        .stats-card {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            flex: 1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }
        
        .stats-title {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .stats-value {
            font-size: 24px;
            font-weight: bold;
        }
        
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: white;
            display: flex;
            justify-content: space-around;
            padding: 15px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .nav-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #666;
            text-decoration: none;
            font-size: 12px;
        }
        
        .nav-icon {
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .active {
            color: #1e88e5;
        }
        
        @media screen and (max-width: 768px) {
            .menu-cards {
                flex-direction: column;
            }
            
            .stats-cards {
                flex-direction: column;
            }
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
        <header>
            <div class="logo">
                <img src="smk2.jpeg" alt="Logo">
            </div>
            <div class="welcome">Selamat pagi, BUDI</div>
            <div class="user-profile"></div>
        </header>
        
        <div class="date-time">
            <div class="date">Kamis, 24 April 2025</div>
            <div class="time" id="current-time">09.40.48</div>
        </div>
        
        <div class="user-info">
            <div class="user-details">
                <div class="user-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="user-text">
                    <div class="name">BUDI SANTOSO, S.Pd.</div>
                    <div class="role">Guru Mata Pelajaran Pemrograman</div>
                </div>
            </div>
            <button class="logout-btn" ><a href="index.php" class="btn1">Logout </a></button>
        </div>
        
        <div class="announcement">
            <div class="announcement-title">
                <span class="announcement-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                </span>
                Pengumuman
            </div>
            <div class="announcement-text">Ada rapat guru pada hari Jumat, 25 April 2025 pukul 10.00 WIB di Ruang Rapat Utama.</div>
        </div>
        
        <div class="stats-cards">
            <div class="stats-card">
                <div class="stats-title">Total Kelas</div>
                <div class="stats-value">8</div>
            </div>
            <div class="stats-card">
                <div class="stats-title">Total Siswa</div>
                <div class="stats-value">256</div>
            </div>
            <div class="stats-card">
                <div class="stats-title">Tugas Menunggu</div>
                <div class="stats-value">42</div>
            </div>
        </div>
        
        <div class="menu-cards">
            <div class="menu-card">
                <div class="menu-icon task-summary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="8" y1="6" x2="21" y2="6"></line>
                        <line x1="8" y1="12" x2="21" y2="12"></line>
                        <line x1="8" y1="18" x2="21" y2="18"></line>
                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                    </svg>
                </div>
                <div>Rekap Tugas</div>
            </div>
            
            <div class="menu-card">
                <div class="menu-icon student-data">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div> <a href="admin/data_siswa.php" class="btn"> Data Siswa </a></div>
            </div>
            
            <div class="menu-card">
                <div class="menu-icon grades">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                </div>
                <div>Nilai</div>
            </div>
        </div>
    </div>
    
    <div class="bottom-nav">
        <a href="#" class="nav-item active">
            <div class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
            </div>
            <div>Home</div>
        </a>
        
        <a href="#" class="nav-item">
            <div class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path>
                </svg>
            </div>
            <div>Kelas</div>
        </a>
        
        <a href="#" class="nav-item">
            <div class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                    <line x1="16" y1="13" x2="8" y2="13"></line>
                    <line x1="16" y1="17" x2="8" y2="17"></line>
                    <polyline points="10 9 9 9 8 9"></polyline>
                </svg>
            </div>
            <div>Laporan</div>
        </a>
        
        <a href="#" class="nav-item">
            <div class="nav-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>
            <div>Profil</div>
        </a>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            let hours = now.getHours().toString().padStart(2, '0');
            let minutes = now.getMinutes().toString().padStart(2, '0');
            let seconds = now.getSeconds().toString().padStart(2, '0');
            document.getElementById('current-time').textContent = `${hours}.${minutes}.${seconds}`;
        }
        
        setInterval(updateTime, 1000);
        updateTime();
    </script>
</body>
</html>