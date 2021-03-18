<?php 
    $InputProgram=1; //penulisan variabel php diawali dengan $

    function luasSegitiga($tinggi, $alas){
        return $luas = 0.5 * $alas * $tinggi; //harus diakhiri dengan semicolon
    }

    $output = luasSegitiga(5, 10);
    echo $output; //variabel out tidak dideklarasikan, jadi diganti dengan output

    echo "<br>"; //agar hasil luasSegitiga dan luasPersegi terpisah, maka ditambahkan tag <br>

    function luasPersegi($sisi){ //membuat luasPersegi untuk dipanggil
        return $luas = pow($sisi, 2);
    }

    $hitung = luasPersegi(8); //fungi luasPersegi tidak dideklarasikan, jadi harus ditambahkan terlebih dahulu
    echo $hitung;
?>