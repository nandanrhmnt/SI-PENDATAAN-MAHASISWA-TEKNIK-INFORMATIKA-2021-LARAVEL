<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pribadi Mahasiswa</title>
    <style>
        body {
            background-color: #add8e6; 
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #fff; 
            border-radius: 10px;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #007BFF;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd; /* Garis pinggir tabel */
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007BFF; /* Latar belakang header biru */
            color: #fff; /* Warna teks putih */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pribadi Mahasiswa</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswa as $mhs)
                <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->NIM }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>{{ $mhs->tanggal_lahir }}</td>
                    <td>{{ $mhs->jenis_kelamin }}</td>
                    <td>{{ $mhs->agama }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
