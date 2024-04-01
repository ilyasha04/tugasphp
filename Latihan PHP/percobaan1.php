<?php
// Data nilai mahasiswa
$nilai_mahasiswa = [
    ['no' => 1, 'nama' => 'Andi', 'nilai' => 75],
    ['no' => 2, 'nama' => 'Budi', 'nilai' => 82],
    ['no' => 3, 'nama' => 'Cindy', 'nilai' => 65],
    ['no' => 4, 'nama' => 'Dewi', 'nilai' => 91],
    ['no' => 5, 'nama' => 'Eka', 'nilai' => 78],
    ['no' => 6, 'nama' => 'Fandi', 'nilai' => 60],
    ['no' => 7, 'nama' => 'Gita', 'nilai' => 88],
    ['no' => 8, 'nama' => 'Hadi', 'nilai' => 73],
    ['no' => 9, 'nama' => 'Indra', 'nilai' => 68],
    ['no' => 10, 'nama' => 'Joko', 'nilai' => 80],
];

// Fungsi untuk menghitung grade berdasarkan nilai
function hitungGrade($nilai)
{
    return ($nilai >= 85) ? 'A' : (($nilai >= 70) ? 'B' : (($nilai >= 60) ? 'C' : (($nilai >= 50) ? 'D' : 'E')));
}

// Fungsi untuk menghitung predikat berdasarkan grade
function hitungPredikat($grade)
{
    switch ($grade) {
        case 'A':
            return "Memuaskan";
            break;
        case 'B':
            return "Bagus";
            break;
        case 'C':
            return "Cukup";
            break;
        case 'D':
            return "Kurang";
            break;
        case 'E':
            return "Buruk";
            break;
        default:
            return "Tidak Diketahui";
    }
}

// Menghitung agregat nilai
$nilai_array = array_column($nilai_mahasiswa, 'nilai');
$nilai_tertinggi = max($nilai_array);
$nilai_terendah = min($nilai_array);
$jumlah_mahasiswa = count($nilai_mahasiswa);
$total_nilai = array_sum($nilai_array);
$rata_rata = $total_nilai / $jumlah_mahasiswa;

// Array untuk keterangan agregat
$keterangan_agregat = [
    'Nilai Tertinggi' => $nilai_tertinggi,
    'Nilai Terendah' => $nilai_terendah,
    'Nilai Rata-Rata' => number_format($rata_rata, 2),
    'Jumlah Mahasiswa' => $jumlah_mahasiswa,
    'Jumlah Keseluruhan Nilai' => $total_nilai,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tfoot td {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h2 align="center">Data Nilai Mahasiswa</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nilai_mahasiswa as $data) : ?>
                <tr>
                    <td><?= $data['no'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nilai'] ?></td>
                    <td><?= hitungGrade($data['nilai']) ?></td>
                    <td><?= hitungPredikat(hitungGrade($data['nilai'])) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Agregat Nilai</td>
                <td><?= $keterangan_agregat['Nilai Tertinggi'] ?></td>
                <td><?= $keterangan_agregat['Nilai Terendah'] ?></td>
                <td><?= $keterangan_agregat['Nilai Rata-Rata'] ?></td>
                <td><?= $keterangan_agregat['Jumlah Mahasiswa'] ?></td>
                <td><?= $keterangan_agregat['Jumlah Keseluruhan Nilai'] ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>
