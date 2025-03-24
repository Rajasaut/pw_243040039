<?php
// .membuat.Array 
$hari = array("senin", 'selasa', 'rabu'); // versi lama
$bulan = ['Januari', 'februari', 'Maret']; //versi baru
$myArray = ['Raja', 19, true];

// Mencetak Atau Menampilkan Array
// Cara menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
// Menambah isi array
//Gunakan []
$hari[] = 'kamis';
$bulan[] = "jumat";
print_r($hari);
print_r($bulan);
