<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
        <?php
            function penjumlahan ($a,$b){ //mendeklarasikan fungsi penjumlahan
                return $a+$b; //melakukan penjumlahan dan mengembalikan nilai yang dihasilkan
            }

            function pengurangan ($a,$b){ //mendeklarasikan fungsi pengurangan
                return $a-$b; //melakukan pengurangan dan mengembalikan nilai yang dihasilkan
            }

            function perkalian ($a,$b){ //mendeklarasikan fungsi perkalian
                return $a*$b; //melakukan perkalian dan mengembalikan nilai yang dihasilkan
            }

            function pembagian ($a,$b){ //mendeklarasikan fungsi pembagian
                return $a/$b; //melakukan pembagian dan mengembalikan nilai yang dihasilkan
            }

            $bilangan1 = 9; //mengisi nilai bilangan 1 dengan 9
            $bilangan2 = 3; //mengisi nilai bilangan 2 dengan 3
            echo "Bilangan 1 : ".$bilangan1."<br>"; //menampilkan bilangan 1
            echo "Bilangan 2 : ".$bilangan2."<br>"; //menampilkan bilangan 2
            echo "=================================<br>";//pembatas
            echo "Hasil penjumlahan adalah : ".penjumlahan($bilangan1, $bilangan2)."<br>";//menampilkan hasil penjumlahan dan memanggil fungsi penjumlahan
            echo "Hasil pengurangan adalah : ".pengurangan($bilangan1, $bilangan2)."<br>";//menampilkan hasil pengurangan dan memanggil fungsi pengurangan
            echo "Hasil perkalian adalah : ".perkalian($bilangan1, $bilangan2)."<br>"; //menampilkan hasil perkalian dan memanggil fungsi perkalian
            echo "Hasil pembagian adalah : ".pembagian($bilangan1, $bilangan2)."<br>";//menampilkan hasil pembagian dan memanggil fungsi pembagian
        ?>
    </body>

</html>