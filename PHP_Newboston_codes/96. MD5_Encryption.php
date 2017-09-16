<?php
//valid for video 96-97

/*
$string = 'password';

//hashed string cannot be changed back to original string
$string_hash = sha1($string);
echo $string_hash;      //this will give a hashed string
*/

$filename = 'video96(hash).txt';
if(isset($_POST['user_password']) && !empty($_POST['user_password']))
{
  $user_password = sha1($_POST['user_password']);

  $handle = fopen($filename, 'r');
  $file_password = fread($handle, filesize($filename));
  $file_password = trim($file_password);

  if($user_password==$file_password)
  {
    echo 'Password ok';
  }
  else
  {
    echo 'Incorrect Password';
  }
}
else
{
  echo 'Please enter a password';
}
?>

<form action="video96.php" method="POST">
  Password: <input type="password" name="user_password" /><br /><br />
  <input type="submit" value="Submit" />
</form>
