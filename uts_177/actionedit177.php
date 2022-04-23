<?php
include "koneksi177.php";

$id = $_POST['id_177'];
$nama = $_POST['nama_177'];
$email = $_POST['email_177'];

$sql = "UPDATE tbl_177 SET nama_177='$nama', email_177='$email'  WHERE id_177 = $id";
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    echo "Edit Data Siswa Gagal";
} else {
    echo "Edit Data Siswa Berhasil <br>";
    echo "<a href = 'tampil177.php'>Tampilkan Data Siswa</a>";
}
