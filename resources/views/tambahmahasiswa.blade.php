<!DOCTYPE html>
<!-- Ini adalah deklarasi tipe dokumen HTML. -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
    <!-- Ini adalah bagian kepala dokumen HTML yang berisi informasi metadata, seperti karakter set dan judul halaman. -->
</head>
<body>
    <!-- Judul halaman -->
    <h1>Tambah Mahasiswa</h1>
    <!-- Ini adalah tag heading (judul) utama halaman. -->
    
    <!-- Formulir untuk menambahkan mahasiswa -->
    <form action="/tambah-mahasiswa" method="post">
        @csrf <!-- Token CSRF untuk keamanan -->
        <!-- Ini adalah token CSRF yang digunakan untuk melindungi formulir dari serangan lintas situs (CSRF). -->
        
        <!-- Input untuk NIM -->
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        <!-- Ini adalah input untuk memasukkan NIM mahasiswa. -->
        
        <!-- Input untuk Nama -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <!-- Ini adalah input untuk memasukkan nama mahasiswa. -->
        
        <!-- Input untuk Alamat -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <!-- Ini adalah input untuk memasukkan alamat mahasiswa. -->
        
        <!-- Input untuk Tanggal Lahir -->
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <!-- Ini adalah input untuk memasukkan tanggal lahir mahasiswa. -->
        
        <!-- Input untuk Jenis Kelamin -->
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <!-- Ini adalah input berupa dropdown untuk memilih jenis kelamin mahasiswa. -->
        
        <!-- Input untuk Agama -->
        <div class="form-group">
            <label for="agama">Agama</label>
            <select class="form-control" id="agama" name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
        </div>
        <!-- Ini adalah input berupa dropdown untuk memilih agama mahasiswa. -->
        
        <!-- Input untuk Kelas -->
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
        </div>
        <!-- Ini adalah input berupa dropdown untuk memilih kelas mahasiswa. -->
        
        <!-- Tombol untuk menambahkan mahasiswa -->
        <button type="submit" class="btn btn-primary">Tambah</button>
        <!-- Ini adalah tombol yang digunakan untuk mengirimkan formulir dan menambahkan data mahasiswa. -->
    </form>
</body>
</html>
