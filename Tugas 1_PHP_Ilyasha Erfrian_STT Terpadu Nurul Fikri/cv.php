<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .profile {
            display: flex;
            align-items: center;
        }
        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-right: 20px;
        }
        .profile h1, .profile p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php
            $nama = "Ilyasha Erfrian";
            $email = "ilyasha789@gmail.com";
            $telepon = "0896-3956-9075";
            $alamat = "Jl. Rawa Sari No.04, Kota Depok";
            $gambar = "https://via.placeholder.com/150"; // URL gambar placeholder

            echo "<img src='$gambar' alt='Foto Profil'>";
            echo "<div>";
            echo "<h1>$nama</h1>";
            echo "<p>Email: $email</p>";
            echo "<p>Telepon: $telepon</p>";
            echo "<p>Alamat: $alamat</p>";
            echo "</div>";
            ?>
        </div>

        <h2>Pendidikan</h2>
        <ul>
            <li>SMP Wira Buana (2014-2017)</li>
            <li>SMK WIRA BUANA 2 (2017-2020)</li>
            <li>STT Terpadu Nurul Fikri (2021-Sekarang)</li>
        </ul>

        <h2>Pengalaman Kerja</h2>
        <h3>Praktek Kerja Industri - 6 Januari 2018 - 9 Maret 2019</h3>
        <p>PT POS INDONESIA CIBINONG</p>

        <h3>NOVEMBER - DESEMBER 2020</h3>
        <p>PT METRO NET</p>
    </div>
</body>
</html>
