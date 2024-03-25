<?php

class Buah
{

    //property
    public $nama;
    public $warna;
    public $harga;

    //construct
    function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->warna = $b;
        $this->harga = $c;
    }

    //methods
    function tampilDeskripsi()
    {
        echo "<br /> Buah $this->nama berwarna $this->warna dengan harga Rp $this->harga";
    }
}

class Sayur
{
    public $nama;
    public $warna;
    public $harga;

    function __construct($a, $b, $c)
    {
        $this->nama = $a;
        $this->warna = $b;
        $this->harga = $c;
    }

    function tampilDesk()
    {
        echo "<br /> Sayur $this->nama berwarna $this->warna dengan harga Rp $this->harga";
    }
}

//buah
$pisang = new Buah("Pisang", "Kuning", 10000);
$mangga = new Buah("Mangga", "Oren", 15000);

//sayur
$sawi = new Sayur("Sawi", "Hijau", 4000);
$jagung = new Sayur("Jagung", "Kuning", 5000);

//pisang
echo "Buah $pisang->nama";
echo "<br /> Warna $pisang->warna";
echo "<br /> Harga Pisang Rp $pisang->harga <br />";

//mangga
echo "<br /> Buah $mangga->nama";
echo "<br /> Warna $mangga->warna";
echo "<br /> Harga Mangga Rp $mangga->harga <br />";

//sawi
echo "<br /> Sayur $sawi->nama";
echo "<br /> Warna $sawi->warna";
echo "<br /> Harga Sawi Rp $sawi->harga <br />";

//jagung
echo "<br /> Sayur $jagung->nama";
echo "<br /> Warna $jagung->warna";
echo "<br /> Harga Sawi Rp $jagung->harga <br />";

//object function
echo $pisang->tampilDeskripsi();
echo $mangga->tampilDeskripsi();
echo $sawi->tampilDesk();
echo $jagung->tampilDesk();
