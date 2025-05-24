<?php
// Koneksi ke Data Base
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040039');

// Mengambil Data Mahasiswa Dari Tabel Mahasiswa / query Data Mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objek result
//mysqli_fetch_row()// Mengambil array numerik
//mysqli_fetcs_assoc()// Mengambil array assosiative
//mysqli_fetcs_array()// mengembalikan keduanya
//mysqli_fetcs_object()//

// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }

// Untuk Cek koneksi
// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">


        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>


        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td><img src="img/<?= $row["gambar"]; ?> " width="70"></td>
                <td><?= $row["nim"]; ?> </td>
                <td><?= $row["nama"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["jurusan"]; ?></td>
            </tr>
            <?php $i++;  ?>
        <?php endwhile; ?>


    </table>

</body>

</html>