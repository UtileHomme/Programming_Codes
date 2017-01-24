<?php

//valid for video 4 and 5
class Log
{

  private $FileName;
  private $Data;

  public function Write($strFileName,$strData)
  {
    //Set Clas Vars
      $this->FileName = $strFileName;
      $this->Data = $strData;

      //Write the f ile
      $handle = fopen($strFileName,'a+');
      fwrite($handle,$strData."\n");
      fclose($handle);
  }

  public function Read($strFileName)
  {
    $this->_FileName = $strFileName;
    $handle = fopen($strFileName, 'r');
    return file_get_contents($strFileName);
  }


}

?>
