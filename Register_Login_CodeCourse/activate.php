<?php
include_once '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';

//if logged in , no need to activate account
logged_in_redirect();

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php';

if(isset($_GET['success'])===true && empty($_GET['success'])===true)
{
?>

  <h2>Thanks, we've activated you account....</h2>
  <p>
    You are free to log in
  </p>
<?php
}
else if(isset($_GET['email']) && isset($_GET['email_code']))
{
  $email = trim($_GET['email']);
  $email_code = trim($_GET['email_code']);


  if(email_exists($email,$conn)===false)
  {
    $errors[]= 'Oops, something went wrong, and we couldn\'t  find that email address';
  }
  else if(activate($email, $email_code,$conn) === false)
  {
    $errors[] = 'We had problems activating your account';
  }

  if(empty($errors)===false)
  {
    ?>

    <h2>Oops....</h2>

<?php
  echo output_errors($errors);
  }
  else
  {
    header('Location: activate.php?success');
  }
}
else
{
  header('Location: index.php');
}

include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
