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
                        $namapeserta = $_REQUEST["namapeserta"];
                        $nilaipraktik = $_REQUEST["nilaipraktik"];
                        $nilaipengetahuan = $_REQUEST["nilaipengetahuan"];
                        $nilaisikap = $_REQUEST["nilaisikap"];
                        $nilaikehadiran = $_REQUEST["nilaikehadiran"];
                        $hasil = ($nilaipraktik*0.6)+($nilaipengetahuan*0.3)+($nilaisikap*0.05)+($nilaikehadiran*0.05);

                        echo ("Nama Peserta : ".$namapeserta."<br>");
                        echo ("Nilai akhir adalah : ".$hasil."<br>");
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