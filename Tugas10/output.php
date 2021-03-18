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

        <table style width="50%" border="1">
            <tr>
                <th>Nama</th>
                <th>Tempat Lahir</th>
            </tr>
            <!-- Data user 1 -->
            <tr>
                <?php 
                    if(!empty($_REQUEST["user1"])){
                            foreach($_REQUEST["user1"] as $user1){
                                echo ("<td>".$user1."</td>");
                            }
                    }
                ?>
            </tr>

            <tr>
                <?php 
                    if(!empty($_REQUEST["user2"])){
                            foreach($_REQUEST["user2"] as $user2){
                                echo ("<td>".$user2."</td>");
                            }
                    }
                ?>
            </tr>
        </table>
        </table>
    </body>
</html>