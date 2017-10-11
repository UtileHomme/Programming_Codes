<?php
// constructors

class Example
{
  /*
  public function __construct()
  {
    $this->SaySomething();
  }
*/
  public function __construct($something)
  {
    $this->SaySomething1($something);
  }

  public function SaySomething()
  {
    echo 'Something';
  }

  public function SaySomething1($something)
  {
    echo $something;
  }
}
//constructors are used for running some code everytime some new instance of the class is created
// $example = new Example;
$example = new Example('Some text');

?>
