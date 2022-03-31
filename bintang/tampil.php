<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: black;">

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="tampil.php">
                <img src="UTM DIKBUDRISTEK.png" alt="Logo" style="width:40px;" class="rounded-pill"> UNIVERSITAS TRUNOJOYO MADURA
            </a>
        </div>
    </nav>
    <div class="container mt-3">
        <h1 style="text-align :center ; color : white ; margin-top: 20px">DAFTAR NAMA MAHASISWA</h1>
        <table class="table table-dark" style="margin-top : 30px;color :aliceblue">
            <tr style="text-align :center">
                <td><b>ID Mahasiswa</b></td>
                <td><b>NIM Mahasiswa</b></td>
                <td><b>Nama Mahasiswa</b></td>
                <td><b>Alamat Mahasiswa</b></td>
                <td><b>Action</b></td>
            </tr>
            <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tbl_177";
            $hasil = mysqli_query($konek, $sql);
            while ($row = mysqli_fetch_array($hasil)) {
            ?>
                <tr style="text-align: center;">
                    <td><?= $row['id_mhs']; ?></td>
                    <td><?= $row['nim_mhs']; ?></td>
                    <td><?= $row['nama_mhs']; ?></td>
                    <td><?= $row['alamat_mhs']; ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row['id_mhs'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a> |
                        <a href="hapus.php?id=<?= $row['id_mhs'] ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                            </svg>
                        </a>
                    </td>
                </tr>
            <?php }
            ?>
            <a href="tambah.php"><button type="submit" class="btn btn-primary">Tambah Data</button></a>
        </table>
    </div>

</body>

</html>