<?php

session_start();      //we won't need to include the other php file because a session is active

//echo $_SESSION['name'];

if(isset($_SESSION['username']) && isset($_SESSION['age']))
{
  echo 'Welcome '.$_SESSION['username'];      //to make this run, we have to call the video73.php file once
  echo '<br /> You are '.$_SESSION['age'];
}
else {
  echo 'Please log in';
}
 ?>
