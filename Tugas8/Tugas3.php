<!-- Antyka Syahrial Identifikasi Galat/Error-->
<?php 
    echo "Hello World";
    $x = "Selamat Datang";
    $y = 5;

    echo "<br>";
    echo $x;
    echo "<br>";
    echo "Saya sedang belajar Web Developer "; //Parse Error : php menggunakan semicolon, pada baris ini tanpa semicolon. 
    //Dapat disolving dengan menambambahkan semicolon
    echo "<br>";
    echo $z="Ini variabel z"; //Undefined variable: z, variabel z tidak dideklarasikan nilainya
    echo "<br>";
    echo "Ini angka ". $y;
?>