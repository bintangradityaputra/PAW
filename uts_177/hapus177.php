<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data</title>
</head>
<body>
    <div class="container" style="background-color : cyan ;color :black;padding :30px; border-radius:20px;text-align :center">
        <?php
        include "koneksi177.php";

        $id = $_GET['id'];
        $sql = "DELETE FROM tbl_177 WHERE id_177 = $id";
        $result = mysqli_query($koneksi, $sql);

        if (!$result) {
            echo "Data gagal Dihapus";
        } else {
            echo "data berhasil dihapus <br>";
            echo "<a href = 'tampil177.php'> Tampilkan Data </a>";
        }
        ?>
    </div>
</body>
</html>
