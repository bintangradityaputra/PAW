<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_bintang";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    echo "koneksi gagal";
}
