<?php
$siswa = 'Budi Santoso';
$matakuliah = 'PHP';
$nilai = 90; //nilai yang di input

// Ternary
// Jika Nilai >=60 Lulus
// selain itu gagal
$ket = ($nilai >=60) ? 'Lulus' : 'Gagal' ; 

// IF
if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}

// SWITCHCASE
switch(true) {
    case $nilai >= 85:
        $predikat = "Sangat Baik";
        break;
    case $nilai >= 70:
        $predikat = "Baik";
        break;
    case $nilai >= 60:
        $predikat = "Cukup";
        break;
    default:
        $predikat = "Kurang";
}

echo "<hr>";

echo $siswa;
echo $matakuliah;
echo $nilai;
echo $ket;
echo $grade;
echo $predikat;
?>




<!-- 
NAMA MAHASISWA : Budi Santoso => Variabel
Mata Kuliah : PHP =>variabel
Nilai : 80 => ini yang di input
Keterangan : Lulus => Ternary
Grade : B => IF/ELSE
Predikat : Bagus  => SWITCH/CASE
-->