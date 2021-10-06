<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 24 September 2021
Mempelajari mengenai static
*/
?>
<?php

// class ContohStatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Halo " . self::$angka++ . " kali. ";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();