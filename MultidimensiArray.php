<?php
    // Membuat Multidimensi Array
    $kendaraan = [
        "transportasi" => ["Mobil", "Sepeda", "Truk", "Motor", "Bus"],
        "mobil" => ["merk" => "Toyota", "type" => "Vios", "year" => 2016],
        "motor" => ["Honda","Yamaha","Suzuki"]
    ];

    // Menampilkan Output
    echo "Ini Array Kendaraan <br>";
    echo "<br>",$kendaraan["transportasi"][0];
    echo $kendaraan["transportasi"][1];
    echo $kendaraan["transportasi"][2];
    echo $kendaraan["transportasi"][3];
    echo $kendaraan["transportasi"][4];

    echo "<br>============================= <br>";
    echo "Ini Array Mobil<br>";
    echo "<br>", $kendaraan["mobil"]["merk"].", ";
    echo $kendaraan["mobil"]["type"].", ";
    echo $kendaraan["mobil"]["year"]."<br>";
    echo "============================= <br>";

    echo "Ini Array Motor<br>";
    echo "<br>".$kendaraan["motor"][0].", ";
    echo $kendaraan["motor"][1].", ";
    echo $kendaraan["motor"][2]."<br><br><br>";

    // Membuat Multidimensi Array -- Loop Array Multidimensi
    $ar_jus = [
        ["buah"=>"Mangga","harga"=>8000],
        ["buah"=>"Alpukat","harga"=>10000],
        ["buah"=>"Durian","harga"=>14000]
    ];

    foreach ($ar_jus as $jus) {
        echo "jus ".$jus["buah"]." harganya : ".$jus["harga"]."<br>";
    }
?>