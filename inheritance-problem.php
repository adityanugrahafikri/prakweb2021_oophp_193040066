<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 24 September 2021
Mempelajari mengenai inheritance problem
*/
?>
<?php

class Produk {
    public $judul,
           $warna,
           $ukuran,
           $harga,
           $jmlPcs,
           $waktuBaterai,
           $tipe;

    public function __construct( $judul = "judul", $warna = "warna", $ukuran = "ukuran", $harga = 0, $jmlPcs = 0, $waktuBaterai = 0, $tipe ) {
        $this->judul = $judul;
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->harga = $harga;
        $this->jmlPcs = $jmlPcs;
        $this->waktuBaterai = $waktuBaterai;
        $this->tipe = $tipe;
    }

    public function getLabel() {
        return "$this->warna, $this->ukuran";
    }

    public function getInfoLengkap() {
        // Pakaian : Sandal | Merah, Xl (Rp. 20000) - 100 Pcs.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if( $this->tipe == "Pakaian") {
            $str .= " - {$this->jmlPcs} Pcs.";
        } else if( $this->tipe == "Hiasan") {
            $str .= " ~ {$this->waktuBaterai} Jam.";
        }

        return $str;
    }

} 


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Sandal", "Merah", "Xl", 20000, 100, 0, "Pakaian");
$produk2 = new Produk("Jam Tangan", "Biru", "L", 40000, 0, 24, "Hiasan");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();