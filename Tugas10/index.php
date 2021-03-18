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

            <form action="output_nilai.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Nama Peserta</label>
                    <input type="text" class="form-control" id="usr" name="namapeserta" placeholder="Masukkan nama peserta" required>
                </div>

                <div class="form-group">
                    <label for="usr">Tempat Lahir</label>
                    <input type="text" class="form-control" id="usr" name="tempatlahir" placeholder="Masukkan Tempat Lahir" required>
                </div>

                <div class="form-group">
                    <label for="usr">Tanggal Lahir </label>
                    <input type="date" class="form-control" id="usr" name="tanggallahir" value="2018-07-22" min="1800-01-01" max="2020-12-31" required>
                </div>

                <div class="form-group">
                    <label for="usr">Jenis Kelamin</label><br>
                    <input type="radio" name="jeniskelamin" value="lakilaki"> Laki - Laki<br>
                    <input type="radio" name="jeniskelamin" value="perempuan"> Perempuan<br>
                </div>

                <div class="form-group">
                    <label for="usr">Keahlian Dasar</label><br>
                    <input type="checkbox" id="skill1" name="skill[]" value="HTML">
                    <label for="skill1"> HTML</label><br>
                    <input type="checkbox" id="skill2" name="skill[]" value="PHP">
                    <label for="skill2"> PHP</label><br>
                    <input type="checkbox" id="skill3" name="skill[]" value="CSS">
                    <label for="skill3"> CSS</label><br>
                </div>

                <div class="form-group">
                     <label for="usr">Jenis Skema</label>
                    <select name="kelas" class="form-control" id="usr" required>
                        <option value="JWD">Junior Web Development</option>
                        <option value="JOO">Junior Office Operator</option>
                    </select>
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

                <div class="form-group">
                    <input type="file" name="gambar_contoh" id="gambar_contoh">
                </div>

                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>