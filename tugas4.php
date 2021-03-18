<!-- Antyka Syahrial -->
<!DOCTYPE HTML>  
<html>
    <head>
        <title>Membuat Segitiga</title>
    </head>
    <body>  
        <h2>Membuat Segitiga</h2>

            <!-- Membuat form dengan method post dan akan dieksekusi pada halaman yang sama-->
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
                Jumlah Bintang: <input type="text" name="x"> <!-- Membuat field untuk memasukkan bilangan atau variabel untuk menampung nilai-->
                <br><br>
                <input type="submit" name="submit" value="Kirim"> <!-- Membuat button submit -->
            </form>
            <br>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") { //form yang disubmit di cek dan dibatasi hanya bentuk method post
                    $x = $_POST["x"]; //menampung data atau nilai
                    
                    //dalam membuat segitiga maka menggunakan 2 perulangan seperti matriks
                    for($i=1; $i<=$x; $i++){ //perulangan pada baris dari 1 hingga bilangan yang diinputkan
                        for($j=0; $j<$i; $j++){ //perulangan pada kolom dari 0 hingga bilangan yang diinputkan kurang dari nilai i
                            echo "*"; //menampilkan *
                        }
                        echo "<br>"; //menambahkan enter pada setiap baris yang selesai dieksekusi
                    }
                }
            ?>
    </body>
</html>