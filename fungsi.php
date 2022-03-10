<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Nomor 3</title>
</head>

<body>
    <!-- fungsi dibawah berguna untuk menentukan selisih antara dua bilangan -->
    <?php
    function selisih($num1, $num2)
    {
        if ($num1 > $num2) $hasil = $num1 - $num2;
        else $hasil = $num2 - $num1;
        return $hasil;
    }
    echo selisih(5, 80) . "</br>";
    echo selisih(50, 23) . "</br>";
    echo selisih(32, 65);
    ?>
</body>

</html>