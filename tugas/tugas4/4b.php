<!DOCTYPE html>
<html>

<head>
    <title>Daftar Perangkat Keras Komputer</title>
</head>

<body>

    <?php
    // Untuk array awal dengan 6 elemen perangkat keras komputer
    $hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];

    // Untuk menampilkan daftar perangkat keras komputer awal
    echo "<h3>Macam-macam perangkat keras komputer</h3>";
    echo "<ol>";
    foreach ($hardware as $item) {
        echo "<li>$item</li>";
    }
    echo "</ol>";

    // Untuk menambahkan dua elemen baru ke dalam array
    array_push($hardware, "Card Reader", "Modem");

    // Untuk mengurutkan array secara alfabet (A-Z)
    sort($hardware);

    // Untuk menampilkan daftar perangkat keras komputer baru
    echo "<h3>Macam-macam perangkat keras komputer baru</h3>";
    echo "<ol>";
    foreach ($hardware as $item) {
        // Menambahkan garis bawah merah untuk elemen baru
        if ($item == "Card Reader" || $item == "Modem") {
            echo "<li><span style='text-decoration: underline; color: red;'>$item</span></li>";
        } else {
            echo "<li>$item</li>";
        }
    }
    echo "</ol>";
    ?>

</body>

</html>