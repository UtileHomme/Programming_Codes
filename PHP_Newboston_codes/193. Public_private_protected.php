<?php

//protected and private variables can be accessed by the method but not directly by the object

class BankAccount
{
  //or public $balance
  var $balanceofAccount = 3500;   //this means public

  //private -> _balance1
  private $balance1 = 4000;   //protected

  //protected -> _Tbalance1
  public function DisplayBalance()
  {
    //'this' is a representation of the CLASS hull
    return $this->balanceofAccount;
  }
}

$alex = new BankAccount;
echo $alex->DisplayBalance();

$jatin = new BankAccount;

//will give a fatal error because balance1 is private variable. Same holds true for protected
echo $jatin->balance1;


 ?>
