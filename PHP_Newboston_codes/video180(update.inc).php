<?php

//echo $_POST['text'];

require 'video113(connect.inc).php';

if(isset($_POST['text']))
{
  $text = $_POST['text'];
  if(!empty($text))
  {
    $query = "INSERT INTO `data`(id, data) VALUES(DEFAULT,?)";
    $result = $conn->prepare($query);
    $result->bindValue(1,"$text",PDO::PARAM_STR);
    if($result->execute())
    {
      echo 'Data inserted';
    }
    else {
      echo 'Data not inserted';
    }

  }
  else {
    echo 'Please type something';
  }
}

 ?>
