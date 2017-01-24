<?php

class Test
{
  function __construct()
  {
    echo 'item created<br />';
  }

  function __destruct()    //or we could use 'unset(object name)'
  {
    echo 'item erased<br />';
  }

  function __toString()
  {
    return 'This happens <br />';
  }

  function __clone()
  {
    echo 'data was passed<br />';
  }

  function __invoke($vars)
  {
    echo 'You cant do that man!';
  }
}
$test = new Test();
echo $test;   //toString method executed
$test2 = clone $test;     //using the 'clone' method
$test(1);       //using the invoke method

 ?>
