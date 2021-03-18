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
            <h2>Input Nilai</h2>

            <form action="output_nilai.php" method="POST">
                <div class="form-group">
                    <label for="usr">Nama Peserta</label>
                    <input type="text" class="form-control" id="usr" name="namapeserta" placeholder="Masukkan nama peserta" required>
                </div>

                <div class="form-group">
                    <label for="usr">Nilai Praktik</label>
                    <input type="text" class="form-control" id="usr" name="nilaipraktik" placeholder="Masukkan Nilai Praktik" required>
                </div>

                <div class="form-group">
                    <label for="usr">Nilai Pengetahuan</label>
                    <input type="text" class="form-control" id="usr" name="nilaipengetahuan" placeholder="Masukkan Nilai Pengetahuan" required>
                </div>

                <div class="form-group">
                    <label for="usr">Nilai Sikap</label>
                    <input type="text" class="form-control" id="usr" name="nilaisikap" placeholder="Masukkan Nilai Sikap" required>
                </div>

                <div class="form-group">
                    <label for="usr">Nilai Kehadiran</label>
                    <input type="text" class="form-control" id="usr" name="nilaikehadiran" placeholder="Masukkan Nilai Kehadiran" required>
                </div>

                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>