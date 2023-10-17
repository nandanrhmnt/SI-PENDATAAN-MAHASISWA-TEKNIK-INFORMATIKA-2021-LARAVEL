<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <style>
        body {
            background-color: #add8e6; 
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .container {
            display: flex;
        }

        .sidebar {
            background-color: #007BFF; 
            color: #fff;
            width: 250px;
            padding: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            margin: 10px 0;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .profile {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .profile img {
            max-width: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .charts {
            display: flex;
            justify-content: space-between;
        }

        .chart {
            background-color: #fff;
            flex: 1;
            padding: 20px;
            border-radius: 10px;
            margin: 0 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="profile">
                <img src="https://i.pinimg.com/736x/ad/20/81/ad20818dde8a21024378095c37c1cbba.jpg" alt="Foto Profil">
                <h4>Nama Admin</h4>
            </div>
            <a href="/admin/dashboard/datapribadimhs">Data Pribadi Mahasiswa</a>
            <a href="/admin/dashboard/dataakademikmhs">Data Akademik Mahasiswa</a>
            <a href="/admin/dashboard/datakegiatanmhs">Data Kegiatan Mahasiswa</a>
            <a href="/admin/dashboard/datalainnyamhs">Data Lainnya</a>
        </div>
        <div class="content">
            <h1>Dashboard Admin</h1>
            <div class="charts">
                <div class="chart">
                    <h2>Grafik Jenis Kelamin</h2>
                    <canvas id="jenisKelaminChart"></canvas>
                </div>
                <div class="chart">
                    <h2>Grafik Agama</h2>
                    <canvas id="agamaChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
