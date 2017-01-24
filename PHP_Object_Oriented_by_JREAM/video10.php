<?php

class Test
{
  public $name;

  public function Hello()
  {
    echo 'Hello<br />';
  }

  function __get($param)
  {
    echo "$param does not exist <br />";
  }

  function __set($name,$value)
  {
    echo 'You were going to set a property of $name -> $value<br />';
    $this->{name} = $value;
  }

  function __call($param,$value)
  {
    echo 'You were going to process $param($value)<br />';
    print_r($value);
  }
}

$test = new Test();
$test->Hello();
$test->name;  //get magic method
$test->age=12;  //set magic method
$test->SomethingThatDoesntExist('123','234');    //call magic method
 ?>
