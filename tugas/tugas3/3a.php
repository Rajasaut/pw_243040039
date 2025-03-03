<?php
function hitungLuasLingkaran($r)
{
    $luas = pi() * pow($r, 2);
    echo "<h4>Menghitung Luas Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Luas lingkaran = " . round($luas, 2) . " cm²<br>";
}

function hitungKelilingLingkaran($r)
{
    $keliling = 2 * pi() * $r;
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    echo "Jari-jari = $r cm.<br>";
    echo "Keliling lingkaran = " . round($keliling, 2) . " cm<br>";
}


hitungLuasLingkaran(10);
echo "<hr>";
hitungKelilingLingkaran(20);
echo "<hr>";
