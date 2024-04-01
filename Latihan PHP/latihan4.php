<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>Form Login</h1>
    <form action="latihan4.php" method="POST">
        <div>
            <label>Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label>Password</label>
            <input type="text" name="pass">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl">
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <input type="radio" name="jk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jk" value="Perempuan">Perempuan
        </div>
        <div>
            <input type="submit" value="Simpan">
        </div>
    </form>
    
</body>
</html>
<?php
echo 'Nama:' . $_POST['nama'] . '<br>';
echo 'Password:' . $_POST['pass'] . '<br>';
echo 'Email:' . $_POST['email']. '<br>';
echo 'Tanggal Lahir' . $_POST['tgl']. '<br>';
echo 'Jenis Kelamin' . $_POST['jk']. '<br>';
?>