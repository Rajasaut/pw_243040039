<?php
$n = 10; // Default nilai jika tidak ada input
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['angka']) && is_numeric($_POST['angka'])) {
    $n = intval($_POST['angka']);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Angka</title>
    <style>
        .container {
            display: inline-block;
        }

        .box {
            display: inline-block;
            width: 30px;
            height: 30px;
            border: 1px solid black;
            text-align: center;
            line-height: 30px;
            margin: 2px;
            font-weight: bold;
        }

        .colored {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for="angka">Masukkan angka:</label>
        <input type="number" id="angka" name="angka" required>
        <button type="submit">Tampilkan</button>
    </form>
    <br>
    <div class="container">
        <?php
        for ($i = $n; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                $class = ($i % 2 == 0) ? 'box colored' : 'box';
                echo "<div class='$class'>$i</div>";
            }
            echo "<br>";
        }
        ?>
    </div>
</body>

</html>