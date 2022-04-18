<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Siswa</title>
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
                <li class="nav-item">
                    <a class="nav-link active" href="login.php" style="font-size: 16px;font-weight :bold;margin-left :820px;">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <br> <br>
    <div class="container" style="background: rgba(21, 16, 16, 0.5);color :white;padding :30px; border-radius:20px;text-align :center">
        <h1 style="text-align: center; color :white;">Form Tambah Data Siswa</h1>
        <h1 style="text-align: center; color :white;">PAUD Bumi Pertiwi</h1>
        <form action="actionSiswa.php" method="post">
            Nama Siswa :<br> <input type="text" name="namaSiswa"> <br>
            <br>
            Alamat :<br> <input type="text" name="alamat"> <br>
            <br>
            Nama Orang Tua/Wali:<br> <input type="text" name="namaOrtu"> <br>
            <br>
            Nomor Telepon :<br> <input type="text" name="noTelpon"> <br>
            <br>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>