
<?php
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

if(empty($_POST)===false)
{
  $required_fields = array('username','password','password_again','firstname','email');
  foreach($_POST as $key=>$value)
  {
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
  }
}

print_r($errors);
?>

<h1>Register</h1>

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
      <input type="text" name="firstname" />
    </li>
    <li>
      Last Name:<br />
      <input type="text" name="lastname" />
    </li>
    <li>
      Email*:<br />
      <input type="text" name="email" />
    </li>
    <br />
    <input type="submit" value="Register" />
  </ul>
</form>
<?php   include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
