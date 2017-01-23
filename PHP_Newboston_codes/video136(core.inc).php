<?php
ob_start();
session_start();

include_once('video136(connect.inc).php');

$current_file = $_SERVER['SCRIPT_NAME']; // this is for storing the current file names

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
{
  $http_referer = $_SERVER['HTTP_REFERER'];
}

function loggedin()     //to check whether the user is loggedin
{
  if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
  {
    return true;
  }
  else
  {
    return false;
  }
}

function getfield1($field, $conn)
{
  //  $query1 = "SELECT ".implode(' ', $fields)." FROM `users` WHERE `id`=".intval($_SESSION['user_id']);
  $query1 = "SELECT $field FROM `users` WHERE `id`=".intval($_SESSION['user_id']);
  //this query will retrive the field(column) value for the user id - (the user_id of the user logged in)
  //var_dump($query1);
  $result = $conn->query($query1);
  $result->setFetchMode(PDO::FETCH_OBJ);
  //var_dump($result);
  $a = $result->fetch();
//  var_dump($a);
  return $a->$field;
  //var_dump(implode(',', (array) $a));
  //return (implode(',', (array) $a));
}

?>
