<?php

if(isset($_POST['name']))
{
  $name = $_POST['name'];
  if(!empty($name))
  {
    $handle = fopen('names.txt', 'a');
    fwrite($handle,$name."\n");
    fclose($handle);

    echo 'Current names in file'.'<br />';
    //this is used for reading purposes
    $count = 1;
    $readin = file('names.txt');
    $readin_count = count($readin);

    foreach($readin as $fname)
    {
      echo trim($fname);
      if($count<$readin_count)
      {
        echo ', ';
      }
      $count++;
    }
    echo '<br /><br /><br />';
    foreach($readin as $fname)
    {
      echo trim($fname).',  ';
    }
  }
  else
  {
    echo 'Please type a name';
  }
}


?>

<form action="video78.php" method="POST">
  Name: <br />
  <input type="text" name="name" /><br /><br />
  Submit:<br />
  <input type="submit" name="SUBMIT" />
</form>
