<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 17 September 2021
Mempelajari mengenai construktor
*/
?>
<?php

class Produk {
    public $judul,
           $warna,
           $ukuran,
           $harga;

    public function __construct( $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0 ) {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->warna, $this->ukuran";
    }

} 

$produk1 = new Produk("Sandal", "Merah", "Xl", 20000);
$produk2 = new Produk("Sepatu", "Biru", "L", 40000);

echo "Pakaian : " . $produk1->getLabel();
echo "<br>";
echo "Hiasan : " . $produk2->getLabel();