<?php

class Example
{
  public $item = 'item blah item';
  public $name;

  function Sample()
  {
    $this->Test();
    echo '<br />';
    echo $this->item;
  }

  function Test()
  {
    echo 'Test';
    $regular = 500;
    echo '<br />'.$regular;
  }

  function Dog()
  {
    // we cannot echo $regular here - out of scope
  }
}

$e = new Example();
$e->Sample();
 ?>
