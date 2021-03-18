<!-- Antyka Syahrial -->
<?php
    const PHI=3.14; //penulisan konstanta dengan huruf kapital
    //penulisan function diawali huruf kecil
    function luasLingkaran($jarijari){ //variabel lokal pada function diawali huruf kecil
        return $luas = PHI * pow($jarijari, 2); //menghitung luas lingkaran dan mengembalikan nilai
    }

    $JariJari = 10; //global variabel dengan diawali huruf kapital
    echo "Menghitung Luas Lingkaran<br>";
    echo "Luas Lingkaran adalah : ".luasLingkaran($JariJari); //memanggil fungsi luasLingkaran dengan mengisikan nilai variabel JariJari
?>