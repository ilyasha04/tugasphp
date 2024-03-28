<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 20px;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #ddd; /* tambahan: border pada tabel */
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tfoot {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Data Nilai Mahasiswa</h2>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Grade</th>
            <th>Predikat</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $mahasiswa = [
            ["123456", "Noor", 80],
            ["234567", "Ahmad", 72],
            ["345678", "Rina", 90],
            ["456789", "Budi", 55],
            ["567890", "Siti", 68],
            ["678901", "Joko", 75],
            ["789012", "Dewi", 40],
            ["890123", "Rudi", 88],
            ["901234", "Tina", 65],
            ["012345", "Andi", 72],
            ["987654", "Lina", 85],
            ["876543", "Rama", 60],
            ["765432", "Eka", 78],
            ["654321", "Yudi", 92],
            ["543210", "Fani", 48],
            ["432109", "Wati", 70],
            ["321098", "Agus", 62],
            ["210987", "Sari", 77],
            ["109876", "Doni", 84],
            ["098765", "Maya", 58]
        ];

        // Hitung Agregat Nilai
        $total_nilai = 0;
        $nilai_tertinggi = $mahasiswa[0][2];
        $nilai_terendah = $mahasiswa[0][2];
        $jumlah_lulus = 0;

        foreach ($mahasiswa as $data) {
            $total_nilai += $data[2];
            if ($data[2] > $nilai_tertinggi) {
                $nilai_tertinggi = $data[2];
            }
            if ($data[2] < $nilai_terendah) {
                $nilai_terendah = $data[2];
            }
            if ($data[2] >= 65) {
                $jumlah_lulus++;
            }
        }

        $jumlah_mahasiswa = count($mahasiswa);
        $rata_rata = $total_nilai / $jumlah_mahasiswa;

        // Fungsi untuk mendapatkan Grade dan Predikat
        function getGrade($nilai)
        {
            if ($nilai >= 85) {
                return "A";
            } elseif ($nilai >= 75) {
                return "B";
            } elseif ($nilai >= 65) {
                return "C";
            } elseif ($nilai >= 55) {
                return "D";
            } else {
                return "E";
            }
        }

        function getPredikat($grade)
        {
            switch ($grade) {
                case "A":
                    return "Memuaskan";
                    break;
                case "B":
                    return "Bagus";
                    break;
                case "C":
                    return "Cukup";
                    break;
                case "D":
                    return "Kurang";
                    break;
                case "E":
                    return "Buruk";
                    break;
                default:
                    return "Tidak Ada";
            }
        }

        // Menampilkan data
        $no = 1;
        foreach ($mahasiswa as $data) {
            $nim = $data[0];
            $nama = $data[1];
            $nilai = $data[2];
            $keterangan = $nilai >= 65 ? "Lulus" : "Tidak Lulus";
            $grade = getGrade($nilai);
            $predikat = getPredikat($grade);

            echo "<tr>
                    <td>$no</td>
                    <td>$nim</td>
                    <td>$nama</td>
                    <td>$nilai</td>
                    <td>$keterangan</td>
                    <td>$grade</td>
                    <td>$predikat</td>
                  </tr>";
            $no++;
        }
        ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Nilai Tertinggi</td>
            <td><?php echo $nilai_tertinggi; ?></td>
            <td colspan="4">Jumlah Mahasiswa: <?php echo $jumlah_mahasiswa; ?></td>
        </tr>
        <tr>
            <td colspan="3">Nilai Terendah</td>
            <td><?php echo $nilai_terendah; ?></td>
            <td colspan="4">Jumlah Lulus: <?php echo $jumlah_lulus; ?></td>
        </tr>
        <tr>
            <td colspan="3">Nilai Rata-rata</td>
            <td><?php echo number_format($rata_rata, 2); ?></td>
            <td colspan="4">Jumlah Keseluruhan Nilai: <?php echo $total_nilai; ?></td>
        </tr>
    </tfoot>
</table>

<p style="text-align: center; color: #666;">Ilyasha Erfrian &copy; 2024 Tabel Nilai Mahasiswa</p>

</body>
</html>
