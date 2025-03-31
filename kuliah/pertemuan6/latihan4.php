<?php
// $mahasiswa = ['Raja', '243040039', 'rajasaut99@gmail.com', 'Teknik Informatika'];


$mahasiswa = [
    [
        'nama' =>  'Raja',
        'nim' => '243040039',
        'email' => 'rajasaut99@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' =>  'jarjit',
        'nim' => '243040200',
        'email' => 'jarjit99@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],

];

// echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m['nama']; ?></li>
            <li>NPM: <?= $m['nim']; ?></li>
            <li>Email: <?= $m['email']; ?></li>
            <li>Jurusan <?= $m['jurusan']; ?>:</li>
        </ul>
    <?php endforeach; ?>
</body>

</html>