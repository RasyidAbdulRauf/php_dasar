<?php

class Buah
{

    //property
    public $nama;
    public $warna;
    public $harga;
}


// //buah tanpa construct
// $pisang = new Buah();
// $pisang->nama = "Pisang";
// $pisang->warna = "Kuning";
// $pisang->harga = 10000;

//buah use construct
$pisang = new Buah("Pisang", "Kuning", 10000);
$mangga = new Buah("Mangga", "Oren", 15000);


//pisang
echo "Buah $pisang->nama";
echo "<br /> Warna $pisang->warna";
echo "<br /> Harga Pisang Rp $pisang->harga <br />";

//mangga
echo "<br /> Buah $mangga->nama";
echo "<br /> Warna $mangga->warna";
echo "<br /> Harga Mangga Rp $mangga->harga";