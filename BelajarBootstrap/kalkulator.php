<!-- Antyka Syahrial -->
<!doctype html>
<html>
    <head>
        <title>Kalkulator</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Tampilan responsive -->

        <link rel="stylesheet" href="assets/css/bootstrap.css"> <!-- menghubungkan ke css bootstrap -->
    </head>
    <body>
        <!-- Membuat Jumbotron -->
        <div class="jumbotron text-center bg-info">
            <h1><b>Kalkulator</b></h1>
        </div>

        <div class="container"> <!-- Membuat container untuk wrap konten -->
            <h2>Masukkan Bilangan</h2> 
            
            <!-- Membuat form dengan method post dan akan dieksekusi pada halaman yang sama -->
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">  
                
                <!-- Field untuk bilangan1 -->
                <div class="form-group">
                    <label for="bilangan">Bilangan 1 : </label> 
                    <input type="number" class="form-control" id="bilangan" name="bilangan1" placeholder="Masukkan bilangan 1" required>
                </div>
                
                <!-- Field untuk bilangan2 -->
                <div class="form-group">
                    <label for="bilangan">Bilangan 2 : </label>
                    <input type="number" class="form-control" id="bilangan" name="bilangan2" placeholder="Masukkan bilangan 2" required>
                </div>

                <!-- Membuat button submit -->
                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
            <br> <h4>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") { //form yang disubmit di cek dan dibatasi hanya bentuk method post
                    $bilangan1 = $_POST["bilangan1"]; //mengisi nilai bilangan1
                    $bilangan2 = $_POST["bilangan2"]; //mengisi nilai bilangan2

                    function penjumlahan ($bilangan1, $bilangan2){ //fungsi penjumlahan
                        return $bilangan1+$bilangan2;
                    }

                    function pengurangan ($bilangan1, $bilangan2){ //fungsi pengurangan
                        return $bilangan1 - $bilangan2;
                    }
                    
                    function perkalian ($bilangan1, $bilangan2){ //fungsi perkalian
                        return $bilangan1 * $bilangan2;
                    }
                    
                    function pembagian ($bilangan1, $bilangan2){ //fungsi pembagian
                        return $bilangan1 / $bilangan2;
                    }
                    
                    //memanggil nilai variabel bilangan1, bilangan2 dan hasil penjumlahan pada fungsi penjumlahan
                    echo "Hasil Penjumlahan dari ".$bilangan1. " dan ".$bilangan2." : ".penjumlahan($bilangan1, $bilangan2)."<br>";
                    //memanggil nilai variabel bilangan1, bilangan2 dan hasil pengurangan pada fungsi pengurangan
                    echo "Hasil Pengurangan dari ".$bilangan1. " dan ".$bilangan2." : ".pengurangan($bilangan1, $bilangan2)."<br>";
                    //memanggil nilai variabel bilangan1, bilangan2 dan hasil perkalian pada fungsi perkalian
                    echo "Hasil Perkalian dari ".$bilangan1. " dan ".$bilangan2." : ".perkalian($bilangan1, $bilangan2)."<br>";
                    //memanggil nilai variabel bilangan1, bilangan2 dan hasil pembagian pada fungsi pembagian
                    echo "Hasil Pembagian dari ".$bilangan1. " dan ".$bilangan2." : ".pembagian($bilangan1, $bilangan2);
                }
            ?>
            </h4>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>