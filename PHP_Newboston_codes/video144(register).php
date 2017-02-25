<?php

//valid for video 144-151

require 'video136(connect.inc).php';
require 'video136(core.inc).php';

if(!loggedin())
{
  if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_again']) &&isset($_POST['firstname']) &&isset($_POST['surname']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $password_hash = sha1($password);
    $password_hash = trim($password_hash);

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];

    if(!empty($username) &&!empty($password) &&!empty($password_again) &&!empty($firstname) &&!empty($surname) )
    {
      //to check the maxlength of characters entered in a fields

      if(strlen($username)>30 || strlen($firstname)>30 || strlen($surname)>30)
      {
        echo 'Please adhere to maxlength of fields';
      }
      else if($password!=$password_again)    //check if both passwords match
      {
        echo 'Passwords do not match';
      }
      else
      {

        $query2 = "SELECT username FROM users WHERE username =:username ";

        $result = $conn->prepare($query2); //helps avoid sql injection
        $result->bindParam(':username', $username, PDO::PARAM_STR);
        //putting parameters in place of actual data
        // $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();
        $num_of_rows = $result->rowCount(); //this will count the rows
        //which are returned after executing the sql statement

        if($num_of_rows==0)
        {
          /* Alternative to the bindParam code
          $statement = $conn->prepare("INSERT INTO users(username, password, firstname,surname)
          VALUES(:username, :password, :firstname, :surname)");
          $result3 = $statement->execute(array("username" => "$username","password" => "$password","firstname" => "$firstname","surname" =>"$surname"));
          */

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

          if($result3)        //if the above query gets executed, then go to the register_success page
          {
            header('Location: video144(register_success).php');
          }
          else
          {
            echo 'Sorry we could not register you ';
          }

        }
        else if($num_of_rows==1)
        {
          echo 'The username '.$username.' already exists. ';
        }
      }
    }
    else
    {
      echo 'All fields are requied';
    }
  }
}
else if(loggedin())
{
  echo 'You are already registered and logged in. ';
}

?>

<form action="video144(register).php" method="POST">
  Username:<br />
  <input type="text" name="username" maxlength="30" value="<?php if(isset($username)) {echo $username;} ?>" /><br /><br />
  Password:<br />
  <input type="password" name="password"  /><br /><br />
  Confirm Password:<br />
  <input type="password" name="password_again"  /><br /><br />
  Firstname:<br /><input type="text" name="firstname" maxlength="30" value="<?php if(isset($firstname)) {echo $firstname;} ?>"/><br /><br />
  Surname:<br /><input type="text" name="surname" maxlength="30" value="<?php if(isset($surname)) {echo $surname;} ?>" /><br /><br />

  <input type="submit" value="Register" />
</form>
