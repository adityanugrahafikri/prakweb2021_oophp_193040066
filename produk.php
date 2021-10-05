<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 17 September 2021
Mempelajari mengenai property & method
*/
?>
<?php

class Produk {
    public $judul = "judul",
           $warna = "warna",
           $ukuran = "ukuran",
           $harga = 0;

    public function getLabel() {
        return "$this->warna, $this->ukuran";
    }

} 

// $produk1 = new Produk();
// $produk->judul = "Baju";
// var_dumb($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Celana";
// $produk2->tambahProperty = "haha";
// var_dumb($produk2);

$produk3 = new Produk();
$produk3->judul = "Sandal";
$produk3->warna = "Merah";
$produk3->ukuran = "Xl";
$produk3->harga = 20000;

$produk4 = new Produk();
$produk4->judul = "Sepatu";
$produk4->warna = "Biru";
$produk4->ukuran = "L";
$produk4->harga = 40000;

echo "Pakaian : " . $produk3->getLabel();
echo "<br>";
echo "Hiasan : " . $produk4->getLabel();