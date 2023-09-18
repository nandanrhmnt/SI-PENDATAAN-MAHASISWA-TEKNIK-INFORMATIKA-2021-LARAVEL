<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <!-- Judul halaman -->
    <h1>Tambah Mahasiswa</h1>
    
    <!-- Formulir untuk menambahkan mahasiswa -->
    <form action="/tambah-mahasiswa" method="post">
        @csrf <!-- Token CSRF untuk keamanan -->
        
        <!-- Input untuk NIM -->
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required>
        </div>
        
        <!-- Input untuk Nama -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        
        <!-- Input untuk Alamat -->
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        
        <!-- Input untuk Tanggal Lahir -->
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        
        <!-- Input untuk Jenis Kelamin -->
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        
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
        
        <!-- Input untuk Kelas -->
        <div class="form-group">
            <label for="kelas">Kelas</label>
            <select class="form-control" id="kelas" name="kelas">
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
        </div>
        
        <!-- Tombol untuk menambahkan mahasiswa -->
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</body>
</html>
