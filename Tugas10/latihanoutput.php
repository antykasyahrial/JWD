<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_REQUEST["buku1"])){
            foreach($_REQUEST["buku1"] as $buku1){
                    echo ($buku1);
                }
            }
        }
 ?>