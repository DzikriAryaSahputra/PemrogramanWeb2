<?php 

class Orang{
  //property
  private string $nama;
  private string $tgllahir;
  protected string $alamat;

  //constuktor
  public function __construct($nama)
  {
    $this->nama = $nama;
    echo "object ".$this->nama." dibuat <br>";
    $this->tampilkanPassword();
  }

  //destruct
  public function __destruct()
  {
    echo "object ".$this->nama." dihapus <br>";

  }
  //method
  public function ucapkanSalam(){
    echo "<h2> Hallo perkenalkan nama saya ". $this->nama." </h2>";
  }

  private function tampilkanPassword(){
    echo "Rahasia123";
  }

  //setter
  public function setNama($nama){
    $this->nama=$nama;
  }

  //getter
  public function getNama(){
    return $this->nama;
  }

  public function setTgllahir($tgllahir){
    $this->tgllahir = $tgllahir;
  }

  public function getTgllahir(){
    return $this->tgllahir;
  }

  public function setAlamat($alamat){
    $this->alamat = $alamat; 
  }

  public function getAlamat(){
    return $this->alamat;
  }
}