<!-- Antyka Syahrial -->
<!doctype html>
<html>
    <head>
        <title>Nilai</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        <div class="jumbotron text-center bg-info">
            <h1><b>Nilai Peserta Pelatihan</b></h1>
        </div>

        <div class="container">
            <div class="text-center">
                <h4>
                    <?php

                        //memanggil package bcrypt
                        require 'vendor/autoload.php';
                        use Bcrypt\Bcrypt;
                        //inisialisasi package bcrypt
                        $bcrypt = new Bcrypt();

                        if(isset($_POST['submit'])){
                            $kelas = $_POST["kelas"];
                            echo $kelas;
                        }

                        $target_dir = "uploads/"; //target folder
                        $target_file = $target_dir . basename($_FILES["gambar_contoh"]["name"]); //target file nama file dan ekstensi
                        $error = false; //penyimpanan sementara, jika gambar gagal disimpan maka error true
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //menampung ekstensi file yg diupload
                        
                        //cek variabel $_POST["submit"] dan cek file sudah tersimpan di penyimpanan temporary
                        if(isset($_POST["submit"])) {
                            $check = getimagesize($_FILES["gambar_contoh"]["tmp_name"]);
                            if($check !== false) {
                            echo "File is an image - " . $check["mime"] . ".";
                            $error = false;
                            } else {
                            echo "File is not an image.";
                            $error = false;
                            }
                        }

                        //cek ada file yang sama atau tidak
                        if (file_exists($target_file)) {
                            echo "Sorry, file already exists.";
                            $error = true;
                        }

                        //memvalidasi ukuran tidak lebih dari 500kb
                        if ($_FILES["gambar_contoh"]["size"] > 500000) {
                            echo "Sorry, your file is too large.";
                            $error = true;
                        }
                        
                        //memvalidasi ekstensi file
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif" ) {
                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $error = true;
                        }

                        //validasi error
                        if ($error == true) {
                            echo "Sorry, your file was not uploaded.";
                        } else {
                            if (move_uploaded_file($_FILES["gambar_contoh"]["tmp_name"], $target_file)) {
                                echo "The file ". basename( $_FILES["gambar_contoh"]["name"]). " has been uploaded.<br>";
                            } else {
                                echo "Sorry, there was an error uploading your file.<br>";
                            }
                        }

                        $namapeserta = $_REQUEST["namapeserta"];
                        $nilaipraktik = $_REQUEST["nilaipraktik"];
                        $nilaipengetahuan = $_REQUEST["nilaipengetahuan"];
                        $nilaisikap = $_REQUEST["nilaisikap"];
                        $nilaikehadiran = $_REQUEST["nilaikehadiran"];
                        $jeniskelamin = $_REQUEST["jeniskelamin"];
                        $tempatlahir = $_REQUEST["tempatlahir"];
                        $tanggallahir = $_REQUEST["tanggallahir"];
                        $hasil = ($nilaipraktik*0.6)+($nilaipengetahuan*0.3)+($nilaisikap*0.05)+($nilaikehadiran*0.05);

                        echo ("<br>Nama Peserta : ".$namapeserta."<br>");
                        echo ("Hash Nama anda : ".$bcrypt->encrypt($namapeserta)."<br>"); //memanggil fungsi encrypt
                        echo ("Nilai akhir adalah : ".$hasil."<br>");
                        echo ("Tempat lahir adalah : ".$tempatlahir."<br>");
                        echo ("Tanggal lahir adalah : ".$tanggallahir."<br>");
                        echo ("Jenis kelamin adalah : ".$jeniskelamin."<br>");

                        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                            if(isset($_POST['kelas']) )
                            {
                            $kelas = $_POST['kelas'];
                            echo "Skema yang diambil adalah : ".$kelas."<br>";
                            }
                        }

                        
                        if(!empty($_REQUEST["skill"])){
                            echo ("Keahlian dasar adalah : ");
                            foreach($_REQUEST["skill"] as $skill){
                                echo ($skill. ", ");
                            }
                            echo ("<br>");
                        } else {
                            echo ("Tidak ada keahlian<br>");
                        }

                        echo ("Kriteria : ");

                        if($hasil>=95)
                            echo ("<b>Memuaskan</b>");
                        elseif($hasil>=85)
                            echo ("<b>Baik Sekali</b>");
                        elseif($hasil>=75)
                            echo ("<b>Baik</b>");
                        elseif($hasil>=65)
                            echo("<b>Cukup</b>");
                        else
                            echo("<b>Tidak Lulus</b>");

                    ?>
                </h4>
            </div>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>