<?php

$age = 16;

try
{
  if($age>18)
  {
    echo 'You are old enough';
  }
  else
  {
    throw new Exception('Not old enough');    //if something goes wrong, throw the message
  }
} catch (Exception $e)
{
    echo 'Error: '.$e->getMessage();
}

?>
