<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 24 September 2021
Mempelajari mengenai inheritance
*/
?>
<?php

class Produk {
    public $judul,
           $warna,
           $ukuran,
           $harga,
           $jmlPcs,
           $waktuBaterai;

    public function __construct( $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0, $jmlPcs = 0, $waktuBaterai = 0 ) {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
        $this->jmlPcs = $jmlPcs;
        $this->waktuBaterai = $waktuBaterai;
    }

    public function getLabel() {
        return "$this->warna, $this->ukuran";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}


class Pakaian extends Produk {
    public function getInfoProduk() {
        $str = "Pakaian : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlPcs} Pcs.";
        return $str;
    }
}


class Hiasan extends  Produk {
    public function getInfoProduk() {
        $str = "Hiasan : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuBaterai} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Pakaian("Sandal", "Merah", "Xl", 20000, 100, 0);
$produk2 = new Hiasan("Jam Tangan", "Biru", "L", 40000, 0, 24);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();