<?php

    // Membuat Array
    $hewan = [
        "Burung",
        "Kucing",
        "Ikan"
    ];

    // Menghapus Kucing
    unset($hewan[1]);

    echo $hewan[0]."<br>";  // Akan mencetak "Burung"
    echo $hewan[1]."<br>";  // Akan menyebabkan pesan kesalahan karena indeks 1 sudah dihapus
    echo $hewan[2]."<br>";  // Akan mencetak "Ikan"

    echo "<hr>";

    echo "<pre>";
    print_r($hewan);
    echo "</pre>";
?>