<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Segitiga Kotak</title>
    <style>
        .grid-container {
            display: flex;
            flex-direction: column-reverse;
            align-items: flex-start;
        }
        .row {
            display: flex;
        }
        .box {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid black;
            background-color:rgb(0, 255, 0);
            
        }
    </style>
</head>
<body>

<div class="grid-container">
    <?php
    $size = 10; // Jumlah baris

    for ($i = 1;  $i <= $size;  $i++) {
        echo "<div class='row'>";
        for ($j = 1; $j <= $i; $j++) {
            echo "<div class='box'>$j</div>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>