<!DOCTYPE html>
<!-- Ini adalah deklarasi tipe dokumen HTML. -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mahasiswa</title>
    <!-- Ini adalah bagian kepala dokumen HTML yang berisi informasi metadata, seperti karakter set dan judul halaman. -->
</head>
<body>
    <!-- Judul halaman -->
    <h1>Daftar Mahasiswa</h1>
    <!-- Ini adalah tag heading (judul) utama halaman. -->
    
    <!-- Tabel untuk menampilkan daftar mahasiswa -->
    <table class="table table-hover">
        <!-- Ini adalah tag tabel HTML dengan kelas CSS "table" dan "table-hover" untuk tampilan yang lebih baik. -->
        <thead>
            <!-- Baris kepala tabel -->
            <tr>
                <!-- Ini adalah baris kepala tabel yang berisi kolom-kolom data. -->
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Kelas</th>
                <!-- Ini adalah sel-sel kepala tabel yang mendefinisikan kolom-kolom data. -->
            </tr>
        </thead>
        <tbody>
            <!-- Baris-baris data mahasiswa -->
            <tr>
                <!-- Ini adalah baris-baris data mahasiswa dalam tabel. -->
                <td>1</td>
                <td>G1A021046</td>
                <td>Nanda Nurahmanita Putri</td>
                <td>Nusa Penida</td>
                <td>05-02-2004</td>
                <td>Perempuan</td>
                <td>Islam</td>
                <td>A</td>
                <!-- Ini adalah sel-sel data yang berisi informasi mahasiswa. -->
            </tr>
            <tr>
                <td>2</td>
                <td>G1A019022</td>
                <td>Budi Atmaja</td>
                <td>Bandung</td>
                <td>08-12-2002</td>
                <td>Laki-laki</td>
                <td>Islam</td>
                <td>B</td>
            </tr>
            <tr>
                <td>3</td>
                <td>G1A021091</td>
                <td>Citra Kirana</td>
                <td>Bogor</td>
                <td>13-12-2003</td>
                <td>Perempuan</td>
                <td>Katolik</td>
                <td>B</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
