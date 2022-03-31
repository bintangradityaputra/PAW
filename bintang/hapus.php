<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
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

        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_177 WHERE id_mhs=$id";
        $hasil = mysqli_query($konek, $sql);
        if (!$hasil) {
            echo "Delete Data Gagal";
        } else {
            echo "<b>DATA BERHASIL DIHAPUS !!!</b><br>";
            echo "<a href='tampil.php'>Tampilkan Data</a>";
        } ?>
    </div>
</body>

</html>