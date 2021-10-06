<?php
/*
Fikri Aditya Nugraha
193040066
https://github.com/adityanugrahafikri/prakweb2021_oophp_193040066
Pertemuan 2 - 24 September 2021
Mempelajari mengenai constant
*/
?>
<?php

// define('NAMA', 'Fikri Aditya Nugraha');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Fikri';
// }

// echo Coba::NAMA;



// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;