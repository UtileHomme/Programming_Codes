<?php
/*
$handle = fopen('names1.txt', 'a');
fwrite($handle,'Alex'."\n");
fclose($handle);
echo 'Written';
*/

if(isset($_POST['name']))
{
  $name = $_POST['name'];
  if(!empty($name))
  {
    $handle = fopen('names1.txt', 'a');
    fwrite($handle,$name."\n");
    fclose($handle);
  }
  else
  {
      echo 'Please type a name';
  }
}

 ?>
 <form action="video79.php" method="POST">
Name: <br />
<input type="text" name="name" /><br /><br />
<input type="submit" value="SUBMIT" />
 </form>
