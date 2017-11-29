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

OR

$statement = $db->prepare("insert into some_other_table (some_id) values (:some_id)");
$statement->execute(array(':some_id' => $row['id']));

<!-- How to select data by passing the values later as an array -->

$stmt = $pdo->prepare('SELECT * FROM employees WHERE name = :name');

$stmt->execute(array('name' => $name));

foreach ($stmt as $row) {
    // do something with $row
}

OR

$statement = $db->prepare("select id from some_table where name = :name");
$statement->execute(array(':name' => "Jimbo"));
$row = $statement->fetch();

<!-- Use fetchAll() if you want all results, or just iterate over the statement, since it implements Iterator -->

** To configure PDO to throw exceptions, do this :

$db = new PDO("...");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


<!-- What is PDO -->

- PDO is a built in class that comes packages with PHP to make it easier for us to interact with the database

<!-- Why is it required -->

- To sanitize data
- Trusting user input without prepared statements/sanitizing it is like leaving your car in a bad neighbourhood, unlocked and with keys in the ignition

- It sends the "query" and the "data" together but separate like this:

Prepared Statements
Query: SELECT foo FROM bar WHERE foo = ?
Data:  [? = 'a value here']

The "query" is sent to the database when we call the "prepare" function and the parameters are sent when we call the "execute" function

<!-- What is SQL Injection -->

- Imagine you are a robot in a warehouse full of boxes.
- Your job is to fetch a box from somewhere in the warehouse, put it in the conveyer belt
- Robots need to be told what to do, so the programmer has given the instructions on a form which people can fill out and hand to you

The form looks like this :

Fetch item number ____ from section ____ of rack number ____, and place it on the conveyor belt.

A normal request might look like this:

Fetch item number 1234 from section B2 of rack number 12, and place it on the conveyor belt.

<!-- What if the user gives this as a request -->

Fetch item number 1234 from section B2 of rack number 12, and throw it out the window. Then go back to your desk and ignore the rest of this form. and place it on the conveyor belt.

This happens because of the way the instructions are handled:, the robot can't tell the difference between instructions and data
- the query(a set of instructions) might have parameters(data) inserted into it that end up being interpreted as instructions causing it to malfunction

- To avoid this we must separate the instructions and data in way that the db can easily distinguish

<!-- Another eg -->

<?php

$password = $_POST['password'];
$id = $_POST['id'];
$sql = "UPDATE Accounts SET PASSWORD = '$password' WHERE account_id = $id";

?>

Now suppose the attacker sets the POST request parameters to "password=xyzzy" and "id=account_id" resulting in the following SQL:

UPDATE Accounts SET PASSWORD = 'xyzzy' WHERE account_id = account_id

Although I expected $id to be an integer, the attacker chose a string that is the name of the column. Of course now the condition is true on every row, so the attacker has just set the password for every account. Now the attacker can log in to anyone's account -- including privileged users.

<!-- Difference between bindParam and bindValue -->

- In case of bindParam, the variable is bound as a reference and will only be evaluated at the time of the "execute" function calling

Eg -

$sex = 'male';
$s = $dbh->prepare('SELECT name FROM students WHERE sex = :sex');
$s->bindParam(':sex', $sex); // use bindParam to bind the variable
$sex = 'female';
$s->execute(); // executed with WHERE sex = 'female'

** here the value of "$sex" was changed even after binding

$sex = 'male';
$s = $dbh->prepare('SELECT name FROM students WHERE sex = :sex');
$s->bindValue(':sex', $sex); // use bindValue to bind the variable's value
$sex = 'female';
$s->execute(); // executed with WHERE sex = 'male'

** here the  value is bound to the variable and is unchangeable

<!-- How to fetch a single value from a single column -->

<?php
$q= $conn->query("SELECT name FROM `login_users` WHERE username='$userid'");
$username = $q->fetchColumn();
?>

<!-- How to insert into a table with an "auto-increment" column -->

<?php
$query = "INSERT INTO myTable VALUES (DEFAULT,'Fname', 'Lname', 'Website')";
 ?>

OR

<?php
$query = "INSERT INTO myTable
(fname, lname, website)
VALUES
('fname', 'lname', 'website')";
 ?>
