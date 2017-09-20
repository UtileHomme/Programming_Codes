<?php

$servername="localhost";
$user = 'root';
$password= 'jatin';

class ServerException extends Exception
{

}

class DatabaseException extends Exception
{

}

try
{
  $conn = new PDO("mysql:host=localhost;dbname=tsting", $user, $password);
  if(!$conn)
  {
    throw new Exception('Could not connect to server');
  }
  else
  {
    echo 'Connected';
  }
  //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // set the PDO error mode to exception
}catch(Exception $ex)
{
  echo "Connection failed: ".$ex->getMessage();
}



?>
