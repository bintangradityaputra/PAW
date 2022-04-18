<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: #0BD7FE;">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" style="font-weight: bold; font-size :20px">PAUD BUMI PERTIWI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="lamanAdmin.php" style="font-size: 16px;font-weight :bold;">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="formPendaftaran.php" style="font-size: 16px;font-weight :bold;">Form Pendaftaran</a>
                </li>
            </ul>
        </div>
    </nav>
    <br> <br>

    <div class="container" class="container" style="background: rgba(21, 16, 16, 0.5);color :white;padding :30px; border-radius:20px;text-align :center">
        <?php
        include "koneksiUTS.php";

        $namaSiswa = $_POST['namaSiswa'];
        $alamatSiswa = $_POST['alamat'];
        $namaOrtu = $_POST['namaOrtu'];
        $noTelpon = $_POST['noTelpon'];

        $sql = "INSERT INTO dataSiswa VALUES (null, '$namaSiswa', '$alamatSiswa', '$namaOrtu' , '$noTelpon')";
        $hasil = mysqli_query($koneksiUTS, $sql);
        if (!$hasil) {
            echo "Eksekusi tambah data mahasiswa gagal";
        }
        ?>
        <br> <br> <br>

        <h1>Data Telah Berhasil Di Tambahkan!!</h1>
        <a href="dataSiswa.php" style="text-decoration : none; font-weight: bold;">
            <p style="font-size: 16px; color : black;">TAMPILKAN DATA SISWA</p>
        </a>


    </div>
</body>

</html>