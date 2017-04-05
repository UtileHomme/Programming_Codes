<?php
include_once '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

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
    $firstname =  htmlentities(strip_tags($_POST['firstname']));
    $lastname =  htmlentities(strip_tags($_POST['lastname']));
    $email =  htmlentities(strip_tags($_POST['email']));
    $allow_email = htmlentities(strip_tags($_POST[allow_email]=='on'?1:0));

    $update_data= array(
      'firstname' => $firstname,
      'lastname' => $lastname,
      'email' => $email,
      'allow_email' => $allow_email
    );

    update_user($session_user_id,$update_data,$conn);

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
      <li>
          <input type="checkbox" name="allow_email"
          <?php

          if($user_data['allow_email']==1)
          {
              echo 'checked="checked" ';
          }

          ?> />
          Would you like to see an email from us
      </li>
      <br />
      <input type="submit" value="Update" />
    </ul>
  </form>
  <?php
}
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
?>
