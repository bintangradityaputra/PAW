<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
</head>

<body>
    <?php
    include "koneksi177.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_177 WHERE id_177 = $id";
    $result = mysqli_query($koneksi, $sql);

    if (!$result) {
        echo "Query Salah";
    }
    ?>

    <h1>Form Edit Siswa</h1>
    <?php
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <form action="actionedit177.php" method="post">
            <input type="hidden" name="id_177" value="<?php echo $row['id_177'] ?>">
            Nama Siswa : <input type="text" name="nama_177" value="<?php echo $row['nama_177'] ?>"> <br>
            Email : <input type="text" name="email_177" value="<?php echo $row['email_177'] ?>"> <br>
            <button type="submit">Update</button>
        </form>
    <?php } ?>
</body>

</html>