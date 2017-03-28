<?php
// print_r(PDO::getAvailableDrivers());     //to check the available drivers

$servername="localhost";
$user = 'root';
$password= 'jatin';

try {
    $conn = new PDO("mysql:host=localhost;dbname=lr_codecourse", $user, $password);
    // echo 'Connected';
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  var_dump($conn);
    // set the PDO error mode to exception
    }
catch(PDOException $e)
    {
    die('Sorry we are experiencing some problem');
    }

?>
