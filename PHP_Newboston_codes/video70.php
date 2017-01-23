<?php

//when typing something in a text box and submitting it or uploading files
//we should use POST
//sets the data directly in the form and does not send it to URL
//great for passwords and long registration forms
//there's a limit to the max chars in URL for GET

$match='pass123';

if(isset($_POST['password']))
{
  $password = $_POST['password'];
  if(!empty($password))
  {
    if($password==$match)
    {
      echo 'This is correct';
    }
    else
    {
      echo 'This is incorrect';
    }
  }
  else
  {
    echo 'Please fill in the details';
  }
}


?>
<form action="video70.php" method="POST">
  Password:<br />
  <input type="password" name="password" /><br /><br />
  <input type="submit" value="Submit" />
</form>
