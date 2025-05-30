<?php
function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040039');
    return $conn;
}
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi(); // panggil fungsi koneksi()

    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan, gambar)
              VALUES ('$nama', '$nim', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    $id = (int)$id;

    $query = "DELETE FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Query Error: " . mysqli_error($conn);
        exit;
    }

    return mysqli_affected_rows($conn);
}
