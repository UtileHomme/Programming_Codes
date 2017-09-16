 <?php
 // print_r(PDO::getAvailableDrivers());     //to check the available drivers
 session_start();

 $_SESSION['user_id'] = '1';

 $servername="localhost";
 $user = 'root';
 $password= 'votreami';

 try {
     $conn = new PDO("mysql:host=localhost;dbname=jquery_newboston", $user, $password);

     //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //  var_dump($conn);
     // set the PDO error mode to exception
     }
 catch(PDOException $e)
     {
     echo "Connection failed: " . $e->getMessage();
     }

 ?>
