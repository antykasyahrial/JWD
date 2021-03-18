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

            <form action="output.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="usr">Nama Peserta</label>
                    <input type="text" class="form-control" id="usr" name="user1[]" placeholder="Masukkan nama peserta" required>
                    <input type="text" class="form-control" id="usr" name="user1[]" placeholder="Masukkan Tempat Lahir" required>
                    <input type="text" class="form-control" id="usr" name="user2[]" placeholder="Masukkan nama peserta" required>
                    <input type="text" class="form-control" id="usr" name="user2[]" placeholder="Masukkan Tempat Lahir" required>
                </div>

                <button type="submit" class="btn btn-primary">Hitung</button>
            </form>
        </div>

        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>