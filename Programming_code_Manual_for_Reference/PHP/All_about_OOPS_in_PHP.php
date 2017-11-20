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

<!-- What are classes and objects -->

- a class is what we use to "define" the properties, methods and behaviour of objects
- objects are the "things we create" out of a class

- Class is like a blueprint of a building
- Object is the actual building you build by following the blueprint (class)



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

<!-- What are the different access modifiers -->

1. public
2. private
3. protected

* the public access modifier allows a code from outside or inside the class to access the class's methods and properties
- the private modifier prevents access to a class's methods or properties from any code that is outside the class
- protected is used when we want to make the variable/function visible in all classes that extend the current class including the parent class

1. Public access modifier

- when we declare a method(function) or a property (variable) as public, these methods and properties can be accessed by :
 - the same class that declared it
 - the classes that inherit the above declared class
 - any foreign elements outside the class

Eg 1 -
<?php

class Car {

  // public methods and properties.
  public $model;

  public function getModel()
  {
    return "The car model is " . $this -> model;
  }
}

$mercedes = new Car();
//Here we access a property from outside the class
$mercedes -> model = "Mercedes";
//Here we access a method from outside the class
echo $mercedes -> getModel();

?>

Eg 2-
<?php

class GrandPa
{
    public $name='Mark Henry';  // A public variable
}

class Daddy extends GrandPa // Inherited class
{
    function displayGrandPaName()
    {
        return $this->name; // The public variable will be available to the inherited class
    }

}

// Inherited class Daddy wants to know Grandpas Name
$daddy = new Daddy;
echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'

// Public variables can also be accessed outside of the class!
$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; // Prints 'Mark Henry'

?>

2. Private access modifier

<?php

class Car {

  //private
  private $model;

  public function getModel()
  {
    return "The car model is " . $this -> model;
  }
}

$mercedes = new Car();

// We try to access a private property from outside the class.
$mercedes -> model = "Mercedes benz";
echo $mercedes -> getModel();

?>


Result:

Fatal error: Cannot access private property Car::$model

<!-- How to access a private property -->

- we used public methods because they can interact with both the code outside of the class's scope as well as the code inside the class
- called setters and getters

Eg -

<?php

class Car {

  //the private access modifier denies access to the method from outside the class’s scope
  private $model;

  //the public access modifier allows the access to the method from outside the class
  public function setModel($model)
  {
    $this -> model = $model;
  }

  public function getModel()
  {
    return "The car model is  " . $this -> model;
  }
}

$mercedes = new Car();
//Sets the car’s model
$mercedes -> setModel("Mercedes benz");
//Gets the car’s model
echo $mercedes -> getModel();

?>

<!-- What is the __construct magic method -->

- acts as a constructor

Eg -

<?php
class Car{
  private $model;

  // A constructor method.
  public function __construct($model)
  {
    $this -> model = $model;
  }
}

$car1 = new Car("mercedes")
?>

<!-- What is the use of Inheritance -->

- We are creating a reusable piece of code that we write only once in the parent class, and use again as much as we need in the child classes

<!-- How to inherit from the parent class -->

<?php
class Parent {
  // The parent’s class code
}

class Child extends Parent {
  // The  child can use the parent's class code
}
?>

- the child class can make use of all the non-private methods and properties that it inherits from the parent class

Eg -

<?php

//The parent class
class Car {
  // Private property inside the class
  private $model;

  //Public setter method
  public function setModel($model)
  {
    $this -> model = $model;
  }

  public function hello()
  {
    return "beep! I am a <i>" . $this -> model . "</i><br />";
  }
}


//The child class inherits the code from the parent class
class SportsCar extends Car {
  //No code in the child class
}


//Create an instance from the child class
$sportsCar1 = new SportsCar();

// Set the value of the class’ property.
// For this aim, we use a method that we created in the parent
$sportsCar1 -> setModel('Mercedes Benz');

//Use another method that the child class inherited from the parent class
echo $sportsCar1 -> hello();

 ?>

<!-- Protected Modifier -->

- we are not able to access the private variables of a parent class using the object of a child class

- this can be solved by making the variable "protected"

- When we declare a method or a property as "protected", those methods and properties can be accessed by:
 - the same class that declared it
 - the classes that inherit the above declared class

 <!-- Eg 1 - -->
<?php

// The parent class
class Car {
  //The $model property is now protected, so it can be accessed
  // from within the class and its child classes
  protected $model;

  //Public setter method
  public function setModel($model)
  {
    $this -> model = $model;
  }
}

// The child class
class SportsCar extends Car {
  //Has no problem to get a protected property that belongs to the parent
  public function hello()
  {
    return "beep! I am a <i>" . $this -> model . "</i><br />";
  }
}

//Create an instance from the child class
$sportsCar1 = new SportsCar();

//Set the class model name
$sportsCar1 -> setModel('Mercedes Benz');

//Get the class model name
echo $sportsCar1 -> hello();

 ?>

 <!-- Eg 2 -->

 <?php

