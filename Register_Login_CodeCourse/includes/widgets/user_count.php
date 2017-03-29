<?php
require_once ('/home/scrabbler/Jatin/Programming_Codes/Register_Login_CodeCourse/core/database/connect.php');
?>
<div class="widget">
  <h2>Users</h2>
  <div class="inner">
    <?php
    $user_count = user_count($conn);
    $suffix = ($user_count !=1) ? 's' : ' ';
     ?>
    We currently have <?php echo user_count($conn); ?> registered user<?php echo $suffix; ?>
  </div>
</div>
