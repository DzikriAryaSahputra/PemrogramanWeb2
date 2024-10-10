<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BukuView</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Daftar Buku</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <?php foreach($dataModel->getKolomTabel() as $kolom):?>
                <th scope="col"><?php echo $kolom;?></th>
                <?php endforeach?>
            </tr>
          </thead>
          <tbody>
            <?php $no = 0;?>
            <?php foreach($dataModel->getData() as $buku):?>
              <tr>
                <td><?php echo ++$no; ?></td>
                <td><?php echo $buku->getJudul(); ?></td>
                <td><?php echo $buku->getPengarang();?></td>
                <td><?php echo $buku->getPenerbit();?></td>
                <td><?php echo $buku->getTahun();?></td>
                </tr>
                <?php endforeach;?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
</body>

</html>