<?php
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_243040039');
return $conn;

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nim = htmlspecialchars($data["nim"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa (nama, nim, email, jurusan, gambar)
                        VALUES
                    ('$nama', '$nim', '$email', '$jurusan', '$gambar')
                    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    return mysqli_affected_rows($conn);
}
