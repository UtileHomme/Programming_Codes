<?php
require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php');

if(empty($_POST)==false)
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) === true || empty($password) === true)
  {
    $errors[]='You need to enter a username and password';
  }
  else if(user_exists($username,$conn)===false)
  {
    echo $errors[]= 'We can\'t find that username. Have you registered?<br />';
  }
  else if(user_active($username,$conn) === false)
  {
    echo $errors[] = 'You haven\'t activated your account';
  }
  else
  {

  }

}

 ?>
