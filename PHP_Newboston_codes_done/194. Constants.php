<?php

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


 ?>
