<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Template Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Website Ilyasha</h1>
            <nav>
                <ul>
                    <li><a href="index.php?page=home">Home</a></li>
                    <li><a href="index.php?page=produk">Produk</a></li>
                    <li><a href="index.php?page=pesan">Pesan</a></li>
                    <li><a href="index.php?page=galeri">Galeri</a></li>
                    <li><a href="index.php?page=gesbuk">Gesbuk</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <main>
            <?php
            // Ini adalah konten dinamis berdasarkan halaman yang dipilih
            $page = isset($_GET['page']) ? $_GET['page'] : 'home';

            // Include konten halaman yang sesuai
            if (file_exists($page . '.php')) {
                include($page . '.php');
            } else {
                echo '<h2>Halaman tidak ditemukan</h2>';
            }
            ?>
        </main>
    </div>

    <footer>
        <div class="container">
            <p>Ilyasha Erfrian &copy; 2024</p>
        </div>
    </footer>
</body>
</html>
