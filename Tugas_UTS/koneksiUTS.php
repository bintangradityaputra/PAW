<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "uts_paw";

$koneksiUTS = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksiUTS) {
    echo "koneksi gagal";
}
