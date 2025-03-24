<?php
$mahasiswa = ['Raja', '243040039', 'rajasaut99@gmail.com', 'Teknik Informatika'];


$mahasiswa = [
    [
        'Raja',
        '243040039',
        'rajasaut99@gmail.com',
        'Teknik Informatika'
    ],
    [
        'jarjit',
        '243040100',
        'jarjitsing12@gmail.com',
        'Tekni Pantun'
    ]
];

echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar $mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NPM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan <?= $m[3]; ?>:</li>
        </ul>
    <?php endforeach; ?>
</body>

</html>