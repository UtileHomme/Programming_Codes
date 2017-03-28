<?php

require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

function user_exists($username,$conn)
{
  $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username ";
  $res = $conn->prepare($query);
  $res->bindParam(':username', $username, PDO::PARAM_STR);
 $res->execute();

  $num_of_rows = $res->rowCount();
  if($num_of_rows == 1)
  {
    return true;
  }
  else if($num_of_rows ==0)
  {
    return false;
  }
}

function user_active($username,$conn)
{
  $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username and `active`=1";
  $res = $conn->prepare($query);
  $res->bindParam(':username', $username, PDO::PARAM_STR);
 $res->execute();

  $num_of_rows = $res->rowCount();
  if($num_of_rows == 1)
  {
    return true;
  }
  else if($num_of_rows ==0)
  {
    return false;
  }
}
 ?>
