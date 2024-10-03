<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form mahasiswa</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="">Form mahasiswa</h1>
        <hr>
        <?php
        require_once"BsForm.php";
        $formMhs = new BsForm();
        $formMhs->setInputText('nama','nama','Nama');
        $formMhs->setInputText('nim','nim','Nim');
        $formMhs->setInputText('prodi','prodi','Prodi');
        $formMhs->setInputText('fakultas','fakultas','Fakultas');
        $formMhs->setButton('Simpan');
        $formMhs->showForm();
   ?>
      </div>
    </div>
  </div>
</body>

</html>