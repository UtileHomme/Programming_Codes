<aside>
  <?php
  if(logged_in()==true)
  {
    include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/widgets/loggedin.php';
  }
  else
  {
    include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/widgets/login.php';
  }
   ?>
</aside>
