<?php

require_once "Buku.php";

class DaftarBukuModel
{

  public function getData()
  {
    $daftar_buku = array(
      new buku('Belajar pemrograman web', 'Robert T.', 'Informatika', '2024'),
      new buku('Matematika Diskrit', 'Rinaldi', 'andi publisher', '2017'),
      new buku('Kalkulus', 'Emely S', 'Airlangga', '2024'),
      new buku('Metodologi', 'James w.', 'UIN Publisher', '2018'),
    );

    return $daftar_buku;
  }

  public function getKolomTabel(){
    $kolom_tabel = array(
      'No','Judul','Pengarang','Penerbit','Tahun'
    );

    return $kolom_tabel;
  }
}
