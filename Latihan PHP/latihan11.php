<?php
$a1 = ['kode' =>'1111', 'buah' =>'apel', 'harga' =>20000, 'jumlah' =>4];
$a2 = ['kode' =>'2222', 'buah' =>'mangga', 'harga' =>25000, 'jumlah' =>5];
$a3 = ['kode' =>'3333', 'buah' =>'pisang', 'harga' =>30000, 'jumlah' =>6];
$a4 = ['kode' =>'4444', 'buah' =>'jambu', 'harga' =>35000, 'jumlah' =>7];
$a5 = ['kode' =>'5555', 'buah' =>'durian', 'harga' =>40000, 'jumlah' =>8];


$ar_buah = [$a1,$a2,$a3,$a4,$a5];

// deklarasikan nama2 judul pada tabel header menggunakan loopinng array
$ar_judul = ['no', 'kode', 'buah', 'harga', 'jumlah beli ', 'harga kotor', 'diskon', 'harga bayar'];

//fungsi agregat di array 
$jumlah_harga = array_column($ar_buah,'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata2 = $harga_total / $jumlah_transaksi ; 

$keterangan = [
    'harga total'=>$harga_total,
    'harga tertinggi'=>$harga_tertinggi,
    'harga terendah'=>$harga_terendah,
    'jumlah transaksi'=>$jumlah_transaksi,
    'rata-rata harga'=>$harga_rata2
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Buah-Buahan</title>
</head>
<body>
    <h3 align="center">Daftar Buah-buahan</h3>    
    <table border="1" cellpadding="10" cellspacing="2" width="95%">
        <thead>
            <tr>
            <?php
                foreach($ar_judul as $judul) { ?>
                <th><?= $judul ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($ar_buah as $buah) {
                //bruto=harga*jumlah
                $bruto = $buah['harga']*$buah['jumlah'];
                //dikon= jika durian dengan jumlah beli >=5 dpt diskon 20% selain itu 10%
                $diskon = [$buah ['buah'] == 'durian' && $buah['jumlah'] >=5] ? 0.2 : 0.1;
                $harga_diskon = $diskon * $bruto;
                $harga_bayar = $bruto - $harga_diskon;
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td><?= $buah['harga'] ?></td>
                <td><?= $buah['jumlah'] ?></td>
                <td><?= $bruto ?></td>
                <td><?= $harga_diskon ?></td>
                <td><?= $harga_bayar ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($keterangan as $ket =>$hasil) {
            ?>
            <tr>
                <th colspan="3"><?= $ket ?></th>
                <th colspan="5"><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>