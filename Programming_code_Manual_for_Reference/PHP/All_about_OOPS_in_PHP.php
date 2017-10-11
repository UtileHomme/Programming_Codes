<?php

<!-- This is how we create a class and try to access different values -->

class BankAccount
{
  public $balance = 0;

  public function DisplayBalance()
  {
    echo $this->balance;     //this will refer to the object which calls it
    echo '<br />';
    //return 'Balance: '.$this->balance;
  }

  public function Withdraw($amount)
  {
    if($this->balance<$amount)
    {
      echo 'Not enough money.<br />';
    }
    else
    {
      $this->balance = $this->balance - $amount;
    }
  }

  public function Deposit($amount)
  {
    $this->balance = $this->balance + $amount;
  }
}

class SavingsAccount extends BankAccount
{
    public $type = '18-25';     //this will not be accessible to Bank account

}
//new instance of class
$alex = new BankAccount();

//withdrawing 5 pounds
$alex->Withdraw(12);

//displaying balance
$alex->DisplayBalance();

//for adding to bank account
$alex->Deposit(2000);
$alex->Withdraw(245);

echo 'Balance of Alex is: ';
$alex->DisplayBalance();

echo '<br />';

$billy = new BankAccount;

$billy->Deposit(10000);

echo 'Balance of Billy is: ';
$billy->DisplayBalance();


//now using the Savings account

echo 'Balance in Savings account is ';
$alex_savings = new SavingsAccount;
echo $alex_savings->balance;


$alex_savings->Deposit(4000);
echo '<br />';

echo 'Balance in Alex saving account: ';
echo $alex_savings->DisplayBalance();

echo $alex_savings->type;


<!-- Understanding public, private and protected through an example -->


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

// This is how we make the use of Constants in php

//the value of constants don't change

    class Circle
    {
      //the 'const' keyword creates the constant
      const pi = 3.141;

      public function Area($radius)
      {
          //to access the constant inside any function
        return self::pi * ($radius*$radius);
      }
    }
/*
    $circle = new Circle;
    echo $circle->pi;   //this won't work for displaying constants
  */

//to echo the value outside the class
echo Circle::pi;
echo '<br />';

$circle = new Circle;
echo $circle->Area(100);

// Understanding Constructors through an example

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

** Inheritance is for creating special versions of what already exists

 
