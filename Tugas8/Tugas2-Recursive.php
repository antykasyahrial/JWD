<!-- Antyka Syahrial 
    Recursive adalah fungsi yang memungkinkan untuk memanggil fungsi itu sendiri-->

<?php 
    function faktorial($bilangan){ //penulisan fungsi faktorial dan variabel lokal bilangan diawali dengan huruf kecil
        if ($bilangan < 2){ //jika bilangan lebih kecil dari 2 yaitu 1, maka nilai faktorial 1
            return 1; //mengembalikan nilai 1
        } else{ //jika tidak memenuhi kondisi pertama
            return ($bilangan * faktorial($bilangan - 1));
            //maka hasil dari bilangan dikali dengan pemanggilan fungsi faktorial secara rekursif dengan parameter bilangan dikurang 1
            //rekursif akan berhenti sampai bilangan lebih kecil dari 2 atau sama dengan 1
            //hasil akan dikembalikan ke fungsi
        }
    }

    $Bilangan = 5; //variabel global dengan penulisan diawali huruf kapital
    echo "Menghitung nilai faktorial<br>";
    echo "Nilai faktorial dari ".$Bilangan." adalah ".faktorial($Bilangan);
    //Memanggil fungsi faktorial dengan parameter nilai dari variabel Bilangan
?>