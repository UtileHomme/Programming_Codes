<?php

$servername="localhost";
$user = 'root';
$password= 'jatin';

class ServerException extends Exception
{
      public function showSpecific()
      {
        return 'Error thrown on line '.$this->getLine().' in '.$this->getFile();
      }
}

try {
  $conn = new PDO("mysql:host=localhost;dbname=testin", $user, $password);
  if(!$conn)
  {
    throw new ServerException();
  }
  else {
    echo 'Connected';
  }

  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  var_dump($conn);


  // set the PDO error mode to exception
}
catch(ServerException $ex)
{
  echo $ex->showSpecific();
}



?>
