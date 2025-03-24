<?php
// $makanan_manis = [
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"],
//     ["Kue Ubi Coklat", "Shopee Pay", "15.000k", "Makananlejit@gmail.com"]
// ];

//===================================================================
// Array Associative
// Definisinya sama seperti array numerik, kecuali 
// key-nya string yang kita buat sendiri  

$makanan_manis = [
    [
        "Nama" => "Kue Ubi Coklat",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "KueUbiCoklat.jpg"

    ],
    [
        "Nama" => "Bika Ambon",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "BikaAmbon.jpg"

    ],
    [
        "Nama" => "Churos",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "churos.jpg"

    ],
    [
        "Nama" => "Daifuku Mochi",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Daifuku_Mochi.jpg"

    ],
    [
        "Nama" => "Donat",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Donat.jpg"

    ],
    [
        "Nama" => "Kripik Kaca",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Keripik_kaca.jpg"

    ],
    [
        "Nama" => "Krebipety",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Krebipety.jpg"

    ],
    [
        "Nama" => "Menu Takjil",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Menu_Takjil.jpg"

    ],
    [
        "Nama" => "Roti Krim Buah-buahhan",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "RotiKrimbuah.jpg"

    ],
    [
        "Nama" => "Wonton Ayam",
        "Beli Di" => "Shoopee Pay",
        "Harga" => "15.000 K",
        "Email" => "Makananlejit@gmail.com",
        "Gambar" => "Wonton_Ayam.jpg"

    ]
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preoder Makanan manis lejit</title>
</head>

<body>
    <h1>Preoder Makanan Manis Lejit</h1>
    <?php foreach ($makanan_manis as $mkm): ?>

        <ul>
            <li>
                <img src="img/<?= $mkm["Gambar"]; ?>">
            </li>
            <li>Nama :<?php echo $mkm["Nama"]; ?></li>
            <li>Belii :<?php echo $mkm["Beli Di"]; ?></li>
            <li>Harga :<?php echo $mkm["Harga"]; ?></li>
            <li>Email :<?php echo $mkm["Email"]; ?></li>
        </ul>

    <?php endforeach; ?>

</body>

</html>