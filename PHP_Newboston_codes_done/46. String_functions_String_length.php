<?php

//valid for video 46,47

$string = 'Alex';

echo $string_length = strlen($string);

echo '<br />';

echo $string_lower = strtolower($string);

echo '<br />';

echo $string_upper = strtoupper($string);

echo '<br />';

if(isset($_GET['user_name']) && !empty($_GET['user_name']))
{
  $user_name = $_GET['user_name'];
  $user_name1 = strtolower($user_name);

  if($user_name1=='alex')
  {
    echo 'You are the best '.$user_name;
  }
}

 ?>

 <form action = "video46.php" method="GET">
   Name: <input type="text" name="user_name" /><br /><br />
   <input type="submit" value = "Submit" />
 </form>
