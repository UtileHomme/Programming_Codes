<?php
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php');
require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');

protect_page();

if(empty($_POST)===false)
{
  $required_fields = array('current_password','password', 'password_again');
  foreach($_POST as $key=>$value)
  {
        //if nothing is entered and it is part of the array, throw an error
    if(empty($value) && in_array($key,$required_fields)===true)
    {
      $errors[] = 'Fields marked with an asterisk are required';
      break 1;
    }
  }

//if the actual password and the password typed in the current password field  match
  if(sha1($_POST['current_password'])===$user_data['password'])
  {
    //if the password and password again do not match
   if(trim($_POST['password']) !== trim($_POST['password_again']))
   {
     $errors[] = 'Your new passwords do not match';
   }
   else if(strlen($_POST['password'])<6)
   {
     $errors[] = 'Your password must be at least 6 characters';
   }

  }
  else {
    $errors[] = 'Your current password is incorrect';
  }

}

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php'; ?>

<h1>Change Password</h1>

<!-- //output the errors -->
<?php

if(isset($_GET['success']) && empty($_GET['success']))
{
  echo 'Your password has been changed successfully';
}
else
{
if(empty($_POST==false) && empty($errors)===true)
{
 change_password($session_user_id, $_POST['password'], $conn);
 header('Location: changepassword.php?success');

}
else if(empty($errors)===false)
{
  echo output_errors($errors);
}
 ?>

<form action="changepassword.php" method="POST">
  <ul>
    <li>
      Current Password*:<br />
      <input type="password" name = "current_password"/>
    </li>
    <li>
      New Password*:<br />
      <input type="password" name = "password"/>
    </li>
    <li>
      New Password Again*:<br />
      <input type="password" name = "password_again"/>
    </li>
    <li>
      <input type="submit" value="Change Password" />
    </li>
  </ul>
</form>

<?php

}  include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
