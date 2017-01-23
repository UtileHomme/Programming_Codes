<?php

class Log
{
  public function Write($strFileName)
  {
    
    fopen($strFileName,'a+');

  }

  public function Read()
  {
    $strFileName;
  }
}

 ?>
