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
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        .action-buttons {
            margin-top: 20px;
        }

        .action-buttons a {
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-right: 10px;
        }

        .action-buttons a:hover {
            background-color: #0056b3;
        }

        .delete-button button {
            background-color: #ff4444;
        }

        .delete-button button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Pribadi Mahasiswa</h1>

        <table>
            <tr>
                <th>Nama</th>
                <td>{{ $student->nama }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $student->NIM }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $student->alamat }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $student->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $student->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>{{ $student->agama }}</td>
            </tr>
        </table>

        <div class="action-buttons">
            <a href="{{ route('admin.data_pribadi.edit', $student) }}">Edit</a>
            <div class="delete-button">
                <form action="{{ route('admin.data_pribadi.destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
