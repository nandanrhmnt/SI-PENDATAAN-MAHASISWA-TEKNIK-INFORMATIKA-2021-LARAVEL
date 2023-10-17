<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendataan Mahasiswa</title>
    <style>
        body {
            /* Latar belakang menggunakan gambar */
            background: url('https://buzzup.id/wp-content/uploads/2021/08/profesi-programmer-sekarang-bergengsi.jpg');
            background-size: cover; /* Mengisi seluruh latar belakang */
            background-repeat: no-repeat; /* Tidak mengulang gambar latar belakang */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Latar belakang kontainer transparan */
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            max-width: 400px;
            text-align: center;
        }
        .heading {
            font-size: 24px;
            margin-bottom: 20px;
        }
        .button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007BFF; /* Warna latar tombol */
            color: #fff; /* Warna teks tombol */
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0056b3; /* Warna latar tombol saat hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Sistem Informasi Pendataan Mahasiswa Teknik Informatika 2021</h1>
        <p>Selamat datang di Sistem Informasi Pendataan Mahasiswa Teknik Informatika tahun 2021. Sistem ini memungkinkan Anda mengetahui biodata mahasiswa.</p>
        <a class="button" href="{{ route('register') }}">Register</a>
        <a class="button" href="{{ route('login') }}">Login</a>
    </div>

    <script>
        // Array gambar latar belakang
        const images = [
            'https://toffeedev.com/wp-content/uploads/2023/03/contoh-dan-tugas-programmer-1536x1025.png',
            'https://glints.com/id/lowongan/wp-content/uploads/2020/02/programmer-eyeem.jpeg',
            'https://caraguna.com/wp-content/uploads/2022/02/perbedaan-programmer-dan-developer.jpg',
            'https://toffeedev.com/wp-content/uploads/2023/03/contoh-dan-tugas-programmer-1536x1025.png',
            'https://www.simplilearn.com/ice9/free_resources_article_thumb/how_to_become_A_programmer.jpg'
        ];
        let currentImage = 0;

        // Fungsi untuk mengubah gambar latar belakang
        function changeBackground() {
            document.body.style.background = `url('${images[currentImage]}')`;
            currentImage = (currentImage + 1) % images.length;
        }

        // Mengubah gambar latar belakang secara otomatis setiap 3 detik
        setInterval(changeBackground, 3000);
    </script>
</body>
</html>
