<?php

class Buah
{

    //property
    public $nama;
    public $warna;
    public $harga;

    function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->warna = $b;
        $this->harga = $c;
    }
}

//pewarisan
class Pisang extends Buah
{
    function tampilKet()
    {
        echo "Buah $this->nama berwarna $this->warna dengan harga $this->harga";
    }

    function pesan()
    {
        echo "<br /> Pilihlah buah $this->nama yang memiliki tekstur bagus dan 
        berwarna $this->warna untuk mendapatkan buah $this->nama yang matang";
    }
}


$pisang = new Pisang("Pisang", "Kuning", 10000);

$pisang->tampilKet();
$pisang->pesan();
