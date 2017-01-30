<?php

//returns the user ip address;
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip()
{
  global $user_ip
  //$user_ip is not in scope of the function so needs to be globalized
  $string = 'Your IP address is '.$user_ip;
  echo $string;
}

echo_ip();


?>
