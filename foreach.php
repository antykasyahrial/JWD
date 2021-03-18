<?php
    $books = [
        "Penduan belajar php",
        "Membangun aplikasi web",
        "Tutoial php dan mysql",
        "membuat chat bot dengan php"
    ];

    echo "<h5>Judul Buku PHP : </h5>";
    echo "<ul>";
    foreach ($books as $buku) {
        echo "<li>$buku</li>";
    }
    echo "</ul>";
?>