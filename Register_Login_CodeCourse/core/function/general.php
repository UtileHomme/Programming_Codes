<?php
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/function/users.php');

//function for sending email to user giving him/her the link for activation
function email($to, $subject, $body)
{
  mail($to, $subject, $body, 'From: jatins368@gmail.com');
}

//after user is logged in no need to show register page if register.php used
function logged_in_redirect()
{
  if(logged_in()===true)
  {
    header('Location: index.php');
  }
}

//if user tries to access download and forum page without login
function protect_page()
{
  if(logged_in()===false)
  {
    header('Location: protected.php');
  }
}

//only if the type=1, will the user have admin privileges
function admin_protect()
{
    global $user_data;
    $id = $user_data['user_id'];
    $a = has_access($id,1,$conn);
    if($a===false)
    {
        header('Location: index.php');
    }
    else
    {
        echo 'hello';
    }
}


function output_errors($errors)
{
  $output = array();
  foreach($errors as $error)
  {
    $output[] = '<li>'.$error.'</li>';
  }
  return '<ul>'.implode(' ',$output).'</ul>';
}
 ?>
