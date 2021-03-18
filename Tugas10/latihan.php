<!-- Antyka Syahrial -->
<!doctype html>
<html>
    <head>
        <title>Test</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="assets/css/bootstrap.css">
    </head>
    <body>
        <div class="jumbotron text-center bg-info">
            <h1><b>Test</b></h1>
        </div>

        <div class="container">

            <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <div class="form-group">
                    <label for="usr">Nama </label>
                    <input type="text" class="form-control" id="usr" name="nama" placeholder="Masukkan nama" required>
                </div>

                <div class="form-group">
                     <label for="usr">Jumlah</label>
                    <select name="jumlah" class="form-control" id="usr" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">OK</button>
            </form>

            <form method="POST" action="latihanoutput.php">
                <table border="1">
                    <tr>
                        <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                                if(isset($_POST["jumlah"])) {
                                    $jumlah = $_POST['jumlah'];
                                    for($i=1; $i<=$jumlah; $i++){?>
                                        <td>
                                        <input type="text" class="form-control" id="usr" name="buku<?php echo $i ?>[]" placeholder="Masukkan nama buku" required>
                                        <input type="text" class="form-control" id="usr" name="buku<?php echo $i ?>[]" placeholder="Masukkan id" required>
                                        </td>
                                    <?php }
                                }
                            }
                        ?>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">OK</button>
            </form>
            </div>
    </body>
</html>