<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbered Grid</title>
    <style>
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 50px);
            grid-template-rows: repeat(3, 50px);
            gap: 35px ;
            width: max-content;
            background-color: white;
            padding: 20px;
        }
        .cell {
            width: 80px;
            height: 80px;
            background-color:rgb(30, 255, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 30px;
            font-weight: bold;
            color: black;
            border:3px solid rgb(3, 3, 3);
        }
        .grid :nth-child(1) { grid-column: 1 / 2; grid-row: 1 / 2; }
        .grid :nth-child(2) { grid-column: 1 / 2; grid-row: 2 / 3; }
        .grid :nth-child(3) { grid-column: 2 / 3; grid-row: 2 / 3; }
        .grid :nth-child(4) { grid-column: 1 / 2; grid-row: 3 / 4; }
        .grid :nth-child(5) { grid-column: 2 / 3; grid-row: 3 / 4; }
        .grid :nth-child(6) { grid-column: 3 / 4; grid-row: 3 / 4; }
    </style>
</head>
<body>
    <div class="grid">
        <div class="cell">1</div>
        <div class="cell">2</div>
        <div class="cell">2</div>
        <div class="cell">3</div>
        <div class="cell">3</div>
        <div class="cell">3</div>
    </div>
</body>
</html>