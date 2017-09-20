<!-- How to connect to a database server in PHP -->

<?php
// print_r(PDO::getAvailableDrivers());     //to check the available drivers

$servername="localhost";
$user = 'root';
$password= 'jatin';

try {
    $conn = new PDO("mysql:host=localhost;dbname=testing", $user, $password);

    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //  var_dump($conn);
    // set the PDO error mode to exception
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>


<!-- How to write an update query in core PHP -->

UPDATE `table_name`
 SET `first_name` =:firstname, `surname` =:surname, `email`=:email
 WHERE `user_id`=:user_id

<!-- How to write SELECT Query using "LIKE" -->

SELECT `place` , `description` FROM `places` WHERE `place` LIKE ?

<!-- How to retrieve data using PDO and bindParam -->

$query = "SELECT `id` FROM `users` WHERE `username`=:username AND `password`=:password ";

$result = $conn->prepare($query); //helps avoid sql injection
$result->bindParam(':username', $username, PDO::PARAM_STR); //putting parameters in place of actual data
$result->bindParam(':password', $password_hash, PDO::PARAM_STR);
$result->execute();
$num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
//which are returned after executing the sql statement

if($num_of_rows==0)
// password and username combination don't match
{
  echo 'Invalid username/password';
}
else if($num_of_rows==1)
{
  $user_id =  $result->fetchColumn();   //this will return the column value(id) of the logged in user
  $_SESSION['user_id']=$user_id;    //store this into a session
  header('Location: video136.php');   //redirect the page to original page
}

<!-- How to retrieve data using "integer value" -->

/  $query1 = "SELECT ".implode(' ', $fields)." FROM `users` WHERE `id`=".intval($_SESSION['user_id']);
$query1 = "SELECT $field FROM `users` WHERE `id`=".intval($_SESSION['user_id']);

//this query will retrieve the field(column) value for the user id - (the user_id of the user logged in)
//var_dump($query1);

$result = $conn->query($query1);
$result->setFetchMode(PDO::FETCH_OBJ);

//var_dump($result);

$a = $result->fetch();
//  var_dump($a);

return $a->$field;
//var_dump(implode(',', (array) $a));
//return (implode(',', (array) $a));

<!-- How to retrieve result from query and display all results -->

        $query = "SELECT `place` , `description` FROM `places` WHERE `place` LIKE ?  ";

        $result = $conn->prepare($query); //helps avoid sql injection
        $result->execute(array("%$search_term%"));

        // echo $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows affected in the last execution of the query
        //which are returned after executing the sql statement

        //depending on the number of rows, append the plural or singular form
        $suffix = ($num_of_rows!=1) ? 's' : '';
        echo '<p>Your search for <strong> '.$search_term.' </strong> returned <strong> '.$num_of_rows.' </strong> result'.$suffix.'</p>';

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $a = $result->fetchAll();

        foreach($a as $row)
        {
            echo '<strong>'.$row['place'].'</strong><br /><br />';
        }

<!-- How to insert data into table using "PDO" and "bindParam" -->

$query3 = "INSERT INTO users(username, password, firstname, surname)  VALUES(:username1, :password1, :firstname1, :surname1) ";
//var_dump($query3);
$result3 = $conn->prepare($query3);
//var_dump($result3);

$result3->bindParam(':username1',$username,PDO::PARAM_STR);
$result3->bindParam(':password1',$password_hash,PDO::PARAM_STR);
$result3->bindParam(':firstname1',$firstname,PDO::PARAM_STR);
$result3->bindParam(':surname1',$surname,PDO::PARAM_STR);
$a = $result3->execute();
//var_dump($a);
