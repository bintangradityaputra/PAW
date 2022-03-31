<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: black;
        }

        .container {
            background-color: cyan;
            width: max-content;
            margin-top: 100px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "koneksi.php";

        $id = $_POST['id_mhs'];
        $nama = $_POST['nama_mhs'];
        $nim = $_POST['nim_mhs'];
        $alamat = $_POST['alamat_mhs'];

        $sql = "UPDATE tbl_177 SET nama_mhs='$nama', nim_mhs='$nim', alamat_mhs='$alamat' WHERE id_mhs = $id";
        $hasil = mysqli_query($konek, $sql);
        if (!$hasil) {
            echo "Eksekusi Update data mahasiswa gagal";
        } else {
            echo "<b>PERUBAHAN TELAH BERHASIL DILAKUKAN !!!</b><br>";
            echo "<a href='tampil.php'>Tampilkan Data</a>";
        }
        ?>
    </div>
</body>

</html>