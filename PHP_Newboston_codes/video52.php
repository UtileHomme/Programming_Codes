<?php

//valid for video 52 and 53

$find = array('alex', 'billy', 'dale');
$replace = array('a**x', 'bil', ' ');

if(isset($_POST['user_input']) && !empty($_POST['user_input']))
{
  $user_input = $_POST['user_input'];
//  $user_input_lc = strtolower($user_input);

//str_ireplace is case insensitive
  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo $user_input_new;
}
 ?>

 <hr />
 <form action="video52.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"></textarea><? php echo $user_input ?><br /><br />
   <input type="submit" value="submit" />
 </form>
