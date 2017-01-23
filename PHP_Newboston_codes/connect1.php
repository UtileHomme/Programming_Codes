<?php

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

    $sql = $conn->prepare('SELECT id, firstname, surname
            FROM users
            ORDER BY id');

            $sql->execute();
            while($result = $sql->fetch(PDO::FETCH_ASSOC)){
              $id = $result['id'];
              $firstname = $result['firstname'];
              $surname = $result['surname'];
              echo '<br />';
              echo $id.' '.$firstname.' '.$surname;
              

          }
?>
