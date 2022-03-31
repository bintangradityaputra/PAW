<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color :black ; color : white;">
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_177 WHERE id_mhs = $id ";
    $hasil = mysqli_query($konek, $sql);

    if (!$hasil) {
        echo "query salah";
    }
    ?>


    <h1 style="text-align: center; margin-top : 20px;">EDIT DATA MAHASISWA</h1>

    <?php
    while ($row = mysqli_fetch_array($hasil)) {
    ?>

        <div class="container" style="background-color: black; width :max-content; text-align :center">
            <form action="update.php" method="post">
                <input type="hidden" name="id_mhs" value="<?php echo $row['id_mhs'] ?>">
                Nama Mahasiwa :<br> <input type="text" name="nama_mhs" value="<?php echo $row['nama_mhs'] ?>"> <br>
                <br>
                NIM Mahasiswa :<br> <input type="text" name="nim_mhs" value="<?php echo $row['nim_mhs'] ?>"><br>
                <br>
                Alamat Mahasiswa :<br> <input type="text" name="alamat_mhs" value="<?php echo $row['alamat_mhs'] ?>"><br>
                <br>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    <?php } ?>
</body>

</html>