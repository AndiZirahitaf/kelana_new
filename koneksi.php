<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "kelana";
    $koneksi = new mysqli($host, $user, $pass, $db);
    if (!$koneksi) {
        echo "Koneksi database gagal : " . mysqli_connect_error();
    } else {
        // echo "<script type='text/javascript'>alert('Koneksi Database Berhasil!');</script>";
}
?>