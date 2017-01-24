<?php

class Test
{
  private $name;
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

}

$test = new Test();
$test->setName('jesse');
//$test->name = 'jesse';        this won't work
echo $test->getName();
 ?>
