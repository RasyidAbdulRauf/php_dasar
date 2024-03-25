<?php
//pengulangan
// for (deklarasi awal; syarat pengkondisian; format pengulangan) {
//     code to be executed for each iteration;
// }  

// for ($x = 1; $x <= 10; $x++) {
//     echo "$x. Saya tidak akan mengulangi perbuatan itu lagi <br />";
// }

// echo "<br />";

// for ($x = 10; $x >= 1; $x--) {
//     echo "$x. Saya tidak akan mengulangi perbuatan itu lagi <br />";
// }

// echo "<br />";

$kota = array('Pekalongan', 'Semarang', 'Demak');

echo "1. Kota $kota[0] <br />";
echo "2. Kota $kota[1] <br />";
echo "3. Kota $kota[2] <br />";
echo "<br />";

for ($x=0; $x < count($kota); $x++) { 
    echo $x+1,". Kota $kota[0] <br />";
}

$nomor = 1;
foreach ($kota as $kotaDetail) {
    echo $nomor++ . ". Kota $kotaDetail <br />";
}

// $nomor = 1;
// foreach ($kota as $kotaDetail) {
//     if ($kotaDetail == "Semarang") {
//         echo "- <br/>";
//     } else {
//         echo $nomor++ . ". Kota $kotaDetail <br />";
//     }
// }
$nomor=1;
foreach ($kota as $kotaDetail) {
    if ($kotaDetail == 'Semarang') {
        echo "Semarang Banjir <br />";
    } else {
        echo $nomor++ . ". Kota $kotaDetail <br />";
    }
}
