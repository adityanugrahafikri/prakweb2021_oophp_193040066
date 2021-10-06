<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 24 September 2021
Mempelajari mengenai setter dan better
*/
?>
<?php

class Produk {
    private $judul,
           $warna,
           $ukuran,
           $harga,
           $diskon = 0;

    public function __construct(  $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0 ) {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPakaian( $pakaian ) {
        $this->pakaian = $pakaian;
    }

    public function getPakaian() {
        return $this->pakaian;
    }

    public function setHiasan( $hiasan ) {
        $this->hiasan = $hiasan;
    }

    public function getHiasan() {
        return $this->hiasan;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function gerDiskon() {
        return $this->diskon;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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
    public $jmlPcs;

    public function __construct(  $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0, $jmlPcs = 0 ) {

        parent::__construct(  $judul, $warna, $ukuran, $harga, $jmlPcs );

        $this->jmlPcs = $jmlPcs;
    }
    
    public function getInfoProduk() {
        $str = "Pakaian : " . parent::getInfoProduk() . " - {$this->jmlPcs} Pcs.";
        return $str;
    }
}


class Hiasan extends  Produk {
    public $waktuBaterai;

    public function __construct( $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0, $waktuBaterai = 0 ) {
        parent::__construct( $judul, $warna, $ukuran, $harga );

        $this->waktuBaterai = $waktuBaterai;
    }

    public function getInfoProduk() {
        $str = "Hiasan : " . parent::getInfoProduk() . " ~ {$this->waktuBaterai} Jam.";
        return $str;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


$produk1 = new Pakaian("Sandal", "Merah", "Xl", 20000, 100);
$produk2 = new Hiasan("Jam Tangan", "Biru", "L", 40000, 24);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

echo $produk1->getJudul();