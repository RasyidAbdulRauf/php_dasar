<?php

//Lampu Lalu Lintas
$lampu = "Kuning";

echo "Lampu Lalu Lintas Tigaraksa Pagi Hari <br />";
switch ($lampu) {
    case 'Merah':
        echo "Berhenti <br />";
        break;

    case 'Kuning':
        echo "Hati-Hati <br />";
        break;

    case 'Hijau':
        echo "Jalan <br />";
        break;

    default:
        echo "Lampu Lalu Lintas Mati <br />";
        break;
}

$lalin = "hitam";

echo "Lampu Lalu Lintas Tigaraksa Sore Hari <br />";
switch ($lalin) {
    case 'merah':
        echo "Berhenti <br />";
        break;

    case 'kuning':
        echo "Hati-hati <br />";
        break;

    case 'hijau':
        echo "Jalan <br />";
        break;

    default:
        echo "Lampu Lalu Lintas Mati <br />";
        break;
}
