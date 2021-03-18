<!-- Antyka Syahrial 
    Pure function adalah argumen yang sama akan menghasilkan output yang sama-->
<?php 
    function multiplicatinNum($bilangan1, $bilangan2){ //penulisan nama fungsi dan variabel lokal diawali huruf kecil
        return $bilangan1 * $bilangan2; //perkalian bilangan1 dan bilangan2 serta mengembalikan hasil
    }

    //variabel global diawali dengan huruf kapital
    $Bilangan1 = 9;
    $Bilangan2 = 10;
    echo "Perkalian Bilangan<br>";
    echo "Hasil perkalian ".multiplicatinNum($Bilangan1, $Bilangan2); //memanggil fungsi multiplicationNum dan mengisi nilai parameter dengan Bilangan1 dan Bilangan2
?>