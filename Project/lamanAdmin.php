<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laman Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #0BD7FE;
        }


        p1 {
            font-weight: bold;
            font-size: 30px;
            color: white;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" style="font-weight: bold; font-size :18px">PAUD BUMI PERTIWI</a>
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

    <br>
    <br>

    <p><img src="img/save_thechildre-removebg-preview.png" alt="" style="float: left; width: 65px; height: 60px;margin-left: 20px;">
        <p1>ADMIN PAUD BUMI PERTIWI</p1>
    </p>
    <br>
    <br>
    <div class="container p-3 my-3" style="background-color: #107387;font-weight :bold;">
        <p>
            <img src="img/123-removebg-preview.png" alt="" style="float: left; width: 50px; height: 60px;margin-left: 10px;">
        <p style="font-size:20px"> <a href="dataPengajar.php" style="color: black; padding-left :10px;text-decoration:none">DATA PENGAJAR</a></p>
        </p>
    </div>
    <div class="container p-3 my-3" style="background-color: #107387;font-weight :bold;">
        <p>
            <img src="img/person-removebg-preview.png" alt="" style="float: left; width: 50px; height: 60px;margin-left: 10px;">
        <p style="font-size:20px"> <a href="dataSiswa.php" style="color: black; padding-left :10px;text-decoration:none">DATA SISWA</a></p>
        </p>
    </div>
    <div class="container p-3 my-3" style="background-color: #107387;font-weight :bold;">
        <p>
            <img src="img/images132-removebg-preview.png" alt="" style="float: left; width: 50px; height: 60px;margin-left: 10px;">
        <p style="font-size:20px"> <a href="addPengajar.php" style="color: black; padding-left :10px;text-decoration:none">TAMBAH DATA PENGAJAR</a></p>
        </p>
    </div>
    <div class="container p-3 my-3" style="background-color: #107387;font-weight :bold;">
        <p>
            <img src="img/download__1_-removebg-preview.png" alt="" style="float: left; width: 50px; height: 60px;margin-left: 10px;">
        <p style="font-size:20px"> <a href="addSiswa.php" style="color: black; padding-left :10px;text-decoration:none">TAMBAH DATA SISWA</a></p>
        </p>
    </div>
</body>

</html>