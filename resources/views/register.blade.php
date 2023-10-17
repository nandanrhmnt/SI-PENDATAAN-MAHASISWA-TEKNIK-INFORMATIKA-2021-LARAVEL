<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            background-color: #add8e6; /* Latar belakang halaman dengan warna baby blue */
            font-family: Arial, sans-serif; /* Jenis font dan jenis font cadangan */
            display: flex; /* Menggunakan model tata letak fleksibel */
            justify-content: center; /* Pusatkan konten secara horizontal */
            align-items: center; /* Pusatkan konten secara vertikal */
            height: 100vh; /* Tinggi viewport 100% */
            margin: 0; /* Hapus margin default */
        }
        .container {
            background-color: #fff; /* Latar belakang kontainer putih */
            border-radius: 10px; /* Tambahkan sudut melengkung pada elemen */
            padding: 20px; /* Ruang dalam dari elemen */
            width: 300px; /* Lebar kontainer */
            text-align: center; /* Pusatkan teks secara horizontal */
        }
        .heading {
            font-size: 24px; /* Ukuran font 24px */
            margin-bottom: 20px; /* Ruang bawah 20px dari elemen berikutnya */
        }
        .input-field {
            margin-bottom: 20px; /* Ruang bawah 20px dari elemen berikutnya */
        }
        .button {
            padding: 10px 20px; /* Padding pada tombol */
            background-color: #007BFF; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
            border: none; /* Hapus batasan elemen */
            border-radius: 5px; /* Tambahkan sudut melengkung pada tombol */
            text-align: center; /* Pusatkan teks tombol secara horizontal */
            text-decoration: none; /* Hapus dekorasi tautan */
            font-size: 16px; /* Ukuran font 16px */
            cursor: pointer; /* Ubah ikon kursor menjadi tanda tangan saat di atas tombol */
            margin-bottom: 20px; /* Ruang bawah 20px dari elemen berikutnya */
        }
        .button:hover {
            background-color: #0056b3; /* Warna latar belakang tombol saat tombol dihover */
        }
        .login-link {
            color: #007BFF; /* Warna teks tautan login */
            text-decoration: none; /* Hapus dekorasi tautan */
        }
        .login-link:hover {
            text-decoration: underline; /* Teks tautan login bergaris bawah saat dihover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="heading">Register</h1> <!-- Judul halaman register -->
        <div class="input-field">
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded"
                name="fullname"
                placeholder="Full Name" /> <!-- Input nama lengkap -->
        </div>

        <div class="input-field">
            <input 
                type="text"
                class="block border border-grey-light w-full p-3 rounded"
                name="email"
                placeholder="Email" /> <!-- Input alamat email -->
        </div>

        <div class="input-field">
            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded"
                name="password"
                placeholder="Password" /> <!-- Input kata sandi -->
        </div>

        <div class="input-field">
            <input 
                type="password"
                class="block border border-grey-light w-full p-3 rounded"
                name="confirm_password"
                placeholder="Confirm Password" /> <!-- Input konfirmasi kata sandi -->
        </div>

        <button
            type="submit"
            class="button"
        >Create Account</button> <!-- Tombol untuk membuat akun -->

        <div class="text-grey-dark">
            Already have an account? <!-- Tautan ke halaman login -->
            <a class="login-link" href="../login/">
                Log in
            </a>.
        </div>
    </div>
</body>
</html>
