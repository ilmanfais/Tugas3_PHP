<?php
    // Membuat Associative Array
    $login = [
        "id" => 786,
        "pass" => 123,
        "role" => "admin",
        "active" => 1,
        "level" => 1,
    ];

    // Menampilkan Output
    echo "<br>".$login["id"];
    echo $login["pass"];
    echo $login["role"];
    echo $login["active"];
    echo $login["level"]. "<br><br>";

    echo "Id = " . $login["id"] . "<br>";
    echo "Password = " . $login["pass"] . "<br>";
    echo "Role = " . $login["role"] . "<br>";
    echo "Active = " . $login["active"] . "<br>";
    echo "Level = " . $login["level"] . "<br><br>";

    // Membuat Array Associative
    $umur = ["Ahmad"=>20,"Ali"=>21,"Dewi"=>19];

    // Loop Associative Array
    foreach ($umur as $key => $val) {
        echo "Key : ".$key.", Value ".$val;
        echo "<br>"; 
    }
?>