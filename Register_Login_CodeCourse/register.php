
<?php
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';
logged_in_redirect();
require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

if(empty($_POST)===false)
{
  $required_fields = array('username','password','password_again','firstname','email');
  foreach($_POST as $key=>$value)
  {
    //if nothing is entered and it is part of the array, throw an error
    if(empty($value) && in_array($key,$required_fields)===true)
    {
      $errors[] = 'Fields marked with an asterisk are required';
      break 1;
    }
  }

  if(empty($errors)===true)
  {
    //no point validating if all fields haven't been entered

    if(user_exists($_POST['username'], $conn)===true)
    {
      $errors[]= 'Sorry, the username \''.$_POST['username'].'\' is already taken';
    }

    // if spaces are present.... preg_match returns integer value
    if(preg_match("/\\s/",$_POST['username'])==true)
    {
      $errors[] = 'Your username must not contain any spaces';
    }

    if(strlen($_POST['password']) <6)
    {
      $errors[] = 'Your password must be at least 6 characters';
    }

    if($_POST['password'] !== $_POST['password_again'])
    {
      $errors[] = 'Your password doesn\'t match';
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
      $errors[] = 'A valid email address is required';
    }

    if(email_exists($_POST['email'],$conn) === true)
    {
      $errors[] = 'Sorry, the email \' '.$_POST['email'].' \' is already in use';
    }
  }
}

?>

<h1>Register</h1>

<?php

if(isset($_GET['success']) && empty($_GET['success']))
{
  echo 'You\'ve been registered successfully!! Please check you email to activate your account';
}
else
{
// if form has been submitted and the errors array is empty, register the users else output errors
if(empty($_POST==false) && empty($errors)===true)
{
   $username =  $_POST['username'];
   $password =  sha1($_POST['password']);
  $firstname =  $_POST['firstname'];
   $lastname =  $_POST['lastname'];
  $email =  $_POST['email'];
  $email_code = $_POST['username'] ;

  $register_data= array(
      'username' => $username ,
      'password' => $password,
      'firstname' =>   $firstname,
      'lastname' => $lastname,
      'email' => $email,
      'email_code' => sha1($email_code + microtime())
  );

register_user($register_data,$conn);
header('Location: register.php?success');

}
else if(empty($errors)===false)
{
  echo output_errors($errors);
}
 ?>

<form action="" method="POST">
  <ul>
    <li>
      Username*:<br />
      <input type="text" name="username" />
    </li>
    <li>
      Password*:<br />
      <input type="password" name="password" />
    </li>
    <li>
      Password again*:<br />
      <input type="password" name="password_again" />
    </li>
    <li>
      First Name*:<br />
      <input type="text" name="firstname"/>
    </li>
    <li>
      Last Name:<br />
      <input type="text" name="lastname"  />
    </li>
    <li>
      Email*:<br />
      <input type="text" name="email" />
    </li>
    <br />
    <input type="submit" value="Register" />
  </ul>
</form>

<?php
}
 include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
