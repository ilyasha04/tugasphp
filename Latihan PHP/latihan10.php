<?php
// array : sekumpulan data 
// array numerik dan array asosatif

// 1. ARRAY NUMERIK
$ar_buah = ['pepaya', 'mangga', 'pisang', 'anggur', 'jeruk'];

// cetak index ke ? 
echo $ar_buah[4];
echo "<hr>";
// tampilan jumlah total pada buah 
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

// lihat hasil data buah dengan foreach
foreach($ar_buah as $value){
    echo "$value <br>";
}

echo "<hr>";

// 2. Array Asosiatif
$ar_hewan =[10=>'Babi Ngepet', 20=>'bebek', 'kucing', 30=>'Putri duyung', 'anjing galak'];
echo $ar_hewan[10];

// lihat hasil data hewan dengan foreach
foreach ($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}
    
echo "<hr>";

//3. ARRAY MULTIDIMENSI (ARRAY DALAM ARRAY)
//CARA 2:
$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];

$daftar_siswa = [$a1,$a2,$a3];

foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}


?>