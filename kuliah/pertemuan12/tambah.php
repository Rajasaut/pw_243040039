<?php
require 'functions.php';

//untuk cek tombol sumbit sudah ditekan atau belum 
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di tambahkan atau tidak 
    if (tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan !');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "<script>
        alert('data gagal ditambahkan !');
       document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data mahasiswa</title>
</head>

<body>
    <h1>Tambah data mahasiswa</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nim">nim :</label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">EMAIL :</label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="jurusan">JURUSAN :</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="gambar">GAMBAR :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">TAMBAH DATA</button>
            </li>
        </ul>
    </form>

</body>

</html>