class GrandPa
{
    protected $name = 'Mark Henry';
}

class Daddy extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }

}

$daddy = new Daddy;
echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'

$outsiderWantstoKnowGrandpasName = new GrandPa;
echo $outsiderWantstoKnowGrandpasName->name; // Results in a Fatal Error
?>

<!-- How to override parent class methods with that of child class -->

<?php

// The parent class has hello method that returns "beep".
class Car {
  public function hello()
  {
    return "beep";
  }
}

//The child class has hello method that returns "Halllo"
class SportsCar extends Car {
  public function hello()
  {
    return "Hallo";
  }
}

//Create a new object
$sportsCar1 = new SportsCar();

//Get the result of the hello method
echo $sportsCar1 -> hello();

 ?>

** To avoid the parent class method from being overriden, declare it with the "final" keyword

<!-- What are abstract classes and methods -->

- We use "abstract classes" when we want to commit the programmer to write a certain class method, but we are only sure about the name of the method
and not the details of how it should be written
- We use "abstract classes"and methods when we need to commit the child classes to certain methods that they inherit from the parent class but we cannot commit about the
code that should be written inside the methods

- An abstract class is a class that has at least one abstract method
- abstract methods can only have names and arguments and no other code
- We cannot create objects out of abstract classes
- We need to create child classes that add the code into the bodies of the methods and use these child classes to create objects

<!-- How to declare abstract classes and methods -->

<?php
// Abstract classes are declared with the abstract keyword, and contain abstract methods.
abstract class Car {
  abstract public function calcNumMilesOnFullTank();
}
 ?>

** an abstract class can have non-abstract methods too

<?php
abstract class Car {
  // Abstract classes can have properties
  protected $tankVolume;

  // Abstract classes can have non abstract methods
  public function setTankVolume($volume)
  {
    $this -> tankVolume = $volume;
  }

  // Abstract method
  abstract public function calcNumMilesOnFullTank();
}
 ?>

** The child classes that inherit from abstract classes must add bodies to the abstract methods

<?php

class Honda extends Car {
  // Since we inherited abstract method, we need to define it in the child class,
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank()
  {
    $miles = $this -> tankVolume*30;
    return $miles;
  }
}

class Toyota extends Car {
  // Since we inherited abstract method, we need to define it in the child class,
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank()
  {
    return $miles = $this -> tankVolume*33;
  }

  public function getColor()
  {
    return "beige";
  }
}

$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();//330
echo $toyota1 -> getColor();//beige
 ?>

 <!-- What are interfaces -->

 - they resemble "abstract classes" in that they include abstract methods that the programmer must define
 in the classes that inherit from the interface

 - it commits its child classes to abstract methods that they should implement

 <!-- How to declare and implement an interface -->

<?php

interface interfaceName
{
    //abstract methods
}

class Child implements interfaceName
{
    // defines the interface methods and may have its own code
}

 ?>

*** Interfaces, like abstract classes, include abstract methods and constants.
However, unlike abstract classes, interfaces can only have public methods and cannot have variables

*** The classes that implement the interfaces must define all the methods that they inherit
from the interfaces, including all the parameters

Eg -

<?php

interface Car {
  public function setModel($name);

  public function getModel();
}

class miniCar implements Car {
  private $model;

  public function setModel($name)
  {
    $this -> model = $name;
  }

  public function getModel()
  {
    return $this -> model;
  }
}
 ?>

** we can implement more than one interface in the same class

<!-- Differences between abstract classes and interfaces -->

1. Interfaces can include abstract methods and constants, but cannot contain concrete methods and variables
2. all the methods in the interface must be in the public visibility scope
3. A class can implement more than one interface, while it can inherit from only one abstract class

4. Abstract class focuses on a kind of things similarity

Eg - People are considered type of "mammal" and as such would not be considered of type "vehicle"

<?php
abstract class Mammal {
      protected $age_;
      //below are functions I think all mammals will have,including people
      abstract public function setAge($age);
      abstract public function getAge();
      abstract public function eat($food);
}
class Person extends Mammal {
      protected $job_; //Person's feature
      public function setAge($age){
        $this->age_ = $age;
      }

      public function getAge(){
        return $this->age_;
      }

      public function eat($food){
        echo 'I eat ' ,$food ,'today';
      }

      //People only attribute
      public function setJob($job){
         $this->job_ = $job;
      }
      public function getJob(){
         echo 'My job is ' , $this->job_;
      }

}
 ?>

** Interface focuses on collation of similar functions
Eg - We are a human being and are of type "mammal".
- If we want to fly then we will need to implement the "flying Interface"
- if we want to shoot while flying, we will also need to implement the "gun interface"

<?php

//Now a person wants to fly, but they are typically not able to do so.
//So we implement an interface
interface Plane{
  public function Fly();
}

//I also want shoot enemy
interface Gun{
  public function shoot();
}

class Person2 extends Mammal implements Plane,Gun{

