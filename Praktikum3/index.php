<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum 3</title>
</head>

<body>
  <h1>Konsep Pewarisan</h1>
  <div class="" style="font-size: 35px;">
    <?php
    include "OrangBiasa.php";
    include "OrangAring.php";
    include "Mahasiswa.php";

    $james = new OrangBiasa(' James');
    $james->ucapSalam();
    echo "<br>";

    $parto = new OrangAring('Parto');
    $parto->ucapSalam();
    echo "<br>";

    $dzikri = new Mahasiswa(' Dzikri');
    $dzikri->ucapSalam();
    echo "<br>";
    $dzikri->setNim("701230035");
    $dzikri->setProdi("Sistem Informasi");

    $nilaiDzikri = new Nilai();
    $nilaiDzikri->setTugas(90);
    $nilaiDzikri->setUts(80);
    $nilaiDzikri->setUas(82);
    
    $dzikri->setNilai($nilaiDzikri);
    $dzikri->tampilkanData();
    ?>
  </div>

</body>

</html>