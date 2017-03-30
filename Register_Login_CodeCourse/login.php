<?php
require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php');

 logged_in_redirect();
 
if(empty($_POST)==false)
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  if(empty($username) === true || empty($password) === true)
  {
    $errors[]='You need to enter a username and password';
  }
  else if(user_exists($username,$conn)===false)
  {
    $errors[]= 'We can\'t find that username. Have you registered?<br />';
  }
  else if(user_active($username,$conn) === false)
  {
    $errors[] = 'You haven\'t activated your account';
  }
  else
  {
    if(strlen($password)>51)
    {
      $errors[] = 'Passwrod too long';
    }
    $login = login($username,$password,$conn);

    if($login==false)
    {
      $errors[] = 'That username/password combination is incorrect';
    }
    else
    {
      //set the user session
      //redirect the user to home
      $_SESSION['user_id'] = $login;
      header('Location: index.php');
    }
  }
}
else
{
  $errors[] = 'No data received';
}


require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php');
if(empty($errors)===false)
{
  ?>
  <h2>We tried to log you in, but....</h2>

<?php
echo output_errors($errors);
}

require_once('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php');
 ?>
