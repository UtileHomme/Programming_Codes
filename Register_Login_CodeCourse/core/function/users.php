<?php

require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');


function user_data($user_id,$conn)
{
  $user_id = intval($user_id);
  $data = array();
  $func_num_args = func_num_args();   //returns the count of no. of parameters in the called function
  $func_get_args = func_get_args();  //returns an array of the parameters passed in the function

  if($func_num_args>1)
  {
    unset($func_get_args[0]);
    unset($func_get_args[1]);
    $fields = '`'.implode('`, `',$func_get_args).'`'.'<br />';          //this will store all the parameters in the form of a string

    $query = "SELECT `user_id`, `username`, `password`, `firstname`, `lastname`, `email` from `login_register` where `user_id`=$user_id";
    echo '<br />';
    $res = $conn->prepare($query);
    $res->bindParam(':fields',$fields,PDO::PARAM_STR);
    $a = $res->execute();

    if($res->execute())
    {
      $num_of_rows = $res->rowCount();

      if($num_of_rows==1)
      {
        $res->setFetchMode(PDO::FETCH_ASSOC);
        $data=$res->fetch();

      }

    }

  }
  return $data;
}




function logged_in()
{
  if(isset($_SESSION['user_id']))
  {
    return true;
  }
  else
  {
    return false;
  }
}
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

function user_id_from_username($username,$conn)
{
  $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username";
  $res = $conn->prepare($query);
  $res->bindParam(':username', $username, PDO::PARAM_STR);
  $res->execute();
  $num_of_rows = $res->rowCount();
  echo '<br />';
  if($num_of_rows==1)
  {
    $user_id =  $res->fetchColumn();
    $user_id = intval($user_id);
    return $user_id;
  }
}


function login($username, $password,$conn)
{
  $password = sha1($password);
  $password = trim($password);
  $user_id = user_id_from_username($username,$conn);
  $query = "SELECT `user_id` FROM `login_register` WHERE `username`=:username AND `password`=:password ";
  $res = $conn->prepare($query);
  $res->bindParam(':username', $username, PDO::PARAM_STR);
  $res->bindParam(':password', $password, PDO::PARAM_STR);
  $res->execute();
  $num_of_rows = $res->rowCount();

  if($num_of_rows==1)
  {
    return $user_id;
  }
  else
  {
    return false;
  }
}


?>
