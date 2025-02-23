<?php
// Bagian variabel nama depan dan nama belakang 
$nama_depan= "Raja";
$nama_belakang= "Saut_sihaloho";

//Loop dari 1 ke 100
for ($i = 1; $i <= 100; $i++){
if ( $i %3 == 0 && $i % 5 ==0){
echo "Raja saut sihaloho";
}elseif ($i %3 ==0) {
    echo "Raja";
}elseif ($i % 5 ==0){
    echo "saut sihaloho";
}else {
    echo $i;
}
echo "<br>";
}




?>