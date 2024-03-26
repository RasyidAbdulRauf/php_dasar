<?php

$kota = array('Pekalongan', 'Semarang', 'Demak');
echo "Saya pernah tinggal di Kota $kota[0], Kota $kota[1], dan Kota $kota[2] ";


$umurKota = array("Pekalongan" => "400", "Semarang" => "500", "Demak" => "200");
echo "<br /> Berikut umur Kota $kota[0] : " . $umurKota['Pekalongan'] . " tahun";

$mobil = array("Fortuner", "Innova", "Alphard");
echo "<br /> Saya pergi ke Kota $kota[0] menggunakan mobil $mobil[2]";