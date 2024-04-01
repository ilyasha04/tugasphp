<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Nilai</h1>
<form action="latihan5.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="rabbit">--Pilihan Mata Kuliah--</option>
        <option value="html">HTML & CSS</option>
        <option value="UI&UX">UI&UX</option>
        <option value="PHP">PHP</option>
        <option value="Laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>


<?php


$nama = $_POST['nama'];
$matakuliah = $_POST['matkul'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];

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

if(isset($proses)) {

?>



<!-- cetak di dalam html -->
<h1>Nama Siswa : <?= $nama ?></h1>
<h2>Mata Kuliah : <?= $matakuliah ?></h2>
<h2>Nilai : <?= $nilai ?></h2>
<h2>Keterangan : <?= $ket ?></h2>
<h2>Grade : <?= $grade ?></h2>
<h1>Predikat : <?= $predikat ?></h1>


<!-- 
NAMA MAHASISWA : Budi Santoso => Variabel
Mata Kuliah : PHP =>variabel
Nilai : 80 => ini yang di input
Keterangan : Lulus => Ternary
Grade : B => IF/ELSE
Predikat : Bagus  => SWITCH/CASE
-->

<?php  } ?>