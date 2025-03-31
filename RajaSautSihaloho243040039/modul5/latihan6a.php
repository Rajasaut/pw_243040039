<?php
if (isset($_GET['angka']) && is_numeric($_GET['angka'])) {
    $n = intval($_GET['angka']);
} else {
    $n = 10; // Default jika tidak ada parameter
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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