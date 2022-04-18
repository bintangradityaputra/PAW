<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Edit</title>
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
                <li class="nav-item">
                    <a class="nav-link active" href="login.php" style="font-size: 16px;font-weight :bold;margin-left :820px;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <br> <br>

    <?php
    include 'koneksiUTS.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM datasiswa WHERE idSiswa = $id ";
    $hasil = mysqli_query($koneksiUTS, $sql);
    $data = mysqli_fetch_assoc($hasil);


    ?>

    <div class="container" style="background: rgba(21, 16, 16, 0.5);color :white;padding :30px; border-radius:20px;text-align :center">
        <h1>FORM EDIT DATA Siswa</h1>
        <h1>PAUD BUMI PERTIWI</h1> <br>
        <form action="updateSiswa.php" method="POST">
            <input type="hidden" name="idSiswa" value="<?php echo $data['idSiswa'] ?>">
            Nama Siswa :<br> <input type="text" name="namaSiswa" value="<?php echo $data['namaSiswa'] ?>"> <br>
            <br>
            Alamat :<br> <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"> <br>
            <br>
            Nama Orang Tua/Wali :<br> <input type="text" name="namaOrtu" value="<?php echo $data['namaOrtu'] ?>"> <br>
            <br>
            Nomor Telepon :<br> <input type="text" name="noTelpon" value="<?php echo $data['noTelpon'] ?>"> <br>
            <br>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</body>

</html>