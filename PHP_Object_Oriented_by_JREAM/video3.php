<?php

class Calc
{
  public $input;
  protected $input2;
  private $output;

  function setInput($int)
  {
    $this->input = (int)$int;
  }

  function setInput2($int)
  {
    $this->input2 = (int)$int;
  }

  function calculate()
  {
    $this->output = $this->input*$this->input2;
  }
  function getResult()
  {

    return $this->output;
  }
}

class Test extends Calc
{

}

$calc = new Calc();
$calc->setInput(5);
$calc->setInput2(22);
$calc->calculate();
echo $calc->getResult();


?>
