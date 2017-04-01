<?php
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
require('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

protect_page();

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

if(empty($_POST)===false)
{
  $required_fields = array('firstname','email');
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
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)===false)
    {
      $errors[] = 'A valid email address is required';
    }
    else if(email_exists($_POST['email'],$conn)===true && $user_data['email']!==$_POST['email'])
    {
      //one person cannot use the email id of another
      $errors[] = 'Sorry, the email \' '.$_POST['email'].' \' is already in use';
    }
  }
}
?>

<h1>Settings</h1>

<?php

if(isset($_GET['success'])===true && empty($_GET['success']))
{
  echo 'Your details have been updated';
}
else
{
  if(empty($_POST)===false && empty($errors)===true)
  {
    //update the user
    $firstname =  $_POST['firstname'];
    $lastname =  $_POST['lastname'];
    $email =  $_POST['email'];

    $update_data= array(
      'firstname' => $firstname,
      'lastname' => $lastname,
      'email' => $email
    );

    update_user($update_data,$conn);

   header('Location: settings.php?success');
  }
  else if(empty($errors)===false)
  {
    echo output_errors($errors);
  }
  ?>
  <form action="" method="POST">
    <ul>
      <li>
        First name*: <br />
        <input type="text" name="firstname" value="<?php echo $user_data['firstname']; ?>"/>
      </li>
      <li>
        Last name: <br />
        <input type="text" name="lastname" value="<?php echo $user_data['lastname']; ?>" />
      </li>
      <li>
        Email*: <br />
        <input type="text" name="email" value="<?php echo $user_data['email']; ?>"/>
      </li>
      <br />
      <input type="submit" value="Update" />
    </ul>
  </form>
  <?php
}
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
?>
