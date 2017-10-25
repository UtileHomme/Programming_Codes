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

<!-- What is Object Oriented Programming  -->

- here, it is customary to group all of the variables and functions of a particular topic into a single class
- supports better code organization and reduces the need for us to repeat ourselves

<!-- How to declare a class -->

class Car {
  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;
}

<!-- How to create an object of a class -->

$bmw = new Car ();

<!-- How are objects good -->

- In the procedural programming style, all of the functions and variables sit together in the "global scope" in a way that
allows their use just by calling their name, the use of classes makes anything inside the classes hidden from global scope

- So, we need a way to allow the code from the global scope to use the code within the class, and we do this by creating
objects from a class

** A class holds the methods and properties that are shared by all of the objects that are created from it
** Although the objects share the same code, they can behave differently becuase they have different values assigned to them

<!-- How to get an object's properties -->

echo $bmw -> color;

<!-- How to set an object's properties -->

$bmw -> comp = "BMW";

<!-- How to add methods to a class -->

class Car {

  public $comp;
  public $color = 'beige';
  public $hasSunRoof = true;

  public function hello()
  {
    return "beep";
  }
}

<!-- How to call a method using an object -->

echo $bmw -> hello();

<!-- What is the "$this" keyword -->

- indicates that we can use the class's own methods and properties and allows us to have access to them within the class's scope

$this -> propertyName;
$this -> methodName();

Eg -

class Car {

    // The properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    // The method can now approach the class properties
    // with the $this keyword
    public function hello()
    {
      return "Beep I am a <i>" . $this -> comp . "</i>, and I am <i>" .
        $this -> color;
    }
}

<!-- What is method chaining -->

- We are returning the result of one method as passing that result as input to another method
- We need to return "$this"
Eg -

class Car {

  public $tank;

  // Add gallons of fuel to the tank when we fill it.
  public function fill($float)
  {
    $this-> tank += $float;

    return $this;
  }

  // Substract gallons of fuel from the tank as we ride the car.
  public function ride($float)
  {
    $miles = $float;
    $gallons = $miles/50;
    $this-> tank -= ($gallons);

    return $this;
  }
}

$tank = $bmw -> fill(10) -> ride(40) -> tank;
