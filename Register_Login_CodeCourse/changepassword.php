<?php
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';

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

}
include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php'; ?>
<h1>Change Password</h1>

<form action="changepassword.php" method="POST">
  <ul>
    <li>
      Current Password*:<br />
      <input type="text" name = "current_password"/>
    </li>
    <li>
      New Password*:<br />
      <input type="text" name = "password"/>
    </li>
    <li>
      New Password Again*:<br />
      <input type="text" name = "password_again"/>
    </li>
    <li>
      <input type="submit" value="Change Password" />
    </li>
  </ul>
</form>
<?php   include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
