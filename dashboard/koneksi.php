<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "finepay";
    $koneksi = mysqli_connect($host,$user,$pass,$db);
    $TEST = "skaskja";
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>