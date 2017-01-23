<?php

//echo $rand = rand();

$max = getrandmax();      //specifies max integer

if(isset($_POST['roll']))
{
  $rand = rand(1,6);      //min and max limit for arguments
  echo 'You rolled a '.$rand;
}
 ?>

 <form action="video60.php" method="POST">
   <input type="submit" name="roll" value="Roll dice" />
 </form>
