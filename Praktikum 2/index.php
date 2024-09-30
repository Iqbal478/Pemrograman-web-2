<?php
include "Orang.php";
include "visibility.php";
include "nilai.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
</head>
<body>
    <h1>Praktikum 2</h1>
<div>
    <?php
        $iqbal = new Orang();
        $iqbal->nama = "M. Iqbal";

        $iqbal->ucapsalam();

    echo "<br>";
        $eka = new Orang();
        $eka->nama = "eka smith";
        $eka->ucapSalam();

        echo "<br>";

        $visibility = new visibility();
        $visibility->tampilkanProperty();

        echo " Ini akses di luar kelas <br>";
        echo "public : " . $visibility->public . '<br>';
        //echo "protected : " . $visibility->protected . '<br>';
        //echo "private : " . $visibility->private . '<br>';

        echo "<br> <br>";

        echo "Nilai MK Pemrograman web:";
        $nilai = new Nilai();
        $nilai->setTugas(79);
        $nilai->setUts(90);
        $nilai->setUas(89);

        echo "Nilai UTS : " . $nilai->getUts() . "<br>";
        echo "Nilai UAS : " . $nilai->getUas() . "<br>";



    ?>
</div>
</body>
</html>