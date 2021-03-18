<!-- Antyka Syahrial -->
<?php
        
    /*
        * @desc fungsi ini digunakan untuk mencari nilai luas segitiga
        * @param $alas berisi nilai alas dalam bentuk integer
        * @param $tinggi berisi nilai tinggi bentuk integer
        * @return $luas yang berisi nilai hasil luas dalam bentuk integer
    */
    function luasSegitiga($alas, $tinggi){ //variabel lokal pada function diawali huruf kecil
        $luas = 0.5 * $alas * $tinggi;
        return $luas;
    }

    //global variabel
    $Alas = 10;
    $Tinggi = 5;
    echo "Alas segitiga : ".$Alas."<br>";
    echo "Tinggi segitiga : ".$Tinggi."<br>";
    echo "Luas Segitiga adalah : ".luasSegitiga($Alas, $Tinggi);

?>