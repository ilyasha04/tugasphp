<?php
require_once 'mahasiswa.php';

// Daftar universitas di Jakarta
$universitas_list = array(
    "Universitas Indonesia",
    "Institut Teknologi Bandung",
    "Universitas Trisakti",
    "Universitas Bina Nusantara",
    "Universitas Pelita Harapan",
    "STT Terpadu Nurul Fikri",
    "Universitas Pamulang"
);

// Daftar mata kuliah di jurusan Sistem Informasi
$mata_kuliah_list = array(
    "Pemrograman Web",
    "Basis Data",
    "Sistem Informasi Manajemen",
    "Desain Antarmuka Pengguna",
    "Jaringan Komputer",
    "Sistem Pendukung Keputusan",
    "Manajemen Proyek TI",
    "E-Commerce",
    "Sistem Enterprise",
    "Pengantar Sistem Informasi"
);

// Tangkap data dari form jika sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $universitas = $_POST['universitas'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    // Buat objek Mahasiswa dengan data yang diinput
    $mahasiswa = new Mahasiswa($nim, $nama, $universitas, $mata_kuliah, $nilai);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            border: 1px solid #ccc;
        }
        table th {
            background-color: #007bff;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Input Data Mahasiswa</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br>
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="universitas">Universitas:</label><br>
        <select id="universitas" name="universitas">
            <?php
            foreach ($universitas_list as $universitas_item) {
                echo "<option value='$universitas_item'>$universitas_item</option>";
            }
            ?>
        </select><br>
        <label for="mata_kuliah">Mata Kuliah:</label><br>
        <select id="mata_kuliah" name="mata_kuliah">
            <?php
            foreach ($mata_kuliah_list as $mata_kuliah_item) {
                echo "<option value='$mata_kuliah_item'>$mata_kuliah_item</option>";
            }
            ?>
        </select><br>
        <label for="nilai">Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" min="0" max="100"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Jika objek $mahasiswa sudah dibuat dari form, cetak hasilnya
    if (isset($mahasiswa)) {
        echo "<h2 style='text-align:center;'>Hasil</h2>";
        echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Universitas</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>" . $mahasiswa->nim . "</td>";
        echo "<td>" . $mahasiswa->nama . "</td>";
        echo "<td>" . $mahasiswa->universitas . "</td>";
        echo "<td>" . $mahasiswa->mata_kuliah . "</td>";
        echo "<td>" . $mahasiswa->nilai . "</td>";
        echo "<td>" . $mahasiswa->grade . "</td>";
        echo "<td>" . $mahasiswa->predikat . "</td>";
        echo "<td>" . $mahasiswa->status . "</td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>
</body>
</html>
