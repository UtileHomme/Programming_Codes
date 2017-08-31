<?php

// echo $rand = rand();
echo '<br />';

$max = getrandmax();      //specifies max integer

if(isset($_POST['roll']))
{
  $rand = rand(1,6);      //min and max limit for arguments
  echo 'You rolled a '.$rand;
}
 ?>

 <form action="60. Random_Number_Generation.php" method="POST">
   <input type="submit" name="roll" value="Roll dice" />
 </form>
