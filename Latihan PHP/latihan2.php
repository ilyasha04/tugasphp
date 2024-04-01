<?php
// FUNGSI IF
// JIKA UMUR LEBIH 20 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOBIL (IF)
// JIKA UMUR LEBIH 17 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOTOR (ELSE IF)
// JIKA UMUR LEBIH 10 TAHUN, MAKA ANDA DAPAT MENGENDARAI SEPEDA (ELSE IF)
// SELAIN ITU TIDAK BOLEH
$umur = 18; // input
if ($umur > 20) {
echo "Selamat Kamu Dapat Mengendarai Mobil";
}elseif ($umur > 17){
echo "Anda dapat berkendara motor";
}elseif ($umur > 10){
echo " anda berkendara sepeda";
}else {
echo "Kamu Dilarang Mengendarai Mobil";
}

echo "<hr>";

// jika umur <40 dan umur >=17 Ket: dewasa
// jika umur <17 dan umur >=9 ket: remaja
// jika umur <9 dan umur >5 ket: anak-anak
// jika umur <=5 dan umur >0 ket: balita
// selain itu umur > 40 ket: tua 
// JAWABAN

$nama = "Ilyasha Erfrian"; // misalnya nama ilyasha
$umur = 25; // Misalnya umur 25 tahun

if ($umur < 40 && $umur >= 17) {
    $ket = "dewasa";
} elseif ($umur < 17 && $umur >= 9) {
    $ket = "remaja";
} elseif ($umur < 9 && $umur > 5) {
    $ket = "anak-anak";
} elseif ($umur <= 5 && $umur > 0) {
    $ket = "balita";
} else {
    $ket = "tua";
}
echo"Nama: $nama <br> Umur: $umur <br> Keterangan :$ket";

echo "<hr>";

// soal:
// jika nilai >6, maka nilai bagus
// selain itu buruk

$nilai=8;
// cara if
if($nilai >6){
    echo "Baik";
}
else echo "Buruk";

echo "<hr>";

// cara ternary:
echo $nilai>6 ? "Baik" : "Buruk";

echo "<hr>";

$nilai=9;
$nilai>6?$keterangan="bagus":$keterangan="buruk";
echo("Nilai anda $nilai, keterangan nilai anda adalah $keterangan");

echo "<hr>";

$baju = 'l';
$baju = strtolower($baju);

switch ($baju) {
    case "l":
        echo "Large";
        break;
    case "m":
        echo "Medium";
        break;
    default:
        echo "Small";
}

echo "<hr>";

// tugas - switch case 
// jika nilai <=0 nilai : buruk
// jika nilai <=40 nilai : kurang 
// jika nilai <=70 nilai : cukup
// jika nilai <=80 nilai : memuaskan
// jika nilai <=100 nilai : sangat memuaskan
// selain itu nilai : null
// JAWABAN
// statement switchcase 
$nilai = 75; // Ubah nilai sesuai kebutuhan

switch(true) {
    case $nilai <= 0:
        echo "Nilai: Buruk";
        break;
    case $nilai <= 40:
        echo "Nilai: Kurang";
        break;
    case $nilai <= 70:
        echo "Nilai: Cukup";
        break;
    case $nilai <= 80:
        echo "Nilai: Memuaskan";
        break;
    case $nilai <= 100:
        echo "Nilai: Sangat Memuaskan";
        break;
    default:
        echo "Nilai: Null";
}

echo "<hr>";

$nilai2=50;
switch ($nilai2){
    case $nilai2 >=0 && $nilai2 <35:
        echo "$nilai2 : E";
    break;
    case $nilai2 >=35 && $nilai2 <=60:
        echo "$nilai2: D";
    break;
    default:
        echo "null";
}

?>