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
    $sql = "SELECT * FROM datapengajar WHERE idPengajar = $id ";
    $hasil = mysqli_query($koneksiUTS, $sql);
    $data = mysqli_fetch_assoc($hasil);


    ?>

    <div class="container" style="background: rgba(21, 16, 16, 0.5);color :white;padding :30px; border-radius:20px;text-align :center">
        <h1>FORM EDIT DATA PENGAJAR</h1>
        <h1>PAUD BUMI PERTIWI</h1> <br>
        <form action="updatePengajar.php" method="POST">
            <input type="hidden" name="idPengajar" value="<?php echo $data['idPengajar'] ?>">
            Nama Pengajar :<br> <input type="text" name="namaPengajar" value="<?php echo $data['namaPengajar'] ?>"> <br>
            <br>
            NIP :<br> <input type="text" name="Nip" value="<?php echo $data['Nip'] ?>"> <br>
            <br>
            Alamat :<br> <input type="text" name="alamatPengajar" value="<?php echo $data['alamatPengajar'] ?>"> <br>
            <br>
            Nomor Telepon :<br> <input type="text" name="telpPengajar" value="<?php echo $data['telpPengajar'] ?>"> <br>
            <br>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</body>

</html>