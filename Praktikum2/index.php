<?php
 include "Orang.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="test">
  </div>
  <h1>Hello Praktikum 2</h1>
  <div>
    <?php

      // proses instansiasi
      $mahasiswa = new Orang('dzikri arya');

      //menggunakan setter dan getter
      $mahasiswa->setNama('dzikri arya');
      $mahasiswa->setTgllahir('2005-12-12');
      $mahasiswa->setAlamat('simpang rimbo');

      echo "<br>";
      echo "data mahasiswa".$mahasiswa->getNama(). "<br>";
      echo "Nama: " .$mahasiswa->getNama(). "<br>";
      echo "Tanggal lahir: ".$mahasiswa->getTgllahir(). "<br>" ;
      echo "Alamat: ".$mahasiswa->getAlamat(). "<br>" ;

      
      //memanggil method
      $mahasiswa->ucapkanSalam();
      
  
      echo "<br>";

      $mahasiswa2 = new Orang('dzikri arya');


      $mahasiswa2->ucapkanSalam();
    ?>
  </div>
</body>
</html>