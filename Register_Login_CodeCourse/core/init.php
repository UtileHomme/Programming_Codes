<?php

session_start();
error_reporting(0);
require('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');
require('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/function/users.php');
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/function/general.php');

if(logged_in()===true)
{
  $session_user_id = $_SESSION['user_id'];

  $user_data = user_data($session_user_id,$conn,'user_id', 'username', 'password', 'firstname','lastname','email','email_code');


  if(user_active($user_data['username'],$conn)===false)              //if at any point of time during browsing the user active value is set to 0.. logout
  {
    session_destroy();
    header('Location: index.php');
  }

}

$errors = array();

?>
