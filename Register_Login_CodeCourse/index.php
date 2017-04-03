<?php
include_once '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/init.php';
 include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/header.php'; ?>
      <h1>Home</h1>
      <p>
        Just a template
      </p>

<?php
if(has_access($session_user_id,1,$conn)===true)
{
    echo 'ADMIN';
}
else if(has_access($session_user_id,2,$conn)===true)
{
    echo 'MODERATOR';
}
 ?>

<?php   include '/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/includes/overall/footer.php'; ?>
