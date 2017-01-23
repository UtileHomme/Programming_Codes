<?php

//Usage of die() and exit()

$servername="localhost";
$user = 'root';
$password= 'jatin';

try {
    $conn = new PDO("mysql:host=localhost;dbname=testing", $user, $password);
    echo 'Connected';
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  var_dump($conn);


    // set the PDO error mode to exception
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

/*
echo 'Hello ';


//we can also used exit() the same way
echo '<br />';

die('ERROR. PAGE HAS ENDED');
echo 'World';

*/

 ?>
