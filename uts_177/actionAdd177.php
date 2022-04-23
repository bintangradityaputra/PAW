<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setelah Tambah</title>
</head>

<body style="color: black;">
    <div class="container" style="background-color : cyan ;color :black;padding :30px; border-radius:20px;text-align :center">
        <?php
        include "koneksi177.php";

        $nama = $_POST['nama_177'];
        $email = $_POST['email_177'];

        $sql = "INSERT INTO tbl_177 VALUES (null, '$nama', '$email')";
        $result = mysqli_query($koneksi, $sql);
        if (!$result) {
            echo "Tambah Data Gagal";
        } else {
            echo "Tambah Data Berhasil <br>";
            echo "<a href = 'tampil177.php'> Tampilkan Data </a>";
        }
        ?>
    </div>
</body>

</html>