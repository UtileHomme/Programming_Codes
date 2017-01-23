<?php
// print_r(PDO::getAvailableDrivers());     //to check the available drivers

$servername="localhost";
$username = 'root';
$password= 'jatin';

try {
    $conn = new PDO("mysql:host=$servername;dbname=testing", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
