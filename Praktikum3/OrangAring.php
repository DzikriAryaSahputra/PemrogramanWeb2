<?php

require_once "Orang.php";

class OrangAring extends Orang{
  // override

  public function ucapSalam()
  {
    echo "Helo my name is " .$this->nama;
  }
}