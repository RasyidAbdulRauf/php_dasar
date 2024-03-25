<?php

class Buah
{

    protected $nama, $warna, $harga;
    // private $nama; //hanya bisa diakses di kelasnya
    // protected $nama; //hanya bisa diakses di kelasnya dan warisannya
    // public $nama; //bisa diakses dimana aja


    function gantiNama($namaBaru)
    {
        $this->nama = $namaBaru;
        echo $this->nama;
    }

    function gantiHarga($hargaBaru)
    {
        $this->harga = $hargaBaru;
    }
}

class Pisang extends Buah
{

    // function gantiNama($namaBaru)
    // {
    //     $this->nama = $namaBaru;
    //     echo $this->nama;
    // }

    function tampilDeskripsi()
    {
        echo "<br /> Buah $this->nama dengan harga $this->harga";
    }
}

$pisang = new Buah("Pisangg", "Kuning", 10000);
// $pisang->nama = "Pisang";
$pisang->gantiNama("Pisang <br />");

$pisangbaru = new Pisang("Pisang Mentah", "Hijau", 10000);
$pisangbaru->gantiNama("Pisang Mateng");
$pisangbaru->gantiHarga(5000);
$pisangbaru->tampilDeskripsi();


// $pisangBaru = new Pisang();
// $pisangBaru->gantiNama("Pisang Baru");
// $pisangBaru->tampilDeskripsi();