<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papan Catur</title>
    <style>
        .chessboard {
            display: grid;
            grid-template-columns: repeat(5, 100px);
            grid-template-rows: repeat(5, 100px);
            border: 2px solid black;
            width: fit-content;
        }
        .box {
            width: 100px;
            height: 100px;
        }
        .black {
            background-color: white;
        }
        .white {
            background-color: black;
        }
    </style>
</head>
<body>

<div class="chessboard">
    <?php
    for ($row = 0; $row < 5; $row++) {
        for ($col = 0; $col < 5; $col++) {
            $color = ($row + $col) % 2 == 0 ? 'white' : 'black';
            echo "<div class='box $color'></div>";
        }
    }
    ?>
</div>

</body>
</html>