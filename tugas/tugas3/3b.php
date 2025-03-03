<?php
function urutanAngka($angka)
{
    $num = 1; // Angka awal

    for ($i = 1; $i <= $angka; $i++) { // Loop untuk jumlah baris
        for ($j = 1; $j <= $i; $j++) { // Loop untuk mencetak angka di setiap baris
            echo $num . " ";
            $num++; // Menambah angka setiap kali dicetak
        }
        echo "<br>"; // Pindah ke baris berikutnya
    }
}

urutanAngka(5); // Contoh pemanggilan fungsi dengan 5 baris
