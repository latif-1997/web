<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dimas_tokoreklame";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>