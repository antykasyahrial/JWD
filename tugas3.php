
<!-- Antyka Syahrial
    deret akan ditampilkan dengan bentuk tabel oleh karena itu, dideklarasikan tag html, head dan body -->
<!DOCTYPE html>
<html>
    <head>
        <title>Deret bilangan ganjil genap</title> 
    </head>
    <body>
        <!-- mendeklarasikan tabel dengan border 1 -->
        <table border="1">
            <tr>
                <td>Ganjil</td> <!-- Baris 1 kolom 1 akan menampilkan output "ganjil" -->
                <td>Genap</td> <!-- Baris 1 kolom 2 akan menampilkan output "genap" -->
            </tr>
            <tr>
                <td> <!-- Baris 2 kolom 1 akan menampilkan output deretan bilangan ganjil -->
                    <?php
                        for($i=1; $i<=100; $i++){ //melakukan looping variabel i dari 1 hingga 100 sebagai deret yang ditentukan
                            if(($i%2) == 1){ //nilai i akan dimodulo dengan 2 dan jika hasilnya 1 maka bilangan tersebut ganjil
                                echo "$i<br>"; //jika bilangan memenuhi syarat di atas maka nilai i akan dioutputkan
                            }
                        }
                    ?>
                </td>
                <td> <!-- Baris 2 kolom 2 akan menampilkan output deretan bilangan genap -->
                    <?php
                        for($i=1; $i<=100; $i++){ //melakukan looping variabel i dari 1 hingga 100 sebagai deret yang ditentukan
                            if(($i%2) == 0){ //nilai i akan dimodulo dengan 2 dan jika hasilnya 0 maka bilangan tersebut genap
                                echo "$i<br>"; //jika bilangan memenuhi syarat di atas maka nilai i akan dioutputkan
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>

    </body>
</html>