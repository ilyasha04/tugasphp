<?php
// Variabel

// ini contoh komentar didalam php

/* komentar1
komentar2
komentar3
komentar4 */

// cetak
echo 'belajar php <br>';
echo '<br>';
echo 'saya senang belajar "PHP" ';
echo '<br>';
print "belajar MySQL";
echo '<hr>';

// Variabel user
$nama="Dono Warkop"; // data string
$alamat="Depok"; // data string
$umur=30; // data ineteger
$berat=70.5; // data float
$_pekerjaan="karyawan";
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo "<br>";
echo "nama saya $nama alamat di $alamat <br>";
echo 'nama saya' .$nama. 'alamat di' .$alamat. '<br>';
echo "umur saya: $umur<br>";
echo "berat saya: $berat<br>";
echo 'pekerjaan saya: ' .$_pekerjaan. '<br>';
echo "<hr>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- cetak didalam html -->
    <h2>Nama saya: <?php echo $nama ?></h2>
    <h2>saya berumur: <?=  $umur ?> Tahun</h2>
    <hr>
    
</body>
</html>

<?php
// variabel system
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<hr>";



//Variabel Konstanta
//Define: untuk memanggil variabel konstanta
define('PELAJARAN', 'PHP DASAR');
echo "Ini Matakuliah:" .PELAJARAN;

echo "<hr>";

// operator aritmatika
$a=5;
$b=2;
echo $a+$b. '<br>';
echo $a-$b. '<br>';
echo $a*$b. '<br>';
echo $a/$b. '<br>';
echo $a%$b. '<br>'; //modulus (%), sisa pembagian
echo $a**$b. '<br>'; //pangkat
echo pow($a,$b). '<br>'; //pangkat
echo pow(2,3); //pangkat

echo "<hr>";

// SOAL:
// Diketahu jari-jarinya 15, maka berapa luas lingkaran
// jika jari2: 15
// rumus phi: 3.14
// rumus luas: phi*(jari2*jari2)
// rumus keliling: 2*phi*jari2

define('PHI', 3.14);
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

// cetak didalam php
echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;
echo '<hr>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <!-- cetak didalam html  -->
    <p>Jari-jarinya adalah: <?= $jari2 ?></p>
</body>
</html>

<hr>

<?php
// tipe data string
$itungstring="Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo "<br>";

// mengtahui tipe variabel
$huruf="Dono";
$hasil=gettype($huruf);
echo $hasil;
echo "<br>";

$bil=100;
$hasil=gettype($bil);
echo $hasil;
echo "<br>";

$bil2=7.50;
$hasil=gettype($bil2);
echo $hasil;
echo "<br>";

// buat nama lengkap dan alamat, cetak dengan menggunakan style css (style warna) menggunakan echo 

echo "<hr>"

?>
<!DOCTYPE html>
<html>
<head>
    <title>Nama dan Alamat</title>
    <style>
        .nama {
            color: blue;
        }
        .alamat {
            color: green;
        }
    </style>
</head>
<body>
    <?php
        $nama_lengkap = "Ilyasha Erfrian";
        $alamat = "Jl. Rawa Sari No.04 , Depok";
    ?>
    
    <div class="nama"><?php echo $nama_lengkap; ?></div>
    <div class="alamat"><?php echo $alamat; ?></div>
</body>
</html>
