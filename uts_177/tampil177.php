<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilan</title>
</head>

<body>
    <h1 align="center">DATA SISWA SMA NEGERI 1 GONDANG</h1>
    <center>
        <button>
            <a href="tambah177.php">Tambah Data Siswa</a>
        </button>
    </center>

    <table width="90%" border="1" cellspacing="1" align="center">
        <tr style="text-align: center;">
            <td>ID Siswa</td>
            <td>Nama Siswa</td>
            <td>Email Siswa</td>
            <td>Action</td>
        </tr>

        <?php
        include "koneksi177.php";
        $sql = "SELECT * FROM tbl_177";
        $result = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr align="center">
                <td><?= $row['id_177']; ?></td>
                <td><?= $row['nama_177']; ?></td>
                <td><?= $row['email_177']; ?></td>
                <td>
                    <a href="edit177.php?id=<?= $row['id_177'] ?>"> Edit </a> |
                    <a href="hapus177.php?id=<?= $row['id_177'] ?>"> Delete </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>