      protected $job_;//Person feature
      public function setAge($age){
        $this->age_ = $age;
      }
      public function getAge(){
        return $this->age_;
      }
      public function eat($food){
        echo '<br/>I eat ' ,$food ,' today<br/>';
      }
      //Only a person has this feature.
      public function setJob($job){
         $this->job_ = $job;
      }
      public function getJob(){
         echo 'My job is ' , $this->job_;
      }

      //-----------------------------------------
      //below implementations from interfaces function. (features that humans do not have).
      //Person implements from other class
      public function fly(){
        echo '<br/>I use plane,so I can fly<br/>';
      }
      public function shoot(){
        echo 'I use gun,so I can shoot<br/>';
      }
}

 ?>
<!-- Pictorial representation -->
https://imgur.com/a/aiyOu

<!-- What are traits in PHP -->

- In traits, we can group the methods we need to redeclare in varoius classes

Eg -

<?php

trait my_first_trait
{
    public function traitFunction()
    {
        echo "This is callable by our class object"
    }
}

    class helloWorld
    {
        use my_first_trait;
    }

    $objTest = new Helloworld();
    $objTest->traitFunction();

 ?>

 <!-- How to use multiple traits in a class -->

 <?php

 trait trait1 //declaration of first trait
 {
 public function hello1()
 {
 echo 1;
 }
 }
 trait trait2 //second trait
 {
 function hello2()
 {
 echo 1;
 }
 }
 class cls_class
 {
 use trait1 , trait2;
 }

  ?>

<!-- When the use traits -->

- only when multiple classes share the same functionality


<!-- Polymorphism in PHP -->

- methods in different classes that do similar things should have the same name

Eg -
Geometric shapes have different properties and their own method of calculating area but the names of the methods should be same

** To implement it ,we can choose between abstract classes and interfaces

Eg -

<?php

interface Shape {
  public function calcArea();
}

class Circle implements Shape {
  private $radius;

  public function __construct($radius)
  {
    $this -> radius = $radius;
  }

  // calcArea calculates the area of circles
  public function calcArea()
  {
    return $this -> radius * $this -> radius * pi();
  }
}

class Rectangle implements Shape {
  private $width;
  private $height;

  public function __construct($width, $height)
  {
    $this -> width = $width;
    $this -> height = $height;
  }

  // calcArea calculates the area of rectangles
  public function calcArea()
  {
    return $this -> width * $this -> height;
  }
}
 ?>

<!-- What is type hinting in PHP -->

- We can specify the expected data type (Arrays, objects, interface etc.) for an argument in a function declaration
- this helps in better code organization and improved error message

<!-- How to do array type hinting  -->

Eg -

<?php
function fnName(array $argumentName)
{
    //code
}
 ?>

<!-- How to do object type hinting -->

Eg -

<?php

class Car {
  protected $driver;

  // The constructor can only get Driver objects as arguments.
  public function __construct(Driver $driver)
  {
    $this -> driver = $driver;
  }
}

class Driver {}


$driver1 = new Driver();
$car1    = new Car($driver1);
 ?>

** PHP 7 supports scalar type hinting

** The following code can only work in PHP 7

<?php

class car {
  protected $model;
  protected $hasSunRoof;
  protected $numberOfDoors;
  protected $price;

  // string type hinting
  public function setModel(string $model)
  {
    $this->model = $model;
  }

  // boolean type hinting
  public function setHasSunRoof(bool $value)
  {
    $this->hasSunRoof = $value;
  }

  // integer type hinting
  public function setNumberOfDoors(int $value)
  {
    $this->numberOfDoors = $value;
  }

  // float type hinting
  public function setPrice(float $value)
  {
    $this->price = $value;
  }
}
 ?>

 <!-- What are static methods and properties -->

 - To approach methods and properties of a class without the need to create an object out of the class

 <!-- How to define static methods and properties -->

 <?php

 class Utilis
 {
   // static methods and properties are defined with the static keyword.
   static public $numCars = 0;
 }

 // set the number of cars
 Utilis::$numCars = 3;

 // get the number of cars
 echo Utilis::$numCars;

  ?>

<!-- How to approach the static methods from within the class -->

- we use the "self" keyword for that

Eg -

<?php

class Utilis {
  static public $numCars = 0;

  static public function addToNumCars($int)
  {
    $int = (int)$int;
    self::$numCars += $int;
  }
}

echo Utilis::$numCars;

Utilis::addToNumCars(3);
echo Utilis::$numCars;

Utilis::addToNumCars(-1);
echo Utilis::$numCars;

 ?>

<!-- How to call a function in the parent class(with some safety) in the public method of child classes  -->

<?php
    class dog {
        public $Name;
        protected function getName() {
            return $this->Name;
        }
    }

    class poodle extends dog {
        public function bark() {
            print "'Woof', says " . $this->getName();
        }
    }

    $poppy = new poodle;
    $poppy->Name = "Poppy";
    $poppy->bark();
?>
