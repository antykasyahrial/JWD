<!-- Antyka Syahrial -->
<?php 
    echo "Menentukan bilangan<br>";
    
    //penamaan fungsi dimulai dengan huruf kecil
    function tentukanBilangan($bilangan){ //variabel bilangan diawali huruf kecil karena variabel lokal
        if($bilangan % 2 == 0){  //bilangan genap jika dimodulus 2 bernilai 0
            echo "Bilangan ".$bilangan." genap<br>";
        } else { //jika tidak memenuhi kondisi pertama
            echo "Bilangan ".$bilangan." ganjil<br>";
        }
    }

    $Bilangan1=10; //variabel diawali huruf kapital karena variabel global
    $Bilangan2=9;  //variabel diawali huruf kapital karena variabel global
    tentukanBilangan($Bilangan1); //memanggil fungsi tentukanBilangan dengan input nilai variabel Bilangan1
    tentukanBilangan($Bilangan2); //memanggil fungsi tentukanBilangan dengan input nilai variabel Bilangan2
?>