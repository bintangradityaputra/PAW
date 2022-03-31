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

<body style="background-color: black;">
    <h1 style="text-align: center; color :white; margin-top :20px">FORM TAMBAH DATA MAHASISWA</h1>
    <div class="container" style="background-color: black; width :max-content; text-align :center; color :white">
        <form action="action.php" method="post">
            Nama Mahasiwa :<br> <input type="text" name="nama_mhs"> <br>
            <br>
            NIM Mahasiswa :<br> <input type="text" name="nim_mhs"> <br>
            <br>
            Alamat Mahasiswa :<br> <input type="text" name="alamat_mhs"> <br>
            <br>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
</body>

</